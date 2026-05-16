<?php

return [
    'ctrl' => [
        'title' => 'LLL:EXT:sitepackage/Resources/Private/Language/locallang_db.xlf:tx_sitepackage_domain_model_scrimplayer',
        'label' => 'series_player',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'sortby' => 'sorting',
        'versioningWS' => true,
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
        ],
        'searchFields' => 'champion_name',
        'iconfile' => 'EXT:sitepackage/Resources/Public/Icons/Extension.svg',
    ],
    'types' => [
        '1' => [
            'showitem' => '
                hidden,
                series_player,
                champion_name,
                kills,
                deaths,
                assists,
                minions,
                gold,
                damage_dealt,
                damage_taken
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
        'game' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        'series_player' => [
            'exclude' => true,
            'label' => 'LLL:EXT:sitepackage/Resources/Private/Language/locallang_db.xlf:tx_sitepackage_domain_model_scrimplayer.series_player',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'itemsProcFunc' => \WebneoGmbh\Sitepackage\Backend\ScrimSeriesPlayerItemsProvider::class . '->addSeriesPlayerItems',
                'default' => 0,
                'required' => true,
            ],
        ],
        'champion_name' => [
            'exclude' => true,
            'label' => 'LLL:EXT:sitepackage/Resources/Private/Language/locallang_db.xlf:tx_sitepackage_domain_model_scrimplayer.champion_name',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'itemsProcFunc' => \WebneoGmbh\Sitepackage\Backend\ChampionItemsProvider::class . '->addChampionItems',
                'default' => '',
                'required' => true,
            ],
        ],
        'kills' => [
            'exclude' => true,
            'label' => 'LLL:EXT:sitepackage/Resources/Private/Language/locallang_db.xlf:tx_sitepackage_domain_model_scrimplayer.kills',
            'config' => [
                'type' => 'input',
                'eval' => 'int',
                'default' => 0,
                'range' => ['lower' => 0],
            ],
        ],
        'deaths' => [
            'exclude' => true,
            'label' => 'LLL:EXT:sitepackage/Resources/Private/Language/locallang_db.xlf:tx_sitepackage_domain_model_scrimplayer.deaths',
            'config' => [
                'type' => 'input',
                'eval' => 'int',
                'default' => 0,
                'range' => ['lower' => 0],
            ],
        ],
        'assists' => [
            'exclude' => true,
            'label' => 'LLL:EXT:sitepackage/Resources/Private/Language/locallang_db.xlf:tx_sitepackage_domain_model_scrimplayer.assists',
            'config' => [
                'type' => 'input',
                'eval' => 'int',
                'default' => 0,
                'range' => ['lower' => 0],
            ],
        ],
        'minions' => [
            'exclude' => true,
            'label' => 'LLL:EXT:sitepackage/Resources/Private/Language/locallang_db.xlf:tx_sitepackage_domain_model_scrimplayer.minions',
            'config' => [
                'type' => 'input',
                'eval' => 'int',
                'default' => 0,
                'range' => ['lower' => 0],
            ],
        ],
        'gold' => [
            'exclude' => true,
            'label' => 'LLL:EXT:sitepackage/Resources/Private/Language/locallang_db.xlf:tx_sitepackage_domain_model_scrimplayer.gold',
            'config' => [
                'type' => 'input',
                'eval' => 'int',
                'default' => 0,
                'range' => ['lower' => 0],
            ],
        ],
        'damage_dealt' => [
            'exclude' => true,
            'label' => 'LLL:EXT:sitepackage/Resources/Private/Language/locallang_db.xlf:tx_sitepackage_domain_model_scrimplayer.damage_dealt',
            'config' => [
                'type' => 'input',
                'eval' => 'int',
                'default' => 0,
                'range' => ['lower' => 0],
            ],
        ],
        'damage_taken' => [
            'exclude' => true,
            'label' => 'LLL:EXT:sitepackage/Resources/Private/Language/locallang_db.xlf:tx_sitepackage_domain_model_scrimplayer.damage_taken',
            'config' => [
                'type' => 'input',
                'eval' => 'int',
                'default' => 0,
                'range' => ['lower' => 0],
            ],
        ],
    ],
];
