<?php

declare(strict_types=1);

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

namespace MASK\Mask\CodeGenerator;

use InvalidArgumentException;
use MASK\Mask\Definition\ElementTcaDefinition;
use MASK\Mask\Definition\PaletteDefinition;
use MASK\Mask\Definition\TableDefinition;
use MASK\Mask\Definition\TableDefinitionCollection;
use MASK\Mask\Definition\TcaFieldDefinition;
use MASK\Mask\Enumeration\FieldType;
use MASK\Mask\Utility\AffixUtility;
use MASK\Mask\Utility\DateUtility;
use TYPO3\CMS\Core\Information\Typo3Version;
use TYPO3\CMS\Core\Preparations\TcaPreparation;
use TYPO3\CMS\Core\Resource\File;
use TYPO3\CMS\Core\Resource\OnlineMedia\Helpers\OnlineMediaHelperRegistry;
use TYPO3\CMS\Core\Utility\ArrayUtility;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;

/**
 * Generates all the TCA needed for mask content elements and backend layout fields.
 *
 * @internal
 */
class TcaCodeGenerator
{
    protected TableDefinitionCollection $tableDefinitionCollection;
    protected OnlineMediaHelperRegistry $onlineMediaHelperRegistry;

    public function __construct(
        TableDefinitionCollection $tableDefinitionCollection,
        OnlineMediaHelperRegistry $onlineMediaHelperRegistry
    ) {
        $this->tableDefinitionCollection = $tableDefinitionCollection;
        $this->onlineMediaHelperRegistry = $onlineMediaHelperRegistry;
    }

    /**
     * Generates and sets the correct tca for all the inline fields
     */
    public function setInlineTca(TableDefinitionCollection $tableDefinitionCollection = null): void
    {
        $this->tableDefinitionCollection = $tableDefinitionCollection ?? $this->tableDefinitionCollection;
        foreach ($this->tableDefinitionCollection as $tableDefinition) {
            $table = $tableDefinition->table;
            if (!AffixUtility::hasMaskPrefix($table)) {
                continue;
            }
            // Ignore table with missing tca
            if (empty($tableDefinition->tca)) {
                continue;
            }
            // Enhance boilerplate table tca with user settings
            try {
                $GLOBALS['TCA'][$table] = $this->generateTableTca($tableDefinition);
            } catch (InvalidArgumentException $e) {
                continue;
            }

            ExtensionManagementUtility::addTCAcolumns($table, $this->generateFieldsTca($table));
        }
    }

    /**
     * Generates the TCA for a new custom table.
     */
    public function generateTableTca(TableDefinition $tableDefinition): array
    {
        $table = $tableDefinition->table;
        // Generate Table TCA
        $processedTca = $this->processTableTca($tableDefinition);
        $parentTable = $this->tableDefinitionCollection->getTableByField($table);

        if ($parentTable === '') {
            throw new \InvalidArgumentException(sprintf('No parent table found for field "%s".', $table), 1629495345);
        }

        // Adjust TCA-Template
        $tableTca = self::getTcaTemplate();
        $appendLanguageTab = ',--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language';
        $appendAccessTab = ',--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;;access';

        $tableTca['ctrl']['title'] = $table;
        $tableTca['ctrl']['label'] = $processedTca['label'];
        $tableTca['ctrl']['iconfile'] = 'EXT:mask/Resources/Public/Icons/Extension.svg';

        $tableTca['types']['1']['showitem'] = $processedTca['showitem'] . $appendLanguageTab . $appendAccessTab;

        $tableTca['columns']['l10n_parent']['config']['foreign_table'] = $table;
        $tableTca['columns']['l10n_parent']['config']['foreign_table_where'] = "AND $table.pid=###CURRENT_PID### AND $table.sys_language_uid IN (-1, 0)";

        $tableTca['columns']['parentid']['config']['foreign_table'] = $parentTable;
        $tableTca['columns']['parentid']['config']['foreign_table_where'] = "AND $parentTable.pid=###CURRENT_PID### AND $parentTable.sys_language_uid IN (-1, ###REC_FIELD_sys_language_uid###)";

        // Add palettes
        foreach ($tableDefinition->palettes as $palette) {
            $tableTca['palettes'][$palette->key] = $this->generatePalettesTca($palette, $table);
        }

        $field = $this->tableDefinitionCollection->getTable($parentTable)->tca->getField($table);
        // Set label for inline if defined
        if ($field->inlineLabel !== '' && $tableDefinition->tca->hasField($field->inlineLabel)) {
            $tableTca['ctrl']['label'] = $field->inlineLabel;
        }

        // Set icon for inline
        if ($field->inlineIcon !== '') {
            $tableTca['ctrl']['iconfile'] = $field->inlineIcon;
        }

        $tableTca['ctrl']['searchFields'] = $this->addSearchFields($table);

        return $tableTca;
    }

    /**
     * Generates and sets the tca for all content elements.
     */
    public function setElementsTca(): void
    {
        if (!$this->tableDefinitionCollection->hasTable('tt_content')) {
            return;
        }

        $defaultTabs = ',--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended';
        $prependTabs = '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,';
        $defaultPalette = '--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,';

        // Add gridelements fields, to make mask work with gridelements out of the box
        $gridelements = '';
        if (ExtensionManagementUtility::isLoaded('gridelements')) {
            $gridelements = ', tx_gridelements_container, tx_gridelements_columns';
        }

        // Add new group in CType selectbox
        ExtensionManagementUtility::addTcaSelectItemGroup(
            'tt_content',
            'CType',
            'mask',
            'LLL:EXT:mask/Resources/Private/Language/locallang_mask.xlf:new_content_element_tab',
            'after:default'
        );

        $tt_content = $this->tableDefinitionCollection->getTable('tt_content');

        foreach ($tt_content->palettes as $palette) {
            $GLOBALS['TCA']['tt_content']['palettes'][$palette->key] = $this->generatePalettesTca($palette, 'tt_content');
        }

        $typo3Version = new Typo3Version();
        foreach ($tt_content->elements as $element) {
            if ($element->hidden) {
                continue;
            }

            $cTypeKey = AffixUtility::addMaskCTypePrefix($element->key);

            // Optional shortLabel
            $label = $element->shortLabel ?: $element->label;

            // Add new entry in CType selectbox
            ExtensionManagementUtility::addTcaSelectItem(
                'tt_content',
                'CType',
                [
                    ($typo3Version->getMajorVersion() > 11 ? 'label' : 0) => $label,
                    ($typo3Version->getMajorVersion() > 11 ? 'value' : 1) => $cTypeKey,
                    ($typo3Version->getMajorVersion() > 11 ? 'icon' : 2) => 'mask-ce-' . $element->key,
                    ($typo3Version->getMajorVersion() > 11 ? 'group' : 3) => 'mask',
                ]
            );

            // Add all the fields that should be shown
            [$prependTabs, $fields] = $this->generateShowItem($prependTabs, $element->key, 'tt_content');

            $GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes'][$cTypeKey] = 'mask-ce-' . $element->key;
            $elementTca = $this->tableDefinitionCollection->loadElement('tt_content', $element->key);

            // Check if the element uses the core bodytext field, and it is of type richtext.
            // If so, enable the richtext editor for it.
            if ($elementTca instanceof ElementTcaDefinition
                && $elementTca->tcaDefinition->hasField('bodytext')
            ) {
                $bodytext = $elementTca->tcaDefinition->getField('bodytext');
                if (
                    !$bodytext->hasFieldType($element->key)
                    || $bodytext->getFieldType($element->key)->equals(FieldType::RICHTEXT)
                ) {
                    $GLOBALS['TCA']['tt_content']['types'][$cTypeKey]['columnsOverrides']['bodytext']['config']['enableRichtext'] = 1;
                }
            }
            $GLOBALS['TCA']['tt_content']['types'][$cTypeKey]['showitem'] = $prependTabs . $defaultPalette . $fields . $defaultTabs . $gridelements;
        }
    }

    /**
     * Returns the palettes of a page layout for the given key.
     */
    public function getPagePalettes(string $elementKey): array
    {
        $palettes = [];
        $pages = $this->tableDefinitionCollection->getTable('pages');
        $element = $pages->elements->getElement($elementKey);
        foreach ($element->columns as $column) {
            if ($this->tableDefinitionCollection->getFieldType($column, 'pages')->equals(FieldType::PALETTE)) {
                $palettes[$column] = $this->generatePalettesTca($pages->palettes->getPalette($column), 'pages');
            }
        }
        return $palettes;
    }

    /**
     * Generates the showitem string for pages
     */
    public function getPageShowItem(string $layoutKey): string
    {
        $prependTabs = '--div--;Content-Fields,';
        [$prependTabs, $fields] = $this->generateShowItem($prependTabs, $layoutKey, 'pages');

        return ',' . $prependTabs . $fields;
    }

    /**
     * Generates the showitem string for the given
     */
    protected function generateShowItem(string $prependTabs, string $elementKey, string $table): array
    {
        $element = $this->tableDefinitionCollection->getTable($table)->elements->getElement($elementKey);
        $fieldArray = [];
        foreach ($element->columns as $index => $fieldKey) {
            // In case the configuration relies on a field of an extension loaded
            // after Mask, fall back to string type.
            try {
                $fieldType = $this->tableDefinitionCollection->getFieldType($fieldKey, $table);
            } catch (InvalidArgumentException $e) {
                $fieldType = new FieldType(FieldType::STRING);
            }
            // Check if this field is of type tab
            if ($fieldType->equals(FieldType::TAB)) {
                $label = $this->tableDefinitionCollection->getLabel($elementKey, $fieldKey, $table);
                // If a tab is in the first position then change the name of the general tab
                if ($index === 0) {
                    $prependTabs = '--div--;' . $label . ',';
                } else {
                    // Otherwise just add new tab
                    $fieldArray[] = '--div--;' . $label;
                }
            } elseif ($fieldType->equals(FieldType::PALETTE)) {
                $fieldArray[] = '--palette--;;' . $fieldKey;
            } elseif ($fieldType->equals(FieldType::INLINE)) {
                // Make sure only inline fields with at least 1 field are added.
                $inlineFields = $this->tableDefinitionCollection->loadInlineFields($fieldKey, $element->key, $element);
                if ($inlineFields->toArray() !== []) {
                    $fieldArray[] = $fieldKey;
                }
            } else {
                $fieldArray[] = $fieldKey;
            }
        }
        $fields = implode(',', $fieldArray);

        return [$prependTabs, $fields];
    }

    /**
     * Generates the TCA needed for palettes.
     */
    protected function generatePalettesTca(PaletteDefinition $palette, string $table): array
    {
        $showitem = [];
        foreach ($palette->showitem as $item) {
            if ($this->tableDefinitionCollection->getFieldType($item, $table)->equals(FieldType::LINEBREAK)) {
                $showitem[] = '--linebreak--';
            } else {
                $showitem[] = $item;
            }
        }

        $description = $palette->description;
        if ($description === '') {
            $paletteField = $this->tableDefinitionCollection->loadField($table, $palette->key);
            if ($paletteField instanceof TcaFieldDefinition) {
                $description = $paletteField->description;
            }
        }

        return [
            'label' => $palette->label,
            'description' => $description,
            'showitem' => implode(',', $showitem),
        ];
    }

    /**
     * Generates the TCA for fields
     */
    public function generateFieldsTca(string $table): array
    {
        // Early return if page does not exist.
        if (!$this->tableDefinitionCollection->hasTable($table)) {
            return [];
        }

        $additionalTca = [];
        foreach ($this->tableDefinitionCollection->getTable($table)->tca as $field) {
            // Ignore core fields
            if ($field->isCoreField) {
                continue;
            }

            if (!$field->hasFieldType()) {
                $field->setFieldType($this->tableDefinitionCollection->getFieldType($field->fullKey, $table));
            }

            $fieldType = $field->getFieldType();

            // Inline: Ignore empty inline fields
            if ($fieldType->isParentField() && !$this->tableDefinitionCollection->hasTable($field->fullKey)) {
                continue;
            }

            // Ignore grouping elements
            if ($fieldType->isGroupingField()) {
                continue;
            }

            $additionalTca[$field->fullKey] = [];

            // File: Add file config.
            if ($fieldType->equals(FieldType::FILE) || $fieldType->equals(FieldType::MEDIA)) {
                $additionalTca[$field->fullKey]['config'] = $this->getFileTCAConfig($fieldType, $field);
            }

            // Inline (Repeating): Fill missing foreign_table in tca config.
            if (($field->realTca['config']['foreign_table'] ?? '') === '--inlinetable--') {
                $field->realTca['config']['foreign_table'] = $field->fullKey;
            }

            $field->realTca['config'] = self::reconfigureTCAConfig($field, $field->realTca['config']);

            // InputLink: Add softref
            if ($fieldType->equals(FieldType::LINK)) {
                $field->realTca['config']['softref'] = 'typolink';
            }

            // Content: Set foreign_field and default CType in select if restricted.
            if ($fieldType->equals(FieldType::CONTENT)) {
                $field->realTca['config']['foreign_field'] = 'tx_mask_content_parent_uid';
                $field->realTca['config']['foreign_table_field'] = 'tx_mask_content_tablenames';
                $field->realTca['config']['foreign_match_fields'] = [
                    'tx_mask_content_role' => $field->fullKey,
                ];
                if ($table === 'tt_content') {
                    $additionalTca['tx_mask_content_parent_uid'] = [
                        'config' => [
                            'type' => 'passthrough',
                        ],
                    ];
                }
                if (!empty($field->cTypes)) {
                    $field->realTca['config']['overrideChildTca']['columns']['CType']['config']['default'] = reset($field->cTypes);
                }
            }

            // Exclude all fields for editors by default
            $field->realTca['exclude'] = 1;

            // Merge user inputs with file array (for file type overrides)
            ArrayUtility::mergeRecursiveWithOverrule($additionalTca[$field->fullKey], $field->realTca);
        }
        return $additionalTca;
    }

    private function getFileTCAConfig(FieldType $fieldType, TcaFieldDefinition $field, ?TcaFieldDefinition $columnsOverride = null): array
    {
        if ($field->imageoverlayPalette || $fieldType->equals(FieldType::MEDIA)) {
            $customSettingOverride = [
                'overrideChildTca' => [
                    'types' => [
                        '0' => [
                            'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                        ],
                        File::FILETYPE_TEXT => [
                            'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                        ],
                        File::FILETYPE_IMAGE => [
                            'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                        ],
                        File::FILETYPE_AUDIO => [
                            'showitem' => '
                                --palette--;;audioOverlayPalette,
                                --palette--;;filePalette',
                        ],
                        File::FILETYPE_VIDEO => [
                            'showitem' => '
                                --palette--;;videoOverlayPalette,
                                --palette--;;filePalette',
                        ],
                        File::FILETYPE_APPLICATION => [
                            'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                        ],
                    ],
                ],
            ];
        }

        $customSettingOverride['appearance'] = array_replace_recursive(
            $field->realTca['config']['appearance'] ?? [],
            $columnsOverride instanceof TcaFieldDefinition ? ($columnsOverride->realTca['config']['appearance'] ?? []) : []
        );
        $customSettingOverride['appearance']['fileUploadAllowed'] = (bool)($customSettingOverride['appearance']['fileUploadAllowed'] ?? true);
        $customSettingOverride['appearance']['useSortable'] = (bool)($customSettingOverride['appearance']['useSortable'] ?? false);

        // read from columnsOverride if set
        $field->allowedFileExtensions = ($columnsOverride instanceof TcaFieldDefinition && $columnsOverride->allowedFileExtensions !== '')
            ? $columnsOverride->allowedFileExtensions
            : $field->allowedFileExtensions;
        $field->onlineMedia = ($columnsOverride instanceof TcaFieldDefinition && $columnsOverride->onlineMedia !== [])
            ? $columnsOverride->onlineMedia
            : $field->onlineMedia;

        $typo3Version = new Typo3Version();
        if ($fieldType->equals(FieldType::FILE) && $field->allowedFileExtensions === '') {
            if ($typo3Version->getMajorVersion() < 12) {
                $field->allowedFileExtensions = $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext'];
            } else {
                $field->allowedFileExtensions = 'common-image-types';
            }
        }

        if ($fieldType->equals(FieldType::MEDIA) && $field->allowedFileExtensions === '') {
            if ($typo3Version->getMajorVersion() < 12) {
                $field->allowedFileExtensions = $GLOBALS['TYPO3_CONF_VARS']['SYS']['mediafile_ext'];
            } else {
                $field->allowedFileExtensions = 'common-media-types';
            }
        }

        // Only allow media types the user has selected, but always include the rest.
        if ($fieldType->equals(FieldType::MEDIA)) {
            $onlineMediaHelpers = $this->onlineMediaHelperRegistry->getSupportedFileExtensions();
            $allowedFileExtensionList = GeneralUtility::trimExplode(',', $field->allowedFileExtensions, true);
            $alwaysIncluded = array_diff($allowedFileExtensionList, $onlineMediaHelpers);
            $field->allowedFileExtensions = implode(',', array_merge($alwaysIncluded, $field->onlineMedia));
        }

        if ($typo3Version->getMajorVersion() < 12) {
            return ExtensionManagementUtility::getFileFieldTCAConfig($field->fullKey, $customSettingOverride, $field->allowedFileExtensions);
        }

        $field->allowedFileExtensions = TcaPreparation::prepareFileExtensions($field->allowedFileExtensions);
        $fileFieldTCAConfig = [
            'type' => 'file',
            'allowed' => $field->allowedFileExtensions,
        ];
        ArrayUtility::mergeRecursiveWithOverrule($fileFieldTCAConfig, $customSettingOverride);
        return $fileFieldTCAConfig;
    }

    private static function reconfigureTCAConfig(TcaFieldDefinition $field, array $tcaConfig, string $elementKey = ''): array
    {
        $fieldType = $field->getFieldType($elementKey);
        $dbType = $field->realTca['config']['dbType'] ?? '';
        // Convert Date and Datetime default and ranges to timestamp
        if (in_array($dbType, ['date', 'datetime'])) {
            $default = $tcaConfig['default'] ?? false;
            if ($default) {
                $tcaConfig['default'] = DateUtility::convertStringToTimestampByDbType($dbType, $default);
            }
            $upper = $tcaConfig['range']['upper'] ?? false;
            if ($upper) {
                $tcaConfig['range']['upper'] = DateUtility::convertStringToTimestampByDbType($dbType, $upper);
            }
            $lower = $tcaConfig['range']['lower'] ?? false;
            if ($lower) {
                $tcaConfig['range']['lower'] = DateUtility::convertStringToTimestampByDbType($dbType, $lower);
            }
        }

        // Text: Set correct rendertype if format (code highlighting) is set.
        if ($fieldType->equals(FieldType::TEXT) && ($tcaConfig['format'] ?? false)) {
            $tcaConfig['renderType'] = 't3editor';
        }

        // RTE: Add softref
        if ($fieldType->equals(FieldType::RICHTEXT)) {
            $tcaConfig['softref'] = 'typolink_tag,email[subst],url';
        }

        return $tcaConfig;
    }

    /**
     * Generates TCA columns overrides for labels and descriptions.
     */
    public function generateTCAColumnsOverrides(string $table): array
    {
        if (!$this->tableDefinitionCollection->hasTable($table)) {
            return [];
        }

        $TCAColumnsOverrides = [];
        $tableDefinition = $this->tableDefinitionCollection->getTable($table);

        // Go through all root fields defined in elements and find possible overrides.
        foreach ($tableDefinition->elements as $element) {
            $cType = AffixUtility::addMaskCTypePrefix($element->key);
            foreach ($element->columns as $index => $fieldName) {
                $fieldDefinition = $this->tableDefinitionCollection->loadField($table, $fieldName);
                if (!$fieldDefinition instanceof TcaFieldDefinition) {
                    continue;
                }

                // Do not generate any overrides for empty inline fields.
                if (
                    $fieldDefinition->hasFieldType()
                    && $fieldDefinition->getFieldType()->equals(FieldType::INLINE)
                    && $this->tableDefinitionCollection->loadInlineFields($fieldDefinition->fullKey, $element->key, $element)->toArray() === []
                ) {
                    continue;
                }

                // Do not generate any overrides for tabs.
                if ($fieldDefinition->hasFieldType() && $fieldDefinition->getFieldType()->equals(FieldType::TAB)) {
                    continue;
                }

                // Build TCA columns overrides.
                if ($fieldDefinition->hasFieldType() && $fieldDefinition->getFieldType()->equals(FieldType::PALETTE)) {
                    foreach ($this->tableDefinitionCollection->loadInlineFields($fieldName, $element->key, $element) as $paletteField) {
                        $label = $paletteField->getLabel($element->key);
                        if ($label !== '') {
                            $TCAColumnsOverrides[$table]['types'][$cType]['columnsOverrides'][$paletteField->fullKey]['label'] = $label;
                        }
                        $description = $paletteField->getDescription($element->key);
                        if ($description !== '') {
                            $TCAColumnsOverrides[$table]['types'][$cType]['columnsOverrides'][$paletteField->fullKey]['description'] = $description;
                        }
                        if ($table === 'tt_content' && $element->hasColumnsOverride($paletteField->fullKey)) {
                            $tcaConfig = $this->processOverrideTca($paletteField, $element->getColumnsOverride($paletteField->fullKey), $element->key);
                            $TCAColumnsOverrides[$table]['types'][$cType]['columnsOverrides'][$paletteField->fullKey]['config'] = $tcaConfig;
                        }
                    }
                } else {
                    $label = $element->labels[$index] ?? '';
                    if ($label !== '') {
                        $TCAColumnsOverrides[$table]['types'][$cType]['columnsOverrides'][$fieldDefinition->fullKey]['label'] = $label;
                    }

                    $description = $element->descriptions[$index] ?? '';
                    if ($description !== '') {
                        $TCAColumnsOverrides[$table]['types'][$cType]['columnsOverrides'][$fieldDefinition->fullKey]['description'] = $description;
                    }

                    if ($table === 'tt_content' && $element->hasColumnsOverride($fieldDefinition->fullKey)) {
                        $tcaConfig = $this->processOverrideTca($fieldDefinition, $element->getColumnsOverride($fieldDefinition->fullKey), $element->key);
                        $TCAColumnsOverrides[$table]['types'][$cType]['columnsOverrides'][$fieldDefinition->fullKey]['config'] = $tcaConfig;
                    }
                }
            }
        }

        return $TCAColumnsOverrides;
    }

    protected function processOverrideTca(TcaFieldDefinition $tcaFieldDefinition, TcaFieldDefinition $overrideTcaFieldDefinition, string $elementKey): array
    {
        $tcaConfig = $overrideTcaFieldDefinition->getOverridesDefinition();
        $tcaConfig['config'] = self::reconfigureTCAConfig($tcaFieldDefinition, $tcaConfig['config'], $elementKey);
        // File: Add file config.
        if ($tcaFieldDefinition->getFieldType($elementKey)->isFileReference()) {
            $fileTca = $this->getFileTCAConfig(
                $tcaFieldDefinition->getFieldType(),
                $tcaFieldDefinition,
                $overrideTcaFieldDefinition
            );
            ArrayUtility::mergeRecursiveWithOverrule($tcaConfig['config'], $fileTca);
        }
        return $tcaConfig['config'];
    }

    /**
     * Processes the TCA for Inline-Tables
     */
    public function processTableTca(TableDefinition $tableDefinition): array
    {
        $generalTab = '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general';
        $fields = [];
        $firstField = true;
        foreach ($tableDefinition->tca as $field) {
            // check if this field is of type tab
            $fieldType = $this->tableDefinitionCollection->getFieldType($field->fullKey, $tableDefinition->table);
            if ($fieldType->equals(FieldType::TAB)) {
                // if a tab is in the first position then change the name of the general tab
                if ($firstField) {
                    $generalTab = '--div--;' . $field->label;
                } else {
                    // otherwise just add new tab
                    $fields[] = '--div--;' . $field->label;
                }
            } elseif ($fieldType->equals(FieldType::PALETTE)) {
                if ($firstField && empty($tableDefinition->palettes->getPalette($field->fullKey)->showitem)) {
                    $firstField = false;
                    continue;
                }
                $fields[] = '--palette--;;' . $field->fullKey;
            } elseif (!$field->inPalette) {
                $fields[] = $field->fullKey;
            }
            $firstField = false;
        }

        // take first field for inline label
        $labelField = '';
        if (!empty($fields)) {
            $labelField = $this->getFirstNoneTabField($fields);
            // If first field is palette, get label of first field in this palette.
            if (str_starts_with($labelField, '--palette--;;')) {
                $palette = str_replace('--palette--;;', '', $labelField);
                $labelField = $tableDefinition->palettes->getPalette($palette)->showitem[0];
            }
        }

        return [
            'label' => $labelField,
            'showitem' => $generalTab . ',' . implode(',', $fields),
        ];
    }

    /**
     * Add search fields to find mask elements or pages
     */
    public function addSearchFields(string $table): string
    {
        $searchFieldsString = $GLOBALS['TCA'][$table]['ctrl']['searchFields'] ?? '';
        if (!$this->tableDefinitionCollection->hasTable($table)) {
            return $searchFieldsString;
        }

        $searchFields = GeneralUtility::trimExplode(',', $searchFieldsString, true);
        $tca = $this->tableDefinitionCollection->getTable($table)->tca;

        foreach ($tca as $field) {
            // In case the configuration relies on a field of an extension loaded
            // after Mask, fall back to string type. This will be true for the
            // most cases. And if not, it's no big deal if they are searchable.
            try {
                $fieldType = $this->tableDefinitionCollection->getFieldType($field->fullKey, $table);
            } catch (InvalidArgumentException $e) {
                $fieldType = new FieldType(FieldType::STRING);
            }
            if ($fieldType->isSearchable() && !in_array($field->fullKey, $searchFields, true)) {
                $searchFields[] = $field->fullKey;
            }
        }

        if ($searchFields === []) {
            return '';
        }

        return implode(',', $searchFields);
    }

    public function extendBodytextSearchAndWhere(): string
    {
        if (!$this->tableDefinitionCollection->hasTable('tt_content')) {
            return '';
        }

        $tt_content = $this->tableDefinitionCollection->getTable('tt_content');
        $andWhere = '';
        foreach ($tt_content->elements as $element) {
            $elementTcaDefinition = $this->tableDefinitionCollection->loadElement('tt_content', $element->key);
            if ($elementTcaDefinition->tcaDefinition->hasField('bodytext')) {
                $andWhere .= ' OR {#CType}=\'' . AffixUtility::addMaskCTypePrefix($element->key) . '\'';
            }
        }

        return $andWhere;
    }

    /**
     * Searches an array of strings and returns the first string, that is not a tab
     * @todo Move test cases to processTableTca and set protected.
     */
    public function getFirstNoneTabField(array $fields): string
    {
        if (!empty($fields)) {
            $potentialFirst = array_shift($fields);
            if (!is_string($potentialFirst) || str_contains($potentialFirst, '--div--')) {
                return $this->getFirstNoneTabField($fields);
            }
            return $potentialFirst;
        }
        return '';
    }

    protected static function getTcaTemplate(): array
    {
        $typo3Version = new Typo3Version();
        if ($typo3Version->getMajorVersion() > 11) {
            $starttime = [
                'exclude' => true,
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
                'config' => [
                    'type' => 'datetime',
                    'default' => 0,
                ],
                'l10n_mode' => 'exclude',
                'l10n_display' => 'defaultAsReadonly',
            ];
            $endtime = [
                'exclude' => true,
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
                'config' => [
                    'type' => 'datetime',
                    'default' => 0,
                    'range' => [
                        'upper' => mktime(0, 0, 0, 1, 1, 2038),
                    ],
                ],
                'l10n_mode' => 'exclude',
                'l10n_display' => 'defaultAsReadonly',
            ];
        } else {
            $starttime = [
                'exclude' => true,
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
                'config' => [
                    'type' => 'input',
                    'renderType' => 'inputDateTime',
                    'eval' => 'datetime,int',
                    'default' => 0,
                ],
                'l10n_mode' => 'exclude',
                'l10n_display' => 'defaultAsReadonly',
            ];
            $endtime = [
                'exclude' => true,
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
                'config' => [
                    'type' => 'input',
                    'renderType' => 'inputDateTime',
                    'eval' => 'datetime,int',
                    'default' => 0,
                    'range' => [
                        'upper' => mktime(0, 0, 0, 1, 1, 2038),
                    ],
                ],
                'l10n_mode' => 'exclude',
                'l10n_display' => 'defaultAsReadonly',
            ];
        }
        $tcaTemplate = [
            'ctrl' => [
                'sortby' => 'sorting',
                'tstamp' => 'tstamp',
                'crdate' => 'crdate',
                'cruser_id' => 'cruser_id',
                'editlock' => 'editlock',
                'versioningWS' => true,
                'origUid' => 't3_origuid',
                'languageField' => 'sys_language_uid',
                'transOrigPointerField' => 'l10n_parent',
                'translationSource' => 'l10n_source',
                'transOrigDiffSourceField' => 'l10n_diffsource',
                'delete' => 'deleted',
                'enablecolumns' => [
                    'disabled' => 'hidden',
                    'starttime' => 'starttime',
                    'endtime' => 'endtime',
                    'fe_group' => 'fe_group',
                ],
                'hideTable' => true,
                'security' => [
                    'ignorePageTypeRestriction' => true,
                ],
            ],
            'palettes' => [
                'language' => [
                    'showitem' => '
                        sys_language_uid;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:sys_language_uid_formlabel,l10n_parent
                    ',
                ],
                'hidden' => [
                    'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.visibility',
                    'showitem' => 'hidden',
                ],
                'access' => [
                    'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access',
                    'showitem' => '
                        starttime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:starttime_formlabel,
                        endtime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:endtime_formlabel,
                        --linebreak--,
                        fe_group;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:fe_group_formlabel,
                        --linebreak--,editlock
                    ',
                ],
            ],
            'columns' => [
                'editlock' => [
                    'exclude' => true,
                    'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:editlock',
                    'config' => [
                        'type' => 'check',
                        'renderType' => 'checkboxToggle',
                        'items' => [
                            [
                                ($typo3Version->getMajorVersion() > 11 ? 'label' : 0) => '',
                                ($typo3Version->getMajorVersion() > 11 ? 'value' : 1) => '',
                            ],
                        ],
                    ],
                ],
                'sys_language_uid' => [
                    'exclude' => true,
                    'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
                    'config' => [
                        'type' => 'language',
                    ],
                ],
                'l10n_parent' => [
                    'displayCond' => 'FIELD:sys_language_uid:>:0',
                    'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
                    'config' => [
                        'type' => 'select',
                        'renderType' => 'selectSingle',
                        'items' => [
                            [
                                ($typo3Version->getMajorVersion() > 11 ? 'label' : 0) => '',
                                ($typo3Version->getMajorVersion() > 11 ? 'value' : 1) => 0,
                            ],
                        ],
                        'default' => 0,
                    ],
                ],
                'l10n_diffsource' => [
                    'config' => [
                        'type' => 'passthrough',
                    ],
                ],
                'hidden' => [
                    'exclude' => true,
                    'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.disable',
                    'config' => [
                        'type' => 'check',
                        'renderType' => 'checkboxToggle',
                        'items' => [
                            [
                                ($typo3Version->getMajorVersion() > 11 ? 'label' : 0) => '',
                                ($typo3Version->getMajorVersion() > 11 ? 'value' : 1) => '',
                            ],
                        ],
                    ],
                ],
                'starttime' => $starttime,
                'endtime' => $endtime,
                'fe_group' => [
                    'exclude' => true,
                    'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.fe_group',
                    'config' => [
                        'type' => 'select',
                        'renderType' => 'selectMultipleSideBySide',
                        'size' => 5,
                        'maxitems' => 20,
                        'items' => [
                            [
                                ($typo3Version->getMajorVersion() > 11 ? 'label' : 0) => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hide_at_login',
                                ($typo3Version->getMajorVersion() > 11 ? 'value' : 1) => -1,
                            ],
                            [
                                ($typo3Version->getMajorVersion() > 11 ? 'label' : 0) => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.any_login',
                                ($typo3Version->getMajorVersion() > 11 ? 'value' : 1) => -2,
                            ],
                            [
                                ($typo3Version->getMajorVersion() > 11 ? 'label' : 0) => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.usergroups',
                                ($typo3Version->getMajorVersion() > 11 ? 'value' : 1) => '--div--',
                            ],
                        ],
                        'exclusiveKeys' => '-1,-2',
                        'foreign_table' => 'fe_groups',
                    ],
                ],
                'parentid' => [
                    'config' => [
                        'type' => 'select',
                        'renderType' => 'selectSingle',
                        'items' => [
                            [
                                ($typo3Version->getMajorVersion() > 11 ? 'label' : 0) => '',
                                ($typo3Version->getMajorVersion() > 11 ? 'value' : 1) => 0,
                            ],
                        ],
                        'default' => 0,
                    ],
                ],
                'parenttable' => [
                    'config' => [
                        'type' => 'passthrough',
                    ],
                ],
                'sorting' => [
                    'config' => [
                        'type' => 'passthrough',
                    ],
                ],
            ],
        ];
        if ($typo3Version->getMajorVersion() > 11) {
            unset($tcaTemplate['ctrl']['cruser_id']);
        }
        return $tcaTemplate;
    }
}
