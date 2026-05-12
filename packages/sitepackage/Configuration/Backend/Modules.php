<?php

use WebneoGmbh\Sitepackage\Controller\ScrimManagerController;

return [
    'web_scrimmanager' => [
        'parent' => 'web',
        'position' => ['after' => 'web_info'],
        'access' => 'admin',
        'workspaces' => 'live',
        'path' => '/module/web/scrimmanager',
        'labels' => 'LLL:EXT:sitepackage/Resources/Private/Language/locallang_scrim.xlf',
        'icon' => 'EXT:sitepackage/Resources/Public/Icons/Extension.svg',
        'extensionName' => 'Sitepackage',
        'controllerActions' => [
            ScrimManagerController::class => ['index'],
        ],
    ],
];
