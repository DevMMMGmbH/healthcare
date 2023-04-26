<?php
return [
    'ctrl' => [
        'sortby' => 'sorting',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'editlock' => 'editlock',
        'versioningWS' => true,
        'origUid' => 't3_origuid',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'translationSource' => 'l10n_source',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
            'fe_group' => 'fe_group',
        ],
        'title' => 'LLL:EXT:jsd_module/Resources/Private/Language/locallang_db.xlf:tx_jsdmodule_zitattext',
        'label' => 'tx_jsdmodule_shortversion',
        'iconfile' => 'EXT:jsd_module/Resources/Public/Icons/Extension.svg',
        'hideTable' => true,
        'searchFields' => 'tx_jsdmodule_zitat,tx_jsdmodule_zitatcopy,tx_jsdmodule_text',
    ],
    'palettes' => [
        'language' => [
            'showitem' => '
                        sys_language_uid;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:sys_language_uid_formlabel,l18n_parent
                    ',
        ],
        'hidden' => [
            'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.visibility',
            'showitem' => 'hidden',
        ],
        'access' => [
            'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access',
            'showitem' => '
                        starttime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:starttime_formlabel,
                        endtime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:endtime_formlabel,
                        --linebreak--,
                        fe_group;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:fe_group_formlabel,
                        --linebreak--,editlock
                    ',
        ],
    ],
    'columns' => [
        'editlock' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:editlock',
            'config' => [
                'type' => 'check',
                'renderType' => 'checkboxToggle',
                'items' => [
                    [
                        '',
                        '',
                    ],
                ],
            ],
        ],
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'language',
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    [
                        '',
                        0,
                    ],
                ],
                'default' => 0,
                'foreign_table' => 'tx_jsdmodule_zitattext',
                'foreign_table_where' => 'AND tx_jsdmodule_zitattext.pid=###CURRENT_PID### AND tx_jsdmodule_zitattext.sys_language_uid IN (-1, 0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.disable',
            'config' => [
                'type' => 'check',
                'renderType' => 'checkboxToggle',
                'items' => [
                    [
                        '',
                        '',
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
            ],
            'l10n_mode' => 'exclude',
            'l10n_display' => 'defaultAsReadonly',
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
                    'upper' => 2145913200,
                ],
            ],
            'l10n_mode' => 'exclude',
            'l10n_display' => 'defaultAsReadonly',
        ],
        'fe_group' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.fe_group',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'size' => 5,
                'maxitems' => 20,
                'items' => [
                    [
                        'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hide_at_login',
                        -1,
                    ],
                    [
                        'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.any_login',
                        -2,
                    ],
                    [
                        'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.usergroups',
                        '--div--',
                    ],
                ],
                'exclusiveKeys' => '-1,-2',
                'foreign_table' => 'fe_groups',
            ],
        ],
        'parentid' => [
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    [
                        '',
                        0,
                    ],
                ],
                'default' => 0,
                'foreign_table' => 'tt_content',
                'foreign_table_where' => 'AND tt_content.pid=###CURRENT_PID### AND tt_content.sys_language_uid IN (-1, ###REC_FIELD_sys_language_uid###)',
            ],
        ],
        'parenttable' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        'sorting' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        'tx_jsdmodule_shortversion' => [
            'config' => [
                'default' => '0',
                'items' => [
                    [
                        'LLL:EXT:jsd_module/Resources/Private/Language/locallang_db.xlf:tx_jsdmodule_zitattext.tx_jsdmodule_shortversion.I.0',
                    ],
                    [
                        'LLL:EXT:jsd_module/Resources/Private/Language/locallang_db.xlf:tx_jsdmodule_zitattext.tx_jsdmodule_shortversion.I.1',
                    ],
                ],
                'type' => 'check',
            ],
            'label' => 'LLL:EXT:jsd_module/Resources/Private/Language/locallang_db.xlf:tx_jsdmodule_zitattext.tx_jsdmodule_shortversion',
            'exclude' => 1,
        ],
        'tx_jsdmodule_zitat' => [
            'config' => [
                'enableRichtext' => 1,
                'richtextConfiguration' => 'jsdtheme',
                'type' => 'text',
                'softref' => 'typolink_tag,email[subst],url',
            ],
            'label' => 'LLL:EXT:jsd_module/Resources/Private/Language/locallang_db.xlf:tx_jsdmodule_zitattext.tx_jsdmodule_zitat',
            'exclude' => 1,
        ],
        'tx_jsdmodule_zitatcopy' => [
            'config' => [
                'eval' => 'trim',
                'max' => '100',
                'type' => 'input',
            ],
            'label' => 'LLL:EXT:jsd_module/Resources/Private/Language/locallang_db.xlf:tx_jsdmodule_zitattext.tx_jsdmodule_zitatcopy',
            'exclude' => 1,
        ],
        'tx_jsdmodule_options' => [
            'config' => [
                'fieldWizard' => [
                    'selectIcons' => [
                        'disabled' => 1,
                    ],
                ],
                'items' => [
                    [
                        'LLL:EXT:jsd_module/Resources/Private/Language/locallang_db.xlf:tx_jsdmodule_zitattext.tx_jsdmodule_options.I.0',
                        '1',
                        '',
                        '',
                    ],
                    [
                        'LLL:EXT:jsd_module/Resources/Private/Language/locallang_db.xlf:tx_jsdmodule_zitattext.tx_jsdmodule_options.I.1',
                        '2',
                        '',
                        '',
                    ],
                ],
                'renderType' => 'selectSingle',
                'type' => 'select',
            ],
            'label' => 'LLL:EXT:jsd_module/Resources/Private/Language/locallang_db.xlf:tx_jsdmodule_zitattext.tx_jsdmodule_options',
            'exclude' => 1,
        ],
        'tx_jsdmodule_text' => [
            'config' => [
                'enableRichtext' => 1,
                'richtextConfiguration' => 'jsdtheme',
                'type' => 'text',
                'softref' => 'typolink_tag,email[subst],url',
            ],
            'label' => 'LLL:EXT:jsd_module/Resources/Private/Language/locallang_db.xlf:tx_jsdmodule_zitattext.tx_jsdmodule_text',
            'exclude' => 1,
        ],
        't3_origuid' => [
            'config' => [
                'type' => 'passthrough',
                'default' => 0,
            ],
        ],
        'l10n_source' => [
            'config' => [
                'type' => 'passthrough',
                'default' => 0,
            ],
        ],
    ],
    'types' => [
        1 => [
            'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,tx_jsdmodule_shortversion,tx_jsdmodule_zitat,tx_jsdmodule_zitatcopy,tx_jsdmodule_options,tx_jsdmodule_text,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;;access',
        ],
    ],
];