<?php
defined('TYPO3') || die();

(static function() {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
        'Primus',
        'web',
        'tournament',
        '',
        [
            
        ],
        [
            'access' => 'user,group',
            'icon'   => 'EXT:primus/Resources/Public/Icons/user_mod_tournament.svg',
            'labels' => 'LLL:EXT:primus/Resources/Private/Language/locallang_tournament.xlf',
        ]
    );

})();
