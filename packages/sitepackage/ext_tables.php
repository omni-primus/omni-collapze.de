<?php
defined('TYPO3') or die('Access denied.');

call_user_func(static function (): void {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_sitepackage_domain_model_scrimseries');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_sitepackage_domain_model_scrimgame');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_sitepackage_domain_model_scrimplayer');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_sitepackage_domain_model_scrimseriesplayer');
});
