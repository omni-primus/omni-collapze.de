<?php

return [
    'ctrl' => [
        'title' => 'LLL:EXT:sitepackage/Resources/Private/Language/locallang_db.xlf:tx_sitepackage_domain_model_scrimseriesplayer',
        'label' => 'player_name',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'sortby' => 'sorting',
        'versioningWS' => true,
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
        ],
        'searchFields' => 'player_name,team,position',
        'iconfile' => 'EXT:sitepackage/Resources/Public/Icons/Extension.svg',
    ],
    'types' => [
        '1' => [
            'showitem' => '
                hidden,
                player_name,
                team,
                position
            ',
        ],
    ],
    'columns' => [
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
            'config' => [
                'type' => 'check',
            ],
        ],
        'series' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        'player_name' => [
            'exclude' => true,
            'label' => 'LLL:EXT:sitepackage/Resources/Private/Language/locallang_db.xlf:tx_sitepackage_domain_model_scrimseriesplayer.player_name',
            'config' => [
                'type' => 'input',
                'size' => 40,
                'eval' => 'trim,required',
            ],
        ],
        'team' => [
            'exclude' => true,
            'label' => 'LLL:EXT:sitepackage/Resources/Private/Language/locallang_db.xlf:tx_sitepackage_domain_model_scrimseriesplayer.team',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'itemsProcFunc' => \WebneoGmbh\Sitepackage\Backend\ScrimTeamItemsProvider::class . '->addTeamItems',
                'default' => 'omni',
            ],
        ],
        'position' => [
            'exclude' => true,
            'label' => 'LLL:EXT:sitepackage/Resources/Private/Language/locallang_db.xlf:tx_sitepackage_domain_model_scrimseriesplayer.position',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['LLL:EXT:sitepackage/Resources/Private/Language/locallang_scrim.xlf:position.top', 'top'],
                    ['LLL:EXT:sitepackage/Resources/Private/Language/locallang_scrim.xlf:position.jungle', 'jungle'],
                    ['LLL:EXT:sitepackage/Resources/Private/Language/locallang_scrim.xlf:position.mid', 'mid'],
                    ['LLL:EXT:sitepackage/Resources/Private/Language/locallang_scrim.xlf:position.bot', 'bot'],
                    ['LLL:EXT:sitepackage/Resources/Private/Language/locallang_scrim.xlf:position.support', 'support'],
                ],
                'default' => 'top',
            ],
        ],
    ],
];
