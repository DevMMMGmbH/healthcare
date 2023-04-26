<?php

declare(strict_types=1);

use TYPO3\CMS\Core\Resource\File;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

return [
    'ctrl' => [
        'title' => 'LLL:EXT:pgdcontactperson/Resources/Private/Language/locallang_db.xlf:tx_pgdcontactperson_domain_model_contactperson',
        'label' => 'lastname',
        'label_alt' => 'firstname, refposition',
        'label_alt_force' => 1,
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'searchFields' => 'image,firstname,lastname,phone,mobil,fax,email,institution,area,room,therapie1label,therapie1link,therapie2label,therapie2link,therapie3label,therapie3link,therapie4label,therapie4link,refposition,reftitle, description,no_search',
        'iconfile' => 'EXT:pgdcontactperson/Resources/Public/Icons/tx_pgdcontactperson_domain_model_contactperson.gif',
    ],
    'types' => [
        '1' => [
            'showitem' => 'sys_language_uid,l10n_parent,l10n_diffsource,--palette--;;ePalette,image,--palette--;;positionPalette,--palette--;;namePalette,--palette--;;contactPalette,email,institution,--palette--;;areaPalette,description,--palette--;;aPalette,--palette--;;bPalette,--palette--;;cPalette,--palette--;;dPalette,profile,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,starttime,endtime',
        ],
    ],
    'palettes' => [
        'aPalette' => [
            'showitem' => 'therapie1link,therapie1label',
            'canNotCollapse' => '1',
        ],
        'bPalette' => [
            'showitem' => 'therapie2link,therapie2label',
            'canNotCollapse' => '1',
        ],
        'cPalette' => [
            'showitem' => 'therapie3link,therapie3label',
            'canNotCollapse' => '1',
        ],
        'dPalette' => [
            'showitem' => 'therapie4link,therapie4label',
            'canNotCollapse' => '1',
        ],
        'ePalette' => [
            'showitem' => 'hidden, no_search',
            'canNotCollapse' => '1',
        ],
        'inst1Palette' => [
            'showitem' => 'area,room',
            'canNotCollapse' => '1',
        ],
        'contactPalette' => [
            'showitem' => 'phone,mobil,fax',
            'canNotCollapse' => '1',
        ],
        'namePalette' => [
            'showitem' => 'firstname,lastname',
            'canNotCollapse' => '1',
        ],
        'positionPalette' => [
            'showitem' => 'refposition,reftitle',
            'canNotCollapse' => '1',
        ],
        'areaPalette' => [
            'showitem' => 'area,room',
            'canNotCollapse' => '1',
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
                'foreign_table' => 'tx_pgdcontactperson_domain_model_contactperson',
                'foreign_table_where' => 'AND tx_pgdcontactperson_domain_model_contactperson.pid=###CURRENT_PID### AND tx_pgdcontactperson_domain_model_contactperson.sys_language_uid IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        't3ver_label' => [
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.versionLabel',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 255,
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

        'image' => [
            'exclude' => true,
            'label' => 'LLL:EXT:pgdcontactperson/Resources/Private/Language/locallang_db.xlf:tx_pgdcontactperson_domain_model_contactperson.image',
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
        'firstname' => [
            'exclude' => true,
            'label' => 'LLL:EXT:pgdcontactperson/Resources/Private/Language/locallang_db.xlf:tx_pgdcontactperson_domain_model_contactperson.firstname',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required',

            ],
        ],
        'lastname' => [
            'exclude' => true,
            'label' => 'LLL:EXT:pgdcontactperson/Resources/Private/Language/locallang_db.xlf:tx_pgdcontactperson_domain_model_contactperson.lastname',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required',

            ],
        ],
        'phone' => [
            'exclude' => true,
            'label' => 'LLL:EXT:pgdcontactperson/Resources/Private/Language/locallang_db.xlf:tx_pgdcontactperson_domain_model_contactperson.phone',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
            ],
        ],
        'mobil' => [
            'exclude' => true,
            'label' => 'LLL:EXT:pgdcontactperson/Resources/Private/Language/locallang_db.xlf:tx_pgdcontactperson_domain_model_contactperson.mobil',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
            ],
        ],
        'fax' => [
            'exclude' => true,
            'label' => 'LLL:EXT:pgdcontactperson/Resources/Private/Language/locallang_db.xlf:tx_pgdcontactperson_domain_model_contactperson.fax',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
            ],
        ],
        'email' => [
            'exclude' => true,
            'label' => 'LLL:EXT:pgdcontactperson/Resources/Private/Language/locallang_db.xlf:tx_pgdcontactperson_domain_model_contactperson.email',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'nospace,email',
            ],
        ],
        'institution' => [
            'exclude' => true,
            'label' => 'LLL:EXT:pgdcontactperson/Resources/Private/Language/locallang_db.xlf:tx_pgdcontactperson_domain_model_contactperson.institution',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'tx_jsdmodeinrichtungen_domain_model_institutions',
                'foreign_table_where' => ' ORDER BY title',
                'minitems' => 0,
                'maxitems' => 1,
            ],
        ],
        'area' => [
            'exclude' => true,
            'label' => 'LLL:EXT:pgdcontactperson/Resources/Private/Language/locallang_db.xlf:tx_pgdcontactperson_domain_model_contactperson.area',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
            ],
        ],
        'room' => [
            'exclude' => true,
            'label' => 'LLL:EXT:pgdcontactperson/Resources/Private/Language/locallang_db.xlf:tx_pgdcontactperson_domain_model_contactperson.room',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
            ],
        ],
        'therapie1label' => [
            'exclude' => true,
            'label' => 'LLL:EXT:pgdcontactperson/Resources/Private/Language/locallang_db.xlf:tx_pgdcontactperson_domain_model_contactperson.therapie1label',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
            ],
        ],
        'therapie1link' => [
            'exclude' => true,
            'label' => 'LLL:EXT:pgdcontactperson/Resources/Private/Language/locallang_db.xlf:tx_pgdcontactperson_domain_model_contactperson.therapie1link',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'renderType' => 'inputLink',
            ],
        ],
        'therapie2label' => [
            'exclude' => true,
            'label' => 'LLL:EXT:pgdcontactperson/Resources/Private/Language/locallang_db.xlf:tx_pgdcontactperson_domain_model_contactperson.therapie2label',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
            ],
        ],
        'therapie2link' => [
            'exclude' => true,
            'label' => 'LLL:EXT:pgdcontactperson/Resources/Private/Language/locallang_db.xlf:tx_pgdcontactperson_domain_model_contactperson.therapie2link',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'renderType' => 'inputLink',
            ],
        ],
        'therapie3label' => [
            'exclude' => true,
            'label' => 'LLL:EXT:pgdcontactperson/Resources/Private/Language/locallang_db.xlf:tx_pgdcontactperson_domain_model_contactperson.therapie3label',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
            ],
        ],
        'therapie3link' => [
            'exclude' => true,
            'label' => 'LLL:EXT:pgdcontactperson/Resources/Private/Language/locallang_db.xlf:tx_pgdcontactperson_domain_model_contactperson.therapie3link',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'renderType' => 'inputLink',
            ],
        ],
        'therapie4label' => [
            'exclude' => true,
            'label' => 'LLL:EXT:pgdcontactperson/Resources/Private/Language/locallang_db.xlf:tx_pgdcontactperson_domain_model_contactperson.therapie4label',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
            ],
        ],
        'therapie4link' => [
            'exclude' => true,
            'label' => 'LLL:EXT:pgdcontactperson/Resources/Private/Language/locallang_db.xlf:tx_pgdcontactperson_domain_model_contactperson.therapie4link',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'renderType' => 'inputLink',
            ],
        ],
        'refposition' => [
            'exclude' => true,
            'label' => 'LLL:EXT:pgdcontactperson/Resources/Private/Language/locallang_db.xlf:tx_pgdcontactperson_domain_model_contactperson.refposition',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'tx_pgdcontactperson_domain_model_position',
                'foreign_table_where' => ' ORDER BY position',
                'minitems' => 0,
                'maxitems' => 1,
            ],
        ],
        'reftitle' => [
            'exclude' => true,
            'label' => 'LLL:EXT:pgdcontactperson/Resources/Private/Language/locallang_db.xlf:tx_pgdcontactperson_domain_model_contactperson.reftitle',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [['', '0']],
                'foreign_table' => 'tx_pgdcontactperson_domain_model_title',
                'minitems' => 0,
                'maxitems' => 1,

            ],
        ],
        'no_search' => [
            'exclude' => true,
            'label' => 'LLL:EXT:pgdcontactperson/Resources/Private/Language/locallang_db.xlf:tx_pgdcontactperson_domain_model_contactperson.no_search',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.enabled',
                    ],
                ],
                'default' => 0,
            ],

        ],
        'description' => [
            'exclude' => true,
            'label' => 'LLL:EXT:pgdcontactperson/Resources/Private/Language/locallang_db.xlf:tx_pgdcontactperson_domain_model_contactperson.description',
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
        'profile' => [
            'exclude' => true,
            'label' => 'LLL:EXT:pgdcontactperson/Resources/Private/Language/locallang_db.xlf:tx_pgdcontactperson_domain_model_contactperson.profile',
            'config' => [
                'type' => 'input',
                'size'
 => 30,
                'eval' => 'trim',
                'renderType' => 'inputLink',
            ],
        ],

    ],
];
