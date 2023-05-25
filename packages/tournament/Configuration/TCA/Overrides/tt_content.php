<?php

use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

defined('TYPO3') || die();

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'Tournament',
    'Tournamenttree',
    'Tournament Tree'
);
