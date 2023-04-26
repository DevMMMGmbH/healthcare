<?php

declare(strict_types=1);

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();
// Add some fields to FE Users table to show TCA fields definitions
// USAGE: TCA Reference > $GLOBALS['TCA'] array reference > ['columns'][fieldname]['config'] / TYPE: "select"
$temporaryColumns = [
    'types' => [
        'exclude' => true,
        'onChange' => 'reload',
        'label' => 'LLL:EXT:jsd_modeinrichtungen/Resources/Private/Language/locallang_db.xlf:tx_jsdmodeinrichtungen_domain_model_institutiontypes.types',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                ['', 0],
                ['Bereich (z.B. Medizinische Versorgung)', 1],
                ['Einrichtungstyp (z.B. Krankenhaus)', 2],
                ['Fachbereich (z.B. Innere Medizin)', 3],
            ],
            'size' => 1,
            'maxitems' => 1,
            'eval' => 'required',
        ],
    ],
    'bereich' => [
        'exclude' => true,
        'label' => 'Bereich Zuordnung',
        'displayCond' => 'FIELD:types:=:3',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [['', 0]],
            'foreign_table' => 'tx_jsdmodeinrichtungen_domain_model_institutiontypes',
            'foreign_table_where' => 'AND tx_jsdmodeinrichtungen_domain_model_institutiontypes.types = 1 AND tx_jsdmodeinrichtungen_domain_model_institutiontypes.sys_language_uid = ###REC_FIELD_sys_language_uid### OR tx_jsdmodeinrichtungen_domain_model_institutiontypes.sys_language_uid = "-1" AND tx_jsdmodeinrichtungen_domain_model_institutiontypes.deleted = 0 AND tx_jsdmodeinrichtungen_domain_model_institutiontypes.hidden = 0',
            'minitems' => 0,
            'maxitems' => 1,
            'default' => 0,
        ],
    ],
];

ExtensionManagementUtility::addTCAcolumns(
    'tx_jsdmodeinrichtungen_domain_model_institutiontypes',
    $temporaryColumns
);
