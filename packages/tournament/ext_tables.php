<?php
defined('TYPO3') || die();

(static function() {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
        'Tournament',
        'web',
        'tournamentmodule',
        '',
        [
            \Primus\Tournament\Controller\TournamentController::class => 'show, edit'
        ],
        [
            'access' => 'user,group',
            'icon'   => 'EXT:tournament/Resources/Public/Icons/OMNI-Icon.png',
            'labels' => 'LLL:EXT:tournament/Resources/Private/Language/locallang_tournamentmodule.xlf',
        ]
    );


    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_tournament_domain_model_tournamenttree', 'EXT:tournament/Resources/Private/Language/locallang_csh_tx_tournament_domain_model_tournamenttree.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_tournament_domain_model_tournamenttree');
})();
