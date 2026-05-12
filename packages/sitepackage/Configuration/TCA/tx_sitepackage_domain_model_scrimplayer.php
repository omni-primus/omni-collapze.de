<?php

return [
    'ctrl' => [
        'title' => 'LLL:EXT:sitepackage/Resources/Private/Language/locallang_db.xlf:tx_sitepackage_domain_model_scrimplayer',
        'label' => 'champion_name',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'sortby' => 'sorting',
        'versioningWS' => true,
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
        ],
        'searchFields' => 'team_side,position,champion_name',
        'iconfile' => 'EXT:sitepackage/Resources/Public/Icons/Extension.svg',
    ],
    'types' => [
        '1' => [
            'showitem' => '
                hidden,
                team_side,
                position,
                champion_name,
                kills,
                deaths,
                assists,
                gold,
                minions
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
        'team_side' => [
            'exclude' => true,
            'label' => 'LLL:EXT:sitepackage/Resources/Private/Language/locallang_db.xlf:tx_sitepackage_domain_model_scrimplayer.team_side',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['LLL:EXT:sitepackage/Resources/Private/Language/locallang_scrim.xlf:side.blue', 'blue'],
                    ['LLL:EXT:sitepackage/Resources/Private/Language/locallang_scrim.xlf:side.red', 'red'],
                ],
                'default' => 'blue',
            ],
        ],
        'position' => [
            'exclude' => true,
            'label' => 'LLL:EXT:sitepackage/Resources/Private/Language/locallang_db.xlf:tx_sitepackage_domain_model_scrimplayer.position',
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
        'champion_name' => [
            'exclude' => true,
            'label' => 'LLL:EXT:sitepackage/Resources/Private/Language/locallang_db.xlf:tx_sitepackage_domain_model_scrimplayer.champion_name',
            'config' => [
                'type' => 'input',
                'size' => 40,
                'eval' => 'trim,required',
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
    ],
];
