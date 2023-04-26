<?php

defined('TYPO3') || die('Access denied.');

call_user_func(
    function () {
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('pgdcontactperson', 'Configuration/TypoScript', 'Modul: Kontaktperson');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr(
            'tx_pgdcontactperson_domain_model_contactperson',
            'EXT:pgdcontactperson/Resources/Private/Language/locallang_csh_tx_pgdcontactperson_domain_model_contactperson.xlf'
        );
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_pgdcontactperson_domain_model_contactperson');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr(
            'tx_pgdcontactperson_domain_model_position',
            'EXT:pgdcontactperson/Resources/Private/Language/locallang_csh_tx_pgdcontactperson_domain_model_position.xlf'
        );
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_pgdcontactperson_domain_model_position');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr(
            'tx_pgdcontactperson_domain_model_title',
            'EXT:pgdcontactperson/Resources/Private/Language/locallang_csh_tx_pgdcontactperson_domain_model_title.xlf'
        );
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_pgdcontactperson_domain_model_title');
    }
);

$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist']['pgdcontactperson_contactperson'] = 'recursive,select_key,pages';
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['pgdcontactperson_contactperson'] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    'pgdcontactperson_contactperson',
    'FILE:EXT:pgdcontactperson/Configuration/FlexForms/flexform_teaser.xml'
);
