<?php
defined('TYPO3') || die();

use Primus\Tournament\Controller\TournamentController;

(static function() {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'Tournament',
        'Tournamenttree',
        [
            TournamentController::class => 'show'
        ],
        // non-cacheable actions
        [
            
        ]
    );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    tournamenttree {
                        iconIdentifier = tournament-plugin-tournamenttree
                        title = LLL:EXT:tournament/Resources/Private/Language/locallang_db.xlf:tx_tournament_tournamenttree.name
                        description = LLL:EXT:tournament/Resources/Private/Language/locallang_db.xlf:tx_tournament_tournamenttree.description
                        tt_content_defValues {
                            CType = list
                            list_type = tournament_tournamenttree
                        }
                    }
                }
                show = *
            }
       }'
    );
})();
