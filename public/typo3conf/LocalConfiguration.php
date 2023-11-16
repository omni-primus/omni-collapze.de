<?php
return [
    'BE' => [
        'debug' => true,
        'explicitADmode' => 'explicitAllow',
        'installToolPassword' => '$argon2i$v=19$m=65536,t=16,p=1$NDVnRGtGWUpCNXRMTGJieA$LutVspdGZL0SAiwHSKD6vo5uIK8P5KAOBjiJj5v+0sU',
        'passwordHashing' => [
            'className' => 'TYPO3\\CMS\\Core\\Crypto\\PasswordHashing\\Argon2iPasswordHash',
            'options' => [],
        ],
    ],
    'DB' => [
        'Connections' => [
            'Default' => [
                'charset' => 'utf8mb4',
                'driver' => 'mysqli',
            ],
        ],
    ],
    'EXTENSIONS' => [
        'backend' => [
            'backendFavicon' => '',
            'backendLogo' => '',
            'loginBackgroundImage' => '',
            'loginFootnote' => '',
            'loginHighlightColor' => '',
            'loginLogo' => '',
            'loginLogoAlt' => '',
        ],
        'bootstrap_package' => [
            'disableCssProcessing' => '0',
            'disableGoogleFontCaching' => '0',
            'disablePageTsBackendLayouts' => '0',
            'disablePageTsContentElements' => '0',
            'disablePageTsRTE' => '0',
            'disablePageTsTCADefaults' => '0',
            'disablePageTsTCEFORM' => '0',
            'disablePageTsTCEMAIN' => '0',
        ],
        'contentblocks_reg_api' => [
            'contentBlockDefinition' => '0',
            'enableLayoutOptions' => '0',
            'showBackendModule' => '1',
        ],
        'extension_builder' => [
            'backupDir' => 'var/tx_extensionbuilder/backups',
            'backupExtension' => '1',
            'enableRoundtrip' => '1',
        ],
        'extensionmanager' => [
            'automaticInstallation' => '1',
            'offlineMode' => '0',
        ],
        'indexed_search' => [
            'catdoc' => '/usr/bin/',
            'debugMode' => '0',
            'deleteFromIndexAfterEditing' => '1',
            'disableFrontendIndexing' => '0',
            'enableMetaphoneSearch' => '1',
            'flagBitMask' => '192',
            'fullTextDataLength' => '0',
            'ignoreExtensions' => '',
            'indexExternalURLs' => '0',
            'maxAge' => '0',
            'maxExternalFiles' => '5',
            'minAge' => '24',
            'pdf_mode' => '20',
            'pdftools' => '/usr/bin/',
            'ppthtml' => '/usr/bin/',
            'unrtf' => '/usr/bin/',
            'unzip' => '/usr/bin/',
            'useCrawlerForExternalFiles' => '0',
            'useMysqlFulltext' => '0',
            'xlhtml' => '/usr/bin/',
        ],
        'mask' => [
            'backend' => 'EXT:webneo-gmbh/sitepackage/Resources/Private/Mask/Backend/Templates',
            'backend_layouts_folder' => '',
            'backendlayout_pids' => '0',
            'content' => 'EXT:webneo-gmbh/sitepackage/Resources/Private/Mask/Frontend/Templates',
            'content_elements_folder' => '',
            'json' => 'EXT:webneo-gmbh/sitepackage/Configuration/Mask/mask.json',
            'layouts' => 'EXT:webneo-gmbh/sitepackage/Resources/Private/Mask/Frontend/Layouts',
            'layouts_backend' => 'EXT:webneo-gmbh/sitepackage/Resources/Private/Mask/Backend/Layouts',
            'loader_identifier' => 'json',
            'partials' => 'EXT:webneo-gmbh/sitepackage/Resources/Private/Mask/Frontend/Partials',
            'partials_backend' => 'EXT:webneo-gmbh/sitepackage/Resources/Private/Mask/Backend/Partials',
            'preview' => 'EXT:webneo-gmbh/sitepackage/Resources/Public/Mask/',
        ],
        'scheduler' => [
            'maxLifetime' => '1440',
            'showSampleTasks' => '1',
        ],
        'styleguide' => [
            'boolean_1' => '0',
            'boolean_2' => '1',
            'boolean_3' => '',
            'color_1' => 'black',
            'color_2' => '#000000',
            'color_3' => '000000',
            'color_4' => '',
            'compat_default_1' => 'value',
            'compat_default_2' => '',
            'compat_input_1' => 'value',
            'compat_input_2' => '',
            'int_1' => '1',
            'int_2' => '',
            'integer_1' => '1',
            'integer_2' => '',
            'intplus_1' => '1',
            'intplus_2' => '',
            'intplus_3' => '-100',
            'nested' => [
                'input_1' => 'aDefault',
                'input_2' => '',
            ],
            'offset_1' => 'x,y',
            'offset_2' => 'x',
            'offset_3' => ',y',
            'offset_4' => '',
            'options_1' => 'default',
            'options_2' => 'option_2',
            'options_3' => '',
            'predefined' => [
                'boolean_1' => '1',
                'int_1' => '42',
            ],
            'small_1' => 'value',
            'small_2' => '',
            'string_1' => 'value',
            'string_2' => '',
            'user_1' => '0',
            'wrap_1' => 'value',
            'wrap_2' => '',
        ],
    ],
    'FE' => [
        'debug' => false,
        'disableNoCacheParameter' => true,
        'passwordHashing' => [
            'className' => 'TYPO3\\CMS\\Core\\Crypto\\PasswordHashing\\Argon2iPasswordHash',
            'options' => [],
        ],
    ],
    'GFX' => [
        'processor' => 'GraphicsMagick',
        'processor_allowTemporaryMasksAsPng' => false,
        'processor_colorspace' => 'RGB',
        'processor_effects' => false,
        'processor_enabled' => true,
        'processor_path' => '/usr/bin/',
        'processor_path_lzw' => '/usr/bin/',
    ],
    'LOG' => [
        'TYPO3' => [
            'CMS' => [
                'deprecations' => [
                    'writerConfiguration' => [
                        'notice' => [
                            'TYPO3\CMS\Core\Log\Writer\FileWriter' => [
                                'disabled' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
    'MAIL' => [
        'transport' => 'sendmail',
        'transport_sendmail_command' => '/usr/local/bin/mailhog sendmail test@example.org --smtp-addr 127.0.0.1:1025',
        'transport_smtp_encrypt' => '',
        'transport_smtp_password' => '',
        'transport_smtp_server' => '',
        'transport_smtp_username' => '',
    ],
    'SYS' => [
        'caching' => [
            'cacheConfigurations' => [
                'hash' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                ],
                'imagesizes' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                    'options' => [
                        'compression' => true,
                    ],
                ],
                'pages' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                    'options' => [
                        'compression' => true,
                    ],
                ],
                'pagesection' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                    'options' => [
                        'compression' => true,
                    ],
                ],
                'rootline' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                    'options' => [
                        'compression' => true,
                    ],
                ],
            ],
        ],
        'devIPmask' => '',
        'displayErrors' => 1,
        'encryptionKey' => '826ca145842221aaf10b04f08f2e2e15d127d11ea50bef0821c639429c04dd9564f7062a0781bc959954f139a9d048dd',
        'exceptionalErrors' => 4096,
        'features' => [
            'unifiedPageTranslationHandling' => true,
            'yamlImportsFollowDeclarationOrder' => true,
        ],
        'sitename' => 'OMNI DDEV',
        'systemMaintainers' => [
            1,
            4,
        ],
    ],
];
