<?php
defined('TYPO3') || die();

(static function() {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'Tournament',
        'Tournament',
        [
            \Tournament\Tournament\Controller\TournamentController::class => 'show'
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
                    tournament {
                        iconIdentifier = tournament-plugin-tournament
                        title = LLL:EXT:tournament/Resources/Private/Language/locallang_db.xlf:tx_tournament_tournament.name
                        description = LLL:EXT:tournament/Resources/Private/Language/locallang_db.xlf:tx_tournament_tournament.description
                        tt_content_defValues {
                            CType = list
                            list_type = tournament_tournament
                        }
                    }
                }
                show = *
            }
       }'
    );
})();
