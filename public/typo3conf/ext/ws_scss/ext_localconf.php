<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

if (TYPO3_MODE === 'FE') {
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_pagerenderer.php']['render-preProcess']['wsscss'] = \WapplerSystems\WsScss\Hooks\RenderPreProcessorHook::class . '->renderPreProcessorProc';
}

// Caching the pages - default expire 3600 seconds
if (!is_array($GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['ws_scss'] ?? null)) {
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['ws_scss'] = [
        'frontend' => \TYPO3\CMS\Core\Cache\Frontend\VariableFrontend::class,
        'backend' => \TYPO3\CMS\Core\Cache\Backend\FileBackend::class,
        'options' => [
            'defaultLifetime' => 0,
        ]
    ];
}


if (!class_exists(\ScssPhp\ScssPhp\Version::class, true)) {
    $extPath = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('ws_scss');
    require_once $extPath . 'Resources/Private/scssphp/scss.inc.php';
}