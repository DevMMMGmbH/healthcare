<?php

declare(strict_types=1);

use TYPO3\CMS\Core\Resource\File;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

return [
    'ctrl' => [
        'title' => 'LLL:EXT:jsd_modeinrichtungen/Resources/Private/Language/locallang_db.xlf:tx_jsdmodeinrichtungen_domain_model_institutions',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'sortby' => 'sorting',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'searchFields' => 'title,description,rootpage,phone,fax,email,image,street,house_number,zip,pid_detail_presse,pid_list_presse,location_latitude,location_longitude,stadt,bezirk,bundesland,sections_select,typ,bereich,fbereich',
        'iconfile' => 'EXT:jsd_modeinrichtungen/Resources/Public/Icons/tx_jsdmodeinrichtungen_domain_model_institutions.gif',
    ],
    'types' => [
        '1' => [
            'showitem' => 'sys_language_uid,l10n_parent,l10n_diffsource,hidden,title,description,rootpage,phone,fax,email,image,street,house_number,zip,pid_detail_presse,pid_list_presse,location_latitude,location_longitude,stadt,bezirk,bundesland,sections_select,typ,bereich,fbereich,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,starttime,endtime',
        ],
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'special' => 'languages',
                'items' => [
                    [
                        'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
                        -1,
                        'flags-multiple'
                    ],
                ],
                'default' => 0,
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'default' => 0,
                'items' => [['', 0]],
                'foreign_table' => 'tx_jsdmodeinrichtungen_domain_model_institutions',
                'foreign_table_where' => 'AND tx_jsdmodeinrichtungen_domain_model_institutions.pid=###CURRENT_PID### AND tx_jsdmodeinrichtungen_domain_model_institutions.sys_language_uid IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.enabled',
                    ],
                ],
            ],
        ],
        'starttime' => [
            'exclude' => true,
            'behaviour' => [
                'allowLanguageSynchronization' => true,
            ],
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'size' => 13,
                'eval' => 'datetime',
                'default' => 0,
            ],
        ],
        'endtime' => [
            'exclude' => true,
            'behaviour' => [
                'allowLanguageSynchronization' => true,
            ],
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'size' => 13,
                'eval' => 'datetime',
                'default' => 0,
                'range' => [
                    'upper' => mktime(0, 0, 0, 1, 1, 2038),
                ],
            ],
        ],

        'title' => [
            'exclude' => true,
            'label' => 'LLL:EXT:jsd_modeinrichtungen/Resources/Private/Language/locallang_db.xlf:tx_jsdmodeinrichtungen_domain_model_institutions.title',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required',
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
                'rows' => 15,
                'eval' => 'trim',
            ],

        ],
        'rootpage' => [
            'exclude' => true,
            'label' => 'LLL:EXT:jsd_modeinrichtungen/Resources/Private/Language/locallang_db.xlf:tx_jsdmodeinrichtungen_domain_model_institutions.rootpage',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
            ],
        ],
        'phone' => [
            'exclude' => true,
            'label' => 'LLL:EXT:jsd_modeinrichtungen/Resources/Private/Language/locallang_db.xlf:tx_jsdmodeinrichtungen_domain_model_institutions.phone',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
            ],
        ],
        'fax' => [
            'exclude' => true,
            'label' => 'LLL:EXT:jsd_modeinrichtungen/Resources/Private/Language/locallang_db.xlf:tx_jsdmodeinrichtungen_domain_model_institutions.fax',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
            ],
        ],
        'email' => [
            'exclude' => true,
            'label' => 'LLL:EXT:jsd_modeinrichtungen/Resources/Private/Language/locallang_db.xlf:tx_jsdmodeinrichtungen_domain_model_institutions.email',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'nospace,email',
            ],
        ],
        'image' => [
            'exclude' => true,
            'label' => 'LLL:EXT:jsd_modeinrichtungen/Resources/Private/Language/locallang_db.xlf:tx_jsdmodeinrichtungen_domain_model_institutions.image',
            'config' => ExtensionManagementUtility::getFileFieldTCAConfig(
                'image',
                [
                    'appearance' => [
                        'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference',
                    ],
                    'maxitems' => 1,
                    'overrideChildTca' => [
                        'types' => [
                            '0' => [
                                'showitem' => '
                            --palette--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette',
                            ],
                            File::FILETYPE_TEXT => [
                                'showitem' => '
                            --palette--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette',
                            ],
                            File::FILETYPE_IMAGE => [
                                'showitem' => '
                            --palette--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette',
                            ],
                            File::FILETYPE_AUDIO => [
                                'showitem' => '
                            --palette--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette',
                            ],
                            File::FILETYPE_VIDEO => [
                                'showitem' => '
                            --palette--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette',
                            ],
                            File::FILETYPE_APPLICATION => [
                                'showitem' => '
                            --palette--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette',
                            ],
                        ],
                    ],
                ],
                $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
            ),
        ],
        'street' => [
            'exclude' => true,
            'label' => 'LLL:EXT:jsd_modeinrichtungen/Resources/Private/Language/locallang_db.xlf:tx_jsdmodeinrichtungen_domain_model_institutions.street',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
            ],
        ],
        'house_number' => [
            'exclude' => true,
            'label' => 'LLL:EXT:jsd_modeinrichtungen/Resources/Private/Language/locallang_db.xlf:tx_jsdmodeinrichtungen_domain_model_institutions.house_number',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
            ],
        ],
        'zip' => [
            'exclude' => true,
            'label' => 'LLL:EXT:jsd_modeinrichtungen/Resources/Private/Language/locallang_db.xlf:tx_jsdmodeinrichtungen_domain_model_institutions.zip',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
            ],
        ],
        'pid_detail_presse' => [
            'exclude' => true,
            'label' => 'LLL:EXT:jsd_modeinrichtungen/Resources/Private/Language/locallang_db.xlf:tx_jsdmodeinrichtungen_domain_model_institutions.pid_detail_presse',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
            ],
        ],
        'pid_list_presse' => [
            'exclude' => true,
            'label' => 'LLL:EXT:jsd_modeinrichtungen/Resources/Private/Language/locallang_db.xlf:tx_jsdmodeinrichtungen_domain_model_institutions.pid_list_presse',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
            ],
        ],
        'location_latitude' => [
            'exclude' => true,
            'label' => 'LLL:EXT:jsd_modeinrichtungen/Resources/Private/Language/locallang_db.xlf:tx_jsdmodeinrichtungen_domain_model_institutions.location_latitude',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
            ],
        ],
        'location_longitude' => [
            'exclude' => true,
            'label' => 'LLL:EXT:jsd_modeinrichtungen/Resources/Private/Language/locallang_db.xlf:tx_jsdmodeinrichtungen_domain_model_institutions.location_longitude',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
            ],
        ],
        'stadt' => [
            'exclude' => true,
            'label' => 'LLL:EXT:jsd_modeinrichtungen/Resources/Private/Language/locallang_db.xlf:tx_jsdmodeinrichtungen_domain_model_institutions.stadt',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_jsdmodeinrichtungen_domain_model_locations',
                'minitems' => 0,
                'maxitems' => 1,
                'appearance' => [
                    'collapseAll' => 0,
                    'levelLinksPosition' => 'top',
                    'showSynchronizationLink' => 1,
                    'showPossibleLocalizationRecords' => 1,
                    'showAllLocalizationLink' => 1,
                ],
            ],
        ],
        'bezirk' => [
            'exclude' => true,
            'label' => 'LLL:EXT:jsd_modeinrichtungen/Resources/Private/Language/locallang_db.xlf:tx_jsdmodeinrichtungen_domain_model_institutions.bezirk',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_jsdmodeinrichtungen_domain_model_locations',
                'minitems' => 0,
                'maxitems' => 1,
                'appearance' => [
                    'collapseAll' => 0,
                    'levelLinksPosition' => 'top',
                    'showSynchronizationLink' => 1,
                    'showPossibleLocalizationRecords' => 1,
                    'showAllLocalizationLink' => 1,
                ],
            ],
        ],
        'bundesland' => [
            'exclude' => true,
            'label' => 'LLL:EXT:jsd_modeinrichtungen/Resources/Private/Language/locallang_db.xlf:tx_jsdmodeinrichtungen_domain_model_institutions.bundesland',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_jsdmodeinrichtungen_domain_model_locations',
                'minitems' => 0,
                'maxitems' => 1,
                'appearance' => [
                    'collapseAll' => 0,
                    'levelLinksPosition' => 'top',
                    'showSynchronizationLink' => 1,
                    'showPossibleLocalizationRecords' => 1,
                    'showAllLocalizationLink' => 1,
                ],
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
                'type' => 'inline',
                'foreign_table' => 'tx_jsdmodeinrichtungen_domain_model_institutiontypes',
                'minitems' => 0,
                'maxitems' => 1,
                'appearance' => [
                    'collapseAll' => 0,
                    'levelLinksPosition' => 'top',
                    'showSynchronizationLink' => 1,
                    'showPossibleLocalizationRecords' => 1,
                    'showAllLocalizationLink' => 1,
                ],
            ],
        ],
        'bereich' => [
            'exclude' => true,
            'label' => 'LLL:EXT:jsd_modeinrichtungen/Resources/Private/Language/locallang_db.xlf:tx_jsdmodeinrichtungen_domain_model_institutions.bereich',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_jsdmodeinrichtungen_domain_model_institutiontypes',
                'minitems' => 0,
                'maxitems' => 1,
                'appearance' => [
                    'collapseAll' => 0,
                    'levelLinksPosition' => 'top',
                    'showSynchronizationLink' => 1,
                    'showPossibleLocalizationRecords' => 1,
                    'showAllLocalizationLink' => 1,
                ],
            ],
        ],
        'fbereich' => [
            'exclude' => true,
            'label' => 'LLL:EXT:jsd_modeinrichtungen/Resources/Private/Language/locallang_db.xlf:tx_jsdmodeinrichtungen_domain_model_institutions.fbereich',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'foreign_table' => 'tx_jsdmodeinrichtungen_domain_model_institutiontypes',
                'MM' => 'tx_jsdmodeinrichtungen_institutions_fbereich_institutiontypes_mm',
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

    ],
];
