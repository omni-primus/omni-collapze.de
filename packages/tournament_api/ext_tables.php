<?php
defined('TYPO3') || die();

(static function() {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
        'TournamentApi',
        'web',
        'tournament',
        '',
        [
            
        ],
        [
            'access' => 'user,group',
            'icon'   => 'EXT:tournament_api/Resources/Public/Icons/user_mod_tournament.svg',
            'labels' => 'LLL:EXT:tournament_api/Resources/Private/Language/locallang_tournament.xlf',
        ]
    );

})();
