<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') || die();

call_user_func(function () {

    /**
     * Default TypoScript for JsdTheme
     */
    ExtensionManagementUtility::addStaticFile(
        'jsd_theme',
        'Configuration/TypoScript',
        'JDI Theme'
    );
});
