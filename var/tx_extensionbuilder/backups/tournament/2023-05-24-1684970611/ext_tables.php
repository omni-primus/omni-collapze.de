<?php
defined('TYPO3') || die();

(static function() {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
        'Tournament',
        'web',
        'tournament',
        '',
        [
            
        ],
        [
            'access' => 'user,group',
            'icon'   => 'EXT:tournament/Resources/Public/Icons/user_mod_tournament.svg',
            'labels' => 'LLL:EXT:tournament/Resources/Private/Language/locallang_tournament.xlf',
        ]
    );

})();
