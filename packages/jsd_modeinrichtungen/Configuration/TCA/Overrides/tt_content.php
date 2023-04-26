<?php

defined('TYPO3') || die();

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

ExtensionManagementUtility::addPiFlexFormValue(
    'jsdmodeinrichtungen_teaser',
    'FILE:EXT:jsd_modeinrichtungen/Configuration/FlexForms/flexform_teaser.xml'
);

$tmp_jsd_modeinrichtungen_teaser = [
    'jsd_teaser_einrichtung_select' => [
        'exclude' => true,
        'label' => 'LLL:EXT:jsd_modeinrichtungen/Resources/Private/Language/locallang_db.xlf:tx_jsdmodeinrichtungen_domain_model_ttcontent.jsd_einrichtungen',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'foreign_table' => 'tx_jsdmodeinrichtungen_domain_model_institutions',
            'MM' => 'tx_jsdmodeinrichtungen_ttcontent_institutions_mm',
            'foreign_table_where' => 'AND tx_jsdmodeinrichtungen_domain_model_institutions.sys_language_uid = ###REC_FIELD_sys_language_uid### OR tx_jsdmodeinrichtungen_domain_model_institutions.sys_language_uid = "-1" AND tx_jsdmodeinrichtungen_domain_model_institutions.deleted = 0 AND tx_jsdmodeinrichtungen_domain_model_institutions.hidden = 0',
        ],
    ],
];
ExtensionManagementUtility::addTCAcolumns('tt_content', $tmp_jsd_modeinrichtungen_teaser);
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['jsdmodeinrichtungen_teaser'] = 'pi_flexform, jsd_teaser_einrichtung_select';

// hide TCA fields in content element or plugin
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist']['jsdmodeinrichtungen_teaser'] = 'recursive,select_key';