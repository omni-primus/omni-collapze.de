<?php

// Adds the content element to the "Type" dropdown
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        // title
        'LLL:EXT:sitepackage/Resources/Private/Language/locallang.xlf:newsblock_title',
        // plugin signature: extkey_identifier
        'newsblock',
        // icon identifier
        'content-beside-text-img-above-center',
    ],
    'textmedia',
    'after'
);

// Configure the default backend fields for the content element
$GLOBALS['TCA']['tt_content']['types']['newsblock'] = [
    'showitem' => '
         --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
            --palette--;;general,
            image;LLL:EXT:sitepackage/Resources/Private/Language/locallang.xlf:newsblock_image_banner,
            bodytext;LLL:EXT:sitepackage/Resources/Private/Language/locallang.xlf:newsblock_text_title,
         --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
            --palette--;;hidden,
            --palette--;;access,
      ',
    'columnsOverrides' => [
        'bodytext' => [
            'config' => [
                'enableRichtext' => true,
                'richtextConfiguration' => 'default',
            ],
        ],
    ],
];