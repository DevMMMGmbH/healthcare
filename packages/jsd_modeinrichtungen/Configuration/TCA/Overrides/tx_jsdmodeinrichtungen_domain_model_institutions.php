<?php

declare(strict_types=1);

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();
// Add some fields to FE Users table to show TCA fields definitions
// USAGE: TCA Reference > $GLOBALS['TCA'] array reference > ['columns'][fieldname]['config'] / TYPE: "select"
$temporaryColumns = [
    'stadt' => [
        'exclude' => true,
        'label' => 'LLL:EXT:jsd_modeinrichtungen/Resources/Private/Language/locallang_db.xlf:tx_jsdmodeinrichtungen_domain_model_institutions.stadt',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [['', 0]],
            'foreign_table' => 'tx_jsdmodeinrichtungen_domain_model_locations',
            'foreign_table_where' => 'tx_jsdmodeinrichtungen_domain_model_locations.type=1',
            'size' => 1,
            'default' => 0,
        ],
    ],
    'bezirk' => [
        'exclude' => true,
        'label' => 'LLL:EXT:jsd_modeinrichtungen/Resources/Private/Language/locallang_db.xlf:tx_jsdmodeinrichtungen_domain_model_institutions.bezirk',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [['', 0]],
            'foreign_table' => 'tx_jsdmodeinrichtungen_domain_model_locations',
            'foreign_table_where' => 'tx_jsdmodeinrichtungen_domain_model_locations.type=2',
            'size' => 1,
            'default' => 0,
        ],
    ],
    'bundesland' => [
        'exclude' => true,
        'label' => 'LLL:EXT:jsd_modeinrichtungen/Resources/Private/Language/locallang_db.xlf:tx_jsdmodeinrichtungen_domain_model_institutions.bundesland',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [['', 0]],
            'foreign_table' => 'tx_jsdmodeinrichtungen_domain_model_locations',
            'foreign_table_where' => 'tx_jsdmodeinrichtungen_domain_model_locations.type=3',
            'size' => 1,
            'default' => 0,
        ],
    ],
    'sections_select' => [
        'exclude' => true,
        'label' => 'LLL:EXT:jsd_modeinrichtungen/Resources/Private/Language/locallang_db.xlf:tx_jsdmodeinrichtungen_domain_model_institutions.sections_select',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'foreign_table' => 'tx_jsdmodeinrichtungen_domain_model_sections',
            'MM' => 'tx_jsdmodeinrichtungen_institutions_sections_mm',
            'foreign_table_where' => 'AND tx_jsdmodeinrichtungen_domain_model_sections.institution = ###THIS_UID### AND tx_jsdmodeinrichtungen_domain_model_institutions.sys_language_uid = ###REC_FIELD_sys_language_uid### OR tx_jsdmodeinrichtungen_domain_model_institutions.sys_language_uid = "-1" AND tx_jsdmodeinrichtungen_domain_model_institutions.deleted = 0 AND tx_jsdmodeinrichtungen_domain_model_institutions.hidden = 0',
            'size' => 10,
            'autoSizeMax' => 30,
            'maxitems' => 9999,
            'multiple' => 0,
            'fieldControl' => [
                'editPopup' => [
                    'disabled' => false,
                ],
                'addRecord' => [
                    'disabled' => false,
                ],
                'listModule' => [
                    'disabled' => true,
                ],
            ],
        ],
    ],
    'typ' => [
        'exclude' => true,
        'label' => 'LLL:EXT:jsd_modeinrichtungen/Resources/Private/Language/locallang_db.xlf:tx_jsdmodeinrichtungen_domain_model_institutions.typ',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [['', 0]],
            'foreign_table' => 'tx_jsdmodeinrichtungen_domain_model_institutiontypes',
            'foreign_table_where' => 'AND tx_jsdmodeinrichtungen_domain_model_institutiontypes.types=2 AND tx_jsdmodeinrichtungen_domain_model_institutiontypes.sys_language_uid=###REC_FIELD_sys_language_uid### OR tx_jsdmodeinrichtungen_domain_model_institutiontypes.sys_language_uid = "-1" AND tx_jsdmodeinrichtungen_domain_model_institutiontypes.deleted = 0 AND tx_jsdmodeinrichtungen_domain_model_institutiontypes.hidden = 0',
            'size' => 1,
            'default' => 0,
        ],
    ],
    'bereich' => [
        'exclude' => true,
        'label' => 'LLL:EXT:jsd_modeinrichtungen/Resources/Private/Language/locallang_db.xlf:tx_jsdmodeinrichtungen_domain_model_institutions.bereich',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [['', 0]],
            'foreign_table' => 'tx_jsdmodeinrichtungen_domain_model_institutiontypes',
            'foreign_table_where' => 'AND tx_jsdmodeinrichtungen_domain_model_institutiontypes.types=1 AND tx_jsdmodeinrichtungen_domain_model_institutiontypes.sys_language_uid=###REC_FIELD_sys_language_uid### OR tx_jsdmodeinrichtungen_domain_model_institutiontypes.sys_language_uid = "-1" AND tx_jsdmodeinrichtungen_domain_model_institutiontypes.deleted = 0 AND tx_jsdmodeinrichtungen_domain_model_institutiontypes.hidden = 0',
            'size' => 1,
            'default' => 0,
        ],

    ],
    'fbereich' => [
        'exclude' => true,
        'label' => 'LLL:EXT:jsd_modeinrichtungen/Resources/Private/Language/locallang_db.xlf:tx_jsdmodeinrichtungen_domain_model_institutions.fbereich',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'foreign_table' => 'tx_jsdmodeinrichtungen_domain_model_institutiontypes',
            'foreign_table_where' => 'AND tx_jsdmodeinrichtungen_domain_model_institutiontypes.types=3 AND tx_jsdmodeinrichtungen_domain_model_institutiontypes.sys_language_uid=###REC_FIELD_sys_language_uid### OR tx_jsdmodeinrichtungen_domain_model_institutiontypes.sys_language_uid = "-1" AND tx_jsdmodeinrichtungen_domain_model_institutiontypes.deleted = 0 AND tx_jsdmodeinrichtungen_domain_model_institutiontypes.hidden = 0',
            'MM' => 'tx_jsdmodeinrichtungen_institutions_fbereich_institutiontypes_mm',
            'size' => 10,
            'autoSizeMax' => 30,
            'maxitems' => 9999,
            'multiple' => 0,
            'fieldControl' => [
                'editPopup' => [
                    'disabled' => true,
                ],
                'addRecord' => [
                    'disabled' => true,
                ],
                'listModule' => [
                    'disabled' => true,
                ],
            ],
        ],
    ],
    'description' => [
        'exclude' => true,
        'label' => 'LLL:EXT:jsd_modeinrichtungen/Resources/Private/Language/locallang_db.xlf:tx_jsdmodeinrichtungen_domain_model_institutions.description',
        'config' => [
            'type' => 'text',
            'enableRichtext' => true,
            'richtextConfiguration' => 'default',
            'fieldControl' => [
                'fullScreenRichtext' => [
                    'disabled' => false,
                ],
            ],
            'cols' => 40,
            'rows' => 5,
            'eval' => 'trim',
        ],
    ],
    'pid_detail_presse' => [
        'exclude' => true,
        'label' => 'LLL:EXT:jsd_modeinrichtungen/Resources/Private/Language/locallang_csh_tx_jsdmodeinrichtungen_domain_model_institutions.xlf:pid_detail_presse.description',
        'config' => [
            'default' => '',
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim',
            'renderType' => 'inputLink',
            'fieldControl' => [
                'linkPopup' => [
                    'options' => [
                        'blindLinkOptions' => 'file,mail,spec,url,folder',
                        'blindLinkFields' => 'class,params,target,title',
                    ],
                ],
            ],
        ],
    ],
    'pid_list_presse' => [
        'exclude' => true,
        'label' => 'LLL:EXT:jsd_modeinrichtungen/Resources/Private/Language/locallang_csh_tx_jsdmodeinrichtungen_domain_model_institutions.xlf:pid_list_presse.description',
        'config' => [
            'default' => '',
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim',
            'renderType' => 'inputLink',
            'fieldControl' => [
                'linkPopup' => [
                    'options' => [
                        'blindLinkOptions' => 'file,mail,spec,url,folder',
                        'blindLinkFields' => 'class,params,target,title',
                    ],
                ],
            ],
        ],
    ],
    'rootpage' => [
        'exclude' => true,
        'label' => 'LLL:EXT:jsd_modeinrichtungen/Resources/Private/Language/locallang_csh_tx_jsdmodeinrichtungen_domain_model_institutions.xlf:rootpage.description',
        'config' => [
            'default' => '',
            'type' => 'input',
            // 'size' => 4,
            'eval' => 'trim',
            'renderType' => 'inputLink',
            'fieldControl' => [
                'linkPopup' => [
                    'options' => [
                        'blindLinkOptions' => 'file,mail,spec,url,folder',
                        'blindLinkFields' => 'class,params,target,title',
                    ],
                ],
            ],
        ],
    ],
];

ExtensionManagementUtility::addTCAcolumns('tx_jsdmodeinrichtungen_domain_model_institutions', $temporaryColumns);

// \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
//     'tx_jsdmodeinrichtungen_domain_model_institutions',
//     'booster',
//     'boost_one, boost_two',
//     ''
// );

$GLOBALS['TCA']['tx_jsdmodeinrichtungen_domain_model_institutions']['types']['1'] = [
    'showitem' => '--palette--;;titlepid, description, --palette--;;phonefaxmail, --palette--;;streetnr, --palette--;;zipcity, --palette--;;locationcords, image, --div--; Bereiche, --palette--;;typbereich, fbereich, --palette--;;pidnews, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, sys_language_uid, l10n_parent, l10n_diffsource, hidden, starttime, endtime',
];

$GLOBALS['TCA']['tx_jsdmodeinrichtungen_domain_model_institutions']['palettes']['titlepid'] = [
    'showitem' => 'title, rootpage',
];
$GLOBALS['TCA']['tx_jsdmodeinrichtungen_domain_model_institutions']['palettes']['streetnr'] = [
    'showitem' => 'street, house_number',
];
$GLOBALS['TCA']['tx_jsdmodeinrichtungen_domain_model_institutions']['palettes']['zipcity'] = [
    'showitem' => 'zip, stadt, bezirk, bundesland',
];
$GLOBALS['TCA']['tx_jsdmodeinrichtungen_domain_model_institutions']['palettes']['locationcords'] = [
    'showitem' => 'location_latitude, location_longitude',
];
$GLOBALS['TCA']['tx_jsdmodeinrichtungen_domain_model_institutions']['palettes']['phonefaxmail'] = [
    'showitem' => 'phone, fax, email',
];
$GLOBALS['TCA']['tx_jsdmodeinrichtungen_domain_model_institutions']['palettes']['typbereich'] = [
    'showitem' => 'typ, bereich',
];
$GLOBALS['TCA']['tx_jsdmodeinrichtungen_domain_model_institutions']['palettes']['pidnews'] = [
    'showitem' => 'pid_detail_presse, pid_list_presse',
];
