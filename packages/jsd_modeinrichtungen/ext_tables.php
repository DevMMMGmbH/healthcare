<?php

defined('TYPO3') || die('Access denied.');

call_user_func(
    function () {
        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin('JsdModeinrichtungen', 'Teaser', 'Modul: Einrichtungs-Teaser');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
            'jsd_modeinrichtungen',
            'Configuration/TypoScript',
            'JDI Einrichtungen'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr(
            'tx_jsdmodeinrichtungen_domain_model_institutions',
            'EXT:jsd_modeinrichtungen/Resources/Private/Language/locallang_csh_tx_jsdmodeinrichtungen_domain_model_institutions.xlf'
        );
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_jsdmodeinrichtungen_domain_model_institutions');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr(
            'tx_jsdmodeinrichtungen_domain_model_sections',
            'EXT:jsd_modeinrichtungen/Resources/Private/Language/locallang_csh_tx_jsdmodeinrichtungen_domain_model_sections.xlf'
        );
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_jsdmodeinrichtungen_domain_model_sections');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr(
            'tx_jsdmodeinrichtungen_domain_model_institutiontypes',
            'EXT:jsd_modeinrichtungen/Resources/Private/Language/locallang_csh_tx_jsdmodeinrichtungen_domain_model_institutiontypes.xlf'
        );
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_jsdmodeinrichtungen_domain_model_institutiontypes');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr(
            'tx_jsdmodeinrichtungen_domain_model_locations',
            'EXT:jsd_modeinrichtungen/Resources/Private/Language/locallang_csh_tx_jsdmodeinrichtungen_domain_model_locations.xlf'
        );
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_jsdmodeinrichtungen_domain_model_locations');
    }
);
