<?php
defined('TYPO3') || die();

(static function() {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'Tournament',
        'Tournamenttree',
        [
            \Primus\Tournament\Controller\TournamentTreeController::class => 'show',
            \Primus\Tournament\Controller\TournamentController::class => 'show',
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
