<?php

defined('TYPO3') || die('Access denied.');

call_user_func(
    function () {
        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin('JsdSprechstunden', 'Sprechstunden', 'Modul: Sprechstunden');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
            'jsd_sprechstunden',
            'Configuration/TypoScript',
            'JDI Sprechstunden'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr(
            'tx_jsdsprechstunden_domain_model_sprechstunden',
            'EXT:jsd_sprechstunden/Resources/Private/Language/locallang_csh_tx_jsdsprechstunden_domain_model_sprechstunden.xlf'
        );
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_jsdsprechstunden_domain_model_sprechstunden');
    }
);
