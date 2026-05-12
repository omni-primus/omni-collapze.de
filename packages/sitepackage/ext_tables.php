<?php
defined('TYPO3') or die('Access denied.');

call_user_func(static function (): void {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_sitepackage_domain_model_scrimseries');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_sitepackage_domain_model_scrimgame');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_sitepackage_domain_model_scrimplayer');

    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
        'sitepackage',
        'web',
        'scrimmanager',
        '',
        [
            \WebneoGmbh\Sitepackage\Controller\ScrimManagerController::class => 'index',
        ],
        [
            'access' => 'admin',
            'icon' => 'EXT:sitepackage/Resources/Public/Icons/Extension.svg',
            'labels' => 'LLL:EXT:sitepackage/Resources/Private/Language/locallang_scrim.xlf',
        ]
    );
});
