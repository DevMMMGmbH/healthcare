<?php

declare(strict_types=1);

return [
    'ctrl' => [
        'title' => 'LLL:EXT:jsd_modeinrichtungen/Resources/Private/Language/locallang_db.xlf:tx_jsdmodeinrichtungen_domain_model_sections',
        'label' => 'title',
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
        'searchFields' => 'title,rootpage,listpage,institution',
        'iconfile' => 'EXT:jsd_modeinrichtungen/Resources/Public/Icons/tx_jsdmodeinrichtungen_domain_model_sections.gif',
    ],
    'types' => [
        '1' => [
            'showitem' => 'sys_language_uid,l10n_parent,l10n_diffsource,hidden,title,rootpage,listpage,institution,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,starttime,endtime',
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
                'foreign_table' => 'tx_jsdmodeinrichtungen_domain_model_sections',
                'foreign_table_where' => 'AND tx_jsdmodeinrichtungen_domain_model_sections.pid=###CURRENT_PID### AND tx_jsdmodeinrichtungen_domain_model_sections.sys_language_uid IN (-1,0)',
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
            'label' => 'LLL:EXT:jsd_modeinrichtungen/Resources/Private/Language/locallang_db.xlf:tx_jsdmodeinrichtungen_domain_model_sections.title',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required',
            ],
        ],
        'rootpage' => [
            'exclude' => true,
            'label' => 'LLL:EXT:jsd_modeinrichtungen/Resources/Private/Language/locallang_db.xlf:tx_jsdmodeinrichtungen_domain_model_sections.rootpage',
            'config' => [
                'type' => 'input',
                'size' => 4,
                'eval' => 'int',
            ],
        ],
        'listpage' => [
            'exclude' => true,
            'label' => 'LLL:EXT:jsd_modeinrichtungen/Resources/Private/Language/locallang_db.xlf:tx_jsdmodeinrichtungen_domain_model_sections.listpage',
            'config' => [
                'type' => 'input',
                'size' => 4,
                'eval' => 'int',
            ],
        ],
        'institution' => [
            'exclude' => true,
            'label' => 'LLL:EXT:jsd_modeinrichtungen/Resources/Private/Language/locallang_db.xlf:tx_jsdmodeinrichtungen_domain_model_sections.institution',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'tx_jsdmodeinrichtungen_domain_model_institutions',
                'minitems' => 0,
                'maxitems' => 1,
            ],
        ],

    ],
];
