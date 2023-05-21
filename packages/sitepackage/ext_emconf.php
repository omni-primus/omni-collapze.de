<?php

/**
 * Extension Manager/Repository config file for ext "sitepackage".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'sitepackage',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'bootstrap_package' => '12.0.0-12.9.99',
            'mask' => '8.1' // Add the minimum version here or leave blank for any version.
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'WebneoGmbh\\Sitepackage\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Paul Krampe',
    'author_email' => 'paul.krampe@webneo.de',
    'author_company' => 'WEBneo GmbH',
    'version' => '1.0.0',
];