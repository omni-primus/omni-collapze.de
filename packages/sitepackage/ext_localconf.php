<?php
defined('TYPO3') or die('Access denied.');
/***************
 * Add default RTE configuration
 */
$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['sitepackage'] = 'EXT:sitepackage/Configuration/RTE/Default.yaml';

/***************
 * PageTS
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:sitepackage/Configuration/TsConfig/Page/All.tsconfig">');


// Add new content elements
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:sitepackage/Configuration/TsConfig/Page/Mod/Wizards/NewsBlockElement.tsconfig">'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:sitepackage/Configuration/TsConfig/Page/Mod/Wizards/GameSlider.tsconfig">'
);


\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'sitepackage',
    'primeleague_plugin',
    [\WebneoGmbh\Sitepackage\Controller\PrimeLeagueController::class => 'show'],
    [\WebneoGmbh\Sitepackage\Controller\PrimeLeagueController::class => '']
);