<?php

return [
    'ctrl' => [
        'title' => 'LLL:EXT:sitepackage/Resources/Private/Language/locallang_db.xlf:tx_sitepackage_domain_model_scrimgame',
        'label' => 'title',
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
                title,
                duration,
                blue_side_team,
                red_side_team,
                winner,
                --div--;LLL:EXT:sitepackage/Resources/Private/Language/locallang_db.xlf:tx_sitepackage_domain_model_scrimgame.draft,
                --palette--;LLL:EXT:sitepackage/Resources/Private/Language/locallang_db.xlf:tx_sitepackage_domain_model_scrimgame.phase_bans_1;draftBansOne,
                --palette--;LLL:EXT:sitepackage/Resources/Private/Language/locallang_db.xlf:tx_sitepackage_domain_model_scrimgame.phase_picks_1;draftPicksOne,
                --palette--;LLL:EXT:sitepackage/Resources/Private/Language/locallang_db.xlf:tx_sitepackage_domain_model_scrimgame.phase_bans_2;draftBansTwo,
                --palette--;LLL:EXT:sitepackage/Resources/Private/Language/locallang_db.xlf:tx_sitepackage_domain_model_scrimgame.phase_picks_2;draftPicksTwo,
                --div--;LLL:EXT:sitepackage/Resources/Private/Language/locallang_db.xlf:tx_sitepackage_domain_model_scrimgame.players,
                players
            ',
        ],
    ],
    'palettes' => [
        'draftBansOne' => [
            'showitem' => '
                blue_ban_1, blue_ban_2, blue_ban_3,
                --linebreak--,
                red_ban_1, red_ban_2, red_ban_3
            ',
        ],
        'draftPicksOne' => [
            'showitem' => '
                blue_pick_1, blue_pick_2, blue_pick_3,
                --linebreak--,
                red_pick_1, red_pick_2, red_pick_3
            ',
        ],
        'draftBansTwo' => [
            'showitem' => '
                blue_ban_4, blue_ban_5,
                --linebreak--,
                red_ban_4, red_ban_5
            ',
        ],
        'draftPicksTwo' => [
            'showitem' => '
                blue_pick_4, blue_pick_5,
                --linebreak--,
                red_pick_4, red_pick_5
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
        'title' => [
            'exclude' => true,
            'label' => 'LLL:EXT:sitepackage/Resources/Private/Language/locallang_db.xlf:tx_sitepackage_domain_model_scrimgame.title',
            'config' => [
                'type' => 'input',
                'size' => 40,
                'eval' => 'trim,required',
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
        'blue_ban_1' => [
            'exclude' => true,
            'label' => 'LLL:EXT:sitepackage/Resources/Private/Language/locallang_db.xlf:tx_sitepackage_domain_model_scrimgame.blue_ban_1',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [['', '']],
                'itemsProcFunc' => \WebneoGmbh\Sitepackage\Backend\ChampionItemsProvider::class . '->addChampionItems',
            ],
        ],
        'blue_ban_2' => [
            'exclude' => true,
            'label' => 'LLL:EXT:sitepackage/Resources/Private/Language/locallang_db.xlf:tx_sitepackage_domain_model_scrimgame.blue_ban_2',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [['', '']],
                'itemsProcFunc' => \WebneoGmbh\Sitepackage\Backend\ChampionItemsProvider::class . '->addChampionItems',
            ],
        ],
        'blue_ban_3' => [
            'exclude' => true,
            'label' => 'LLL:EXT:sitepackage/Resources/Private/Language/locallang_db.xlf:tx_sitepackage_domain_model_scrimgame.blue_ban_3',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [['', '']],
                'itemsProcFunc' => \WebneoGmbh\Sitepackage\Backend\ChampionItemsProvider::class . '->addChampionItems',
            ],
        ],
        'red_ban_1' => [
            'exclude' => true,
            'label' => 'LLL:EXT:sitepackage/Resources/Private/Language/locallang_db.xlf:tx_sitepackage_domain_model_scrimgame.red_ban_1',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [['', '']],
                'itemsProcFunc' => \WebneoGmbh\Sitepackage\Backend\ChampionItemsProvider::class . '->addChampionItems',
            ],
        ],
        'red_ban_2' => [
            'exclude' => true,
            'label' => 'LLL:EXT:sitepackage/Resources/Private/Language/locallang_db.xlf:tx_sitepackage_domain_model_scrimgame.red_ban_2',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [['', '']],
                'itemsProcFunc' => \WebneoGmbh\Sitepackage\Backend\ChampionItemsProvider::class . '->addChampionItems',
            ],
        ],
        'red_ban_3' => [
            'exclude' => true,
            'label' => 'LLL:EXT:sitepackage/Resources/Private/Language/locallang_db.xlf:tx_sitepackage_domain_model_scrimgame.red_ban_3',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [['', '']],
                'itemsProcFunc' => \WebneoGmbh\Sitepackage\Backend\ChampionItemsProvider::class . '->addChampionItems',
            ],
        ],
        'blue_pick_1' => [
            'exclude' => true,
            'label' => 'LLL:EXT:sitepackage/Resources/Private/Language/locallang_db.xlf:tx_sitepackage_domain_model_scrimgame.blue_pick_1',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [['', '']],
                'itemsProcFunc' => \WebneoGmbh\Sitepackage\Backend\ChampionItemsProvider::class . '->addChampionItems',
            ],
        ],
        'blue_pick_2' => [
            'exclude' => true,
            'label' => 'LLL:EXT:sitepackage/Resources/Private/Language/locallang_db.xlf:tx_sitepackage_domain_model_scrimgame.blue_pick_2',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [['', '']],
                'itemsProcFunc' => \WebneoGmbh\Sitepackage\Backend\ChampionItemsProvider::class . '->addChampionItems',
            ],
        ],
        'blue_pick_3' => [
            'exclude' => true,
            'label' => 'LLL:EXT:sitepackage/Resources/Private/Language/locallang_db.xlf:tx_sitepackage_domain_model_scrimgame.blue_pick_3',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [['', '']],
                'itemsProcFunc' => \WebneoGmbh\Sitepackage\Backend\ChampionItemsProvider::class . '->addChampionItems',
            ],
        ],
        'red_pick_1' => [
            'exclude' => true,
            'label' => 'LLL:EXT:sitepackage/Resources/Private/Language/locallang_db.xlf:tx_sitepackage_domain_model_scrimgame.red_pick_1',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [['', '']],
                'itemsProcFunc' => \WebneoGmbh\Sitepackage\Backend\ChampionItemsProvider::class . '->addChampionItems',
            ],
        ],
        'red_pick_2' => [
            'exclude' => true,
            'label' => 'LLL:EXT:sitepackage/Resources/Private/Language/locallang_db.xlf:tx_sitepackage_domain_model_scrimgame.red_pick_2',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [['', '']],
                'itemsProcFunc' => \WebneoGmbh\Sitepackage\Backend\ChampionItemsProvider::class . '->addChampionItems',
            ],
        ],
        'red_pick_3' => [
            'exclude' => true,
            'label' => 'LLL:EXT:sitepackage/Resources/Private/Language/locallang_db.xlf:tx_sitepackage_domain_model_scrimgame.red_pick_3',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [['', '']],
                'itemsProcFunc' => \WebneoGmbh\Sitepackage\Backend\ChampionItemsProvider::class . '->addChampionItems',
            ],
        ],
        'blue_ban_4' => [
            'exclude' => true,
            'label' => 'LLL:EXT:sitepackage/Resources/Private/Language/locallang_db.xlf:tx_sitepackage_domain_model_scrimgame.blue_ban_4',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [['', '']],
                'itemsProcFunc' => \WebneoGmbh\Sitepackage\Backend\ChampionItemsProvider::class . '->addChampionItems',
            ],
        ],
        'blue_ban_5' => [
            'exclude' => true,
            'label' => 'LLL:EXT:sitepackage/Resources/Private/Language/locallang_db.xlf:tx_sitepackage_domain_model_scrimgame.blue_ban_5',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [['', '']],
                'itemsProcFunc' => \WebneoGmbh\Sitepackage\Backend\ChampionItemsProvider::class . '->addChampionItems',
            ],
        ],
        'red_ban_4' => [
            'exclude' => true,
            'label' => 'LLL:EXT:sitepackage/Resources/Private/Language/locallang_db.xlf:tx_sitepackage_domain_model_scrimgame.red_ban_4',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [['', '']],
                'itemsProcFunc' => \WebneoGmbh\Sitepackage\Backend\ChampionItemsProvider::class . '->addChampionItems',
            ],
        ],
        'red_ban_5' => [
            'exclude' => true,
            'label' => 'LLL:EXT:sitepackage/Resources/Private/Language/locallang_db.xlf:tx_sitepackage_domain_model_scrimgame.red_ban_5',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [['', '']],
                'itemsProcFunc' => \WebneoGmbh\Sitepackage\Backend\ChampionItemsProvider::class . '->addChampionItems',
            ],
        ],
        'blue_pick_4' => [
            'exclude' => true,
            'label' => 'LLL:EXT:sitepackage/Resources/Private/Language/locallang_db.xlf:tx_sitepackage_domain_model_scrimgame.blue_pick_4',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [['', '']],
                'itemsProcFunc' => \WebneoGmbh\Sitepackage\Backend\ChampionItemsProvider::class . '->addChampionItems',
            ],
        ],
        'blue_pick_5' => [
            'exclude' => true,
            'label' => 'LLL:EXT:sitepackage/Resources/Private/Language/locallang_db.xlf:tx_sitepackage_domain_model_scrimgame.blue_pick_5',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [['', '']],
                'itemsProcFunc' => \WebneoGmbh\Sitepackage\Backend\ChampionItemsProvider::class . '->addChampionItems',
            ],
        ],
        'red_pick_4' => [
            'exclude' => true,
            'label' => 'LLL:EXT:sitepackage/Resources/Private/Language/locallang_db.xlf:tx_sitepackage_domain_model_scrimgame.red_pick_4',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [['', '']],
                'itemsProcFunc' => \WebneoGmbh\Sitepackage\Backend\ChampionItemsProvider::class . '->addChampionItems',
            ],
        ],
        'red_pick_5' => [
            'exclude' => true,
            'label' => 'LLL:EXT:sitepackage/Resources/Private/Language/locallang_db.xlf:tx_sitepackage_domain_model_scrimgame.red_pick_5',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [['', '']],
                'itemsProcFunc' => \WebneoGmbh\Sitepackage\Backend\ChampionItemsProvider::class . '->addChampionItems',
            ],
        ],
        'players' => [
            'exclude' => true,
            'label' => 'LLL:EXT:sitepackage/Resources/Private/Language/locallang_db.xlf:tx_sitepackage_domain_model_scrimgame.players',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_sitepackage_domain_model_scrimplayer',
                'foreign_field' => 'game',
                'foreign_sortby' => 'sorting_foreign',
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
