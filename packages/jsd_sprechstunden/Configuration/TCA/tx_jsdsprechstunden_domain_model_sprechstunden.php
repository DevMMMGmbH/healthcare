<?php

declare(strict_types=1);

return [
    'ctrl' => [
        'title' => 'LLL:EXT:jsd_sprechstunden/Resources/Private/Language/locallang_db.xlf:tx_jsdsprechstunden_domain_model_sprechstunden',
        'label' => 'auswahlname',
        'label_alt' => 'title,uid',
        'label_alt_force' => 1,
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
        'searchFields' => 'auswahlname,title,einrichtung,gglmaplink,beschreibung,termin_title,termin_email_title,termin_email_link,termin_link_title,termin_link,termin_tel_link,termin_tel,termin_zeiten_title,termin_zeiten',
        'iconfile' => 'EXT:jsd_sprechstunden/Resources/Public/Icons/tx_jsdsprechstunden_domain_model_sprechstunden.gif',
    ],
    'types' => [
        '1' => [
            'showitem' => '--palette--;;aPalette,--palette--;;bPalette,beschreibung,termin_title,--palette--;;cPalette,--palette--;;dPalette,--palette--;;ePalette,termin_zeiten_title,termin_zeiten,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,sys_language_uid,l10n_parent,l10n_diffsource,hidden,starttime,endtime',
        ],
    ],
    'palettes' => [
        'aPalette' => [
            'showitem' => 'auswahlname, title',
            'canNotCollapse' => '1',
        ],
        'bPalette' => [
            'showitem' => 'einrichtung, gglmaplink',
            'canNotCollapse' => '1',
        ],
        'cPalette' => [
            'showitem' => 'termin_email_link, termin_email_title',
            'canNotCollapse' => '1',
        ],
        'dPalette' => [
            'showitem' => 'termin_link, termin_link_title',
            'canNotCollapse' => '1',
        ],
        'ePalette' => [
            'showitem' =>
            'termin_tel_link, termin_tel',
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
                'foreign_table' => 'tx_jsdsprechstunden_domain_model_sprechstunden',
                'foreign_table_where' => 'AND {#tx_jsdsprechstunden_domain_model_sprechstunden}.{#pid}=###CURRENT_PID### AND {#tx_jsdsprechstunden_domain_model_sprechstunden}.{#sys_language_uid} IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.visible',
            'config' => [
                'type' => 'check',
                'renderType' => 'checkboxToggle',
                'items' => [
                    [
                        0 => '',
                        1 => '',
                        'invertStateDisplay' => true,
                    ],
                ],
            ],
        ],
        'starttime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime,int',
                'default' => 0,
                'behaviour' => [
                    'allowLanguageSynchronization' => true,
                ],
            ],
        ],
        'endtime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime,int',
                'default' => 0,
                'range' => [
                    'upper' => mktime(0, 0, 0, 1, 1, 2038),
                ],
                'behaviour' => [
                    'allowLanguageSynchronization' => true,
                ],
            ],
        ],

        'auswahlname' => [
            'exclude' => true,
            'label' => 'LLL:EXT:jsd_sprechstunden/Resources/Private/Language/locallang_db.xlf:tx_jsdsprechstunden_domain_model_sprechstunden.auswahlname',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'placeholder' => 'z.B. überlassungsmodelle-peg',
            ],
        ],
        'title' => [
            'exclude' => true,
            'label' => 'LLL:EXT:jsd_sprechstunden/Resources/Private/Language/locallang_db.xlf:tx_jsdsprechstunden_domain_model_sprechstunden.title',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
            ],
        ],
        'einrichtung' => [
            'exclude' => true,
            'label' => 'LLL:EXT:jsd_sprechstunden/Resources/Private/Language/locallang_db.xlf:tx_jsdsprechstunden_domain_model_sprechstunden.einrichtung',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'placeholder' => 'z.B. PersonaGrata - Müllerstraße 56-58, 13349 Berlin',
            ],
        ],
        'gglmaplink' => [
            'exclude' => true,
            'label' => 'LLL:EXT:jsd_sprechstunden/Resources/Private/Language/locallang_db.xlf:tx_jsdsprechstunden_domain_model_sprechstunden.gglmaplink',
            'config' => [
                'eval' => 'trim',
                'fieldControl' => [
                    'linkPopup' => [
                        'options' => [
                            'title' => 'Link',
                            'windowOpenParameters' => 'height=600,width=1000,status=0,menubar=0,scrollbars=1',
                        ],
                    ],
                ],
                'placeholder' => 'https://goo.gl/maps/rAJfG3qL65WHLHTXA',
                'renderType' => 'inputLink',
                'softref' => 'typolink',
                'type' => 'input',
            ],
        ],
        'beschreibung' => [
            'exclude' => true,
            'label' => 'LLL:EXT:jsd_sprechstunden/Resources/Private/Language/locallang_db.xlf:tx_jsdsprechstunden_domain_model_sprechstunden.beschreibung',
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
        'termin_title' => [
            'exclude' => true,
            'label' => 'LLL:EXT:jsd_sprechstunden/Resources/Private/Language/locallang_db.xlf:tx_jsdsprechstunden_domain_model_sprechstunden.termin_title',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
            ],
        ],
        'termin_email_title' => [
            'exclude' => true,
            'label' => 'LLL:EXT:jsd_sprechstunden/Resources/Private/Language/locallang_db.xlf:tx_jsdsprechstunden_domain_model_sprechstunden.termin_email_title',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
            ],
        ],
        'termin_email_link' => [
            'exclude' => true,
            'label' => 'LLL:EXT:jsd_sprechstunden/Resources/Private/Language/locallang_db.xlf:tx_jsdsprechstunden_domain_model_sprechstunden.termin_email_link',
            'config' => [
                'eval' => 'trim',
                'fieldControl' => [
                    'linkPopup' => [
                        'options' => [
                            'title' => 'Link',
                            'windowOpenParameters' => 'height=600,width=500,status=0,menubar=0,scrollbars=1',
                        ],
                    ],
                ],
                'renderType' => 'inputLink',
                'softref' => 'typolink',
                'type' => 'input',
            ],
        ],
        'termin_link_title' => [
            'exclude' => true,
            'label' => 'LLL:EXT:jsd_sprechstunden/Resources/Private/Language/locallang_db.xlf:tx_jsdsprechstunden_domain_model_sprechstunden.termin_link_title',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
            ],
        ],
        'termin_link' => [
            'exclude' => true,
            'label' => 'LLL:EXT:jsd_sprechstunden/Resources/Private/Language/locallang_db.xlf:tx_jsdsprechstunden_domain_model_sprechstunden.termin_link',
            'config' => [
                'eval' => 'trim',
                'fieldControl' => [
                    'linkPopup' => [
                        'options' => [
                            'title' => 'Link',
                            'windowOpenParameters' => 'height=600,width=500,status=0,menubar=0,scrollbars=1',
                        ],
                    ],
                ],
                'renderType' => 'inputLink',
                'softref' => 'typolink',
                'type' => 'input',
            ],
        ],
        'termin_tel_link' => [
            'exclude' => true,
            'label' => 'LLL:EXT:jsd_sprechstunden/Resources/Private/Language/locallang_db.xlf:tx_jsdsprechstunden_domain_model_sprechstunden.termin_tel_link',
            'config' => [
                'eval' => 'trim',
                'fieldControl' => [
                    'linkPopup' => [
                        'options' => [
                            'title' => 'Link',
                            'windowOpenParameters' => 'height=600,width=500,status=0,menubar=0,scrollbars=1',
                        ],
                    ],
                ],
                'renderType' => 'inputLink',
                'softref' => 'typolink',
                'type' => 'input',
            ],
        ],
        'termin_tel' => [
            'exclude' => true,
            'label' => 'LLL:EXT:jsd_sprechstunden/Resources/Private/Language/locallang_db.xlf:tx_jsdsprechstunden_domain_model_sprechstunden.termin_tel',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
            ],
        ],
        'termin_zeiten_title' => [
            'exclude' => true,
            'label' => 'LLL:EXT:jsd_sprechstunden/Resources/Private/Language/locallang_db.xlf:tx_jsdsprechstunden_domain_model_sprechstunden.termin_zeiten_title',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'placeholder' => 'LLL:EXT:jsd_sprechstunden/Resources/Private/Language/locallang.xlf:tx_jsdsprechstunden_domain_model_sprechstunden.termin_zeiten_title_default',
            ],
        ],
        'termin_zeiten' => [
            'exclude' => true,
            'label' => 'LLL:EXT:jsd_sprechstunden/Resources/Private/Language/locallang_db.xlf:tx_jsdsprechstunden_domain_model_sprechstunden.termin_zeiten',
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

    ],
];
