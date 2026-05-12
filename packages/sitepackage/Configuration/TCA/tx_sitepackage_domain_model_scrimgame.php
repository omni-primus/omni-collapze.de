<?php

return [
    'ctrl' => [
        'title' => 'LLL:EXT:sitepackage/Resources/Private/Language/locallang_db.xlf:tx_sitepackage_domain_model_scrimgame',
        'label' => 'duration',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'sortby' => 'sorting',
        'versioningWS' => true,
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'searchFields' => 'duration,blue_side_team,red_side_team,winner',
        'iconfile' => 'EXT:sitepackage/Resources/Public/Icons/Extension.svg',
    ],
    'types' => [
        '1' => [
            'showitem' => '
                hidden,
                duration,
                blue_side_team,
                red_side_team,
                winner,
                --div--;LLL:EXT:sitepackage/Resources/Private/Language/locallang_db.xlf:tx_sitepackage_domain_model_scrimgame.players,
                players
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
        'starttime' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        'endtime' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        'series' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        'duration' => [
            'exclude' => true,
            'label' => 'LLL:EXT:sitepackage/Resources/Private/Language/locallang_db.xlf:tx_sitepackage_domain_model_scrimgame.duration',
            'config' => [
                'type' => 'input',
                'size' => 20,
                'eval' => 'trim,required',
                'placeholder' => '32:15',
            ],
        ],
        'blue_side_team' => [
            'exclude' => true,
            'label' => 'LLL:EXT:sitepackage/Resources/Private/Language/locallang_db.xlf:tx_sitepackage_domain_model_scrimgame.blue_side_team',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'itemsProcFunc' => \WebneoGmbh\Sitepackage\Backend\ScrimTeamItemsProvider::class . '->addTeamItems',
                'default' => 'omni',
            ],
        ],
        'red_side_team' => [
            'exclude' => true,
            'label' => 'LLL:EXT:sitepackage/Resources/Private/Language/locallang_db.xlf:tx_sitepackage_domain_model_scrimgame.red_side_team',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'itemsProcFunc' => \WebneoGmbh\Sitepackage\Backend\ScrimTeamItemsProvider::class . '->addTeamItems',
                'default' => 'opponent',
            ],
        ],
        'winner' => [
            'exclude' => true,
            'label' => 'LLL:EXT:sitepackage/Resources/Private/Language/locallang_db.xlf:tx_sitepackage_domain_model_scrimgame.winner',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'itemsProcFunc' => \WebneoGmbh\Sitepackage\Backend\ScrimTeamItemsProvider::class . '->addTeamItems',
                'default' => 'omni',
            ],
        ],
        'players' => [
            'exclude' => true,
            'label' => 'LLL:EXT:sitepackage/Resources/Private/Language/locallang_db.xlf:tx_sitepackage_domain_model_scrimgame.players',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_sitepackage_domain_model_scrimplayer',
                'foreign_field' => 'game',
                'appearance' => [
                    'collapseAll' => false,
                    'expandSingle' => false,
                    'useSortable' => true,
                    'enabledControls' => [
                        'info' => true,
                        'new' => true,
                        'dragdrop' => true,
                        'sort' => true,
                        'hide' => true,
                        'delete' => true,
                    ],
                ],
            ],
        ],
    ],
];
