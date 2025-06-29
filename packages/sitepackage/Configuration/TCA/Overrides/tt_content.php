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

// Adds the content element to the "Type" dropdown
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        // title
        'LLL:EXT:sitepackage/Resources/Private/Language/locallang.xlf:game_slider_title',
        // plugin signature: extkey_identifier
        'game_slider',
        // icon identifier
        'content-bootstrappackage-carousel',
        'Primus'
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

$GLOBALS['TCA']['tt_content']['types']['game_slider'] = [
    'showitem' => '
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,
            tx_bootstrappackage_carousel_item,
        --div--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel.options,
            pi_flexform;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:advanced,
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,
            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
            --palette--;;language,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
            --palette--;;hidden,
            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
            categories,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
            rowDescription,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
    '
];

$GLOBALS['TCA']['tt_content']['columns']['background_color_class'] = [
    'exclude' => true,
    'displayCond' => 'FIELD:frame_class:!=:none',
    'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.background_color_class',
    'config' => [
        'type' => 'select',
        'renderType' => 'selectSingle',
        'items' => [
            ['none', 'none'],
            ['primary', 'primary'],
            ['secondary', 'secondary'],
            ['tertiary', 'tertiary'],
            ['light', 'light'],
            ['dark', 'dark'],
            ['Dark Reverse', 'darkReverse']
        ]
    ],
    'l10n_mode' => 'exclude',
];

$GLOBALS['TCA']['tt_content']['columns']['header_layout'] = [
    'config' => [
        'type' => 'select',
        'renderType' => 'selectSingle',
        'items' => [
            ['Default', '0'],
            ['H1', '1'],
            ['H2', '2'],
            ['H3', '3'],
            ['H4', '4'],
            ['H5', '5'],
            ['Link', '10'],
            ['hidden', '100']
        ]
    ]
];

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'sitepackage',
    'primeleague_plugin',
    'Prime League'
);