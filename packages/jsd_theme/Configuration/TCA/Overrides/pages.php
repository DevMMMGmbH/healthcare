<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') || die();

call_user_func(function () {
    /**
     * Default PageTS for JsdTheme
     */
    ExtensionManagementUtility::registerPageTSConfigFile(
        'jsd_theme',
        'Configuration/TsConfig/Page/All.tsconfig',
        'JDI Theme'
    );
});
