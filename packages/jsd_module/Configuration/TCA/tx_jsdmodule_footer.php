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
        'title' => 'LLL:EXT:jsd_module/Resources/Private/Language/locallang_db.xlf:tx_jsdmodule_footer',
        'label' => 'tx_jsdmodule_footer_teaser',
        'iconfile' => 'EXT:jsd_module/Resources/Public/Icons/Extension.svg',
        'hideTable' => true,
        'searchFields' => 'tx_jsdmodule_footer_menu_a_title,tx_jsdmodule_footer_menu_a_link,tx_jsdmodule_footer_menu_b_title,tx_jsdmodule_footer_menu_b_link,tx_jsdmodule_footer_menu_c_title,tx_jsdmodule_footer_menu_c_link,tx_jsdmodule_footer_menu_d_link',
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
                'foreign_table' => 'tx_jsdmodule_footer',
                'foreign_table_where' => 'AND tx_jsdmodule_footer.pid=###CURRENT_PID### AND tx_jsdmodule_footer.sys_language_uid IN (-1, 0)',
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
        'tx_jsdmodule_footer_teaser' => [
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'sys_file_reference',
                'foreign_field' => 'uid_foreign',
                'foreign_sortby' => 'sorting_foreign',
                'foreign_table_field' => 'tablenames',
                'foreign_match_fields' => [
                    'fieldname' => 'tx_jsdmodule_footer_teaser',
                ],
                'foreign_label' => 'uid_local',
                'foreign_selector' => 'uid_local',
                'overrideChildTca' => [
                    'columns' => [
                        'uid_local' => [
                            'config' => [
                                'appearance' => [
                                    'elementBrowserType' => 'file',
                                    'elementBrowserAllowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg,webp',
                                ],
                            ],
                        ],
                    ],
                    'types' => [
                        [
                            'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                        ],
                        [
                            'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                        ],
                        [
                            'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                        ],
                        [
                            'showitem' => '
                                --palette--;;audioOverlayPalette,
                                --palette--;;filePalette',
                        ],
                        [
                            'showitem' => '
                                --palette--;;videoOverlayPalette,
                                --palette--;;filePalette',
                        ],
                        [
                            'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                        ],
                    ],
                ],
                'filter' => [
                    [
                        'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                        'parameters' => [
                            'allowedFileExtensions' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg,webp',
                            'disallowedFileExtensions' => '',
                        ],
                    ],
                ],
                'appearance' => [
                    'useSortable' => 1,
                    'headerThumbnail' => [
                        'field' => 'uid_local',
                        'height' => '45m',
                    ],
                    'enabledControls' => [
                        'info' => 1,
                        'new' => false,
                        'dragdrop' => 1,
                        'sort' => 0,
                        'hide' => 1,
                        'delete' => 1,
                        'localize' => 1,
                    ],
                    'elementBrowserEnabled' => 1,
                    'fileUploadAllowed' => 1,
                ],
                'maxitems' => '3',
                'minitems' => '0',
            ],
            'l10n_mode' => 'copy',
            'label' => 'LLL:EXT:jsd_module/Resources/Private/Language/locallang_db.xlf:tx_jsdmodule_footer.tx_jsdmodule_footer_teaser',
            'exclude' => 1,
        ],
        'tx_jsdmodule_footer_menu_a_title' => [
            'config' => [
                'eval' => 'required,trim',
                'placeholder' => 'Medizinische Versorgung',
                'type' => 'input',
            ],
            'label' => 'LLL:EXT:jsd_module/Resources/Private/Language/locallang_db.xlf:tx_jsdmodule_footer.tx_jsdmodule_footer_menu_a_title',
            'exclude' => 1,
        ],
        'tx_jsdmodule_footer_menu_a_link' => [
            'config' => [
                'eval' => 'required,trim',
                'type' => 'input',
            ],
            'label' => 'LLL:EXT:jsd_module/Resources/Private/Language/locallang_db.xlf:tx_jsdmodule_footer.tx_jsdmodule_footer_menu_a_link',
            'exclude' => 1,
        ],
        'tx_jsdmodule_footer_menu_b_title' => [
            'config' => [
                'eval' => 'trim',
                'type' => 'input',
            ],
            'label' => 'LLL:EXT:jsd_module/Resources/Private/Language/locallang_db.xlf:tx_jsdmodule_footer.tx_jsdmodule_footer_menu_b_title',
            'exclude' => 1,
        ],
        'tx_jsdmodule_footer_menu_b_link' => [
            'config' => [
                'eval' => 'trim',
                'placeholder' => 'Pflege & Wohnen',
                'type' => 'input',
            ],
            'label' => 'LLL:EXT:jsd_module/Resources/Private/Language/locallang_db.xlf:tx_jsdmodule_footer.tx_jsdmodule_footer_menu_b_link',
            'exclude' => 1,
        ],
        'tx_jsdmodule_footer_menu_c_title' => [
            'config' => [
                'eval' => 'trim',
                'type' => 'input',
            ],
            'label' => 'LLL:EXT:jsd_module/Resources/Private/Language/locallang_db.xlf:tx_jsdmodule_footer.tx_jsdmodule_footer_menu_c_title',
            'exclude' => 1,
        ],
        'tx_jsdmodule_footer_menu_c_link' => [
            'config' => [
                'eval' => 'trim',
                'placeholder' => 'Soziales & Integration',
                'type' => 'input',
            ],
            'label' => 'LLL:EXT:jsd_module/Resources/Private/Language/locallang_db.xlf:tx_jsdmodule_footer.tx_jsdmodule_footer_menu_c_link',
            'exclude' => 1,
        ],
        'tx_jsdmodule_footer_menu_d_link' => [
            'config' => [
                'eval' => 'trim',
                'placeholder' => '23,45,2456',
                'type' => 'input',
            ],
            'label' => 'LLL:EXT:jsd_module/Resources/Private/Language/locallang_db.xlf:tx_jsdmodule_footer.tx_jsdmodule_footer_menu_d_link',
            'exclude' => 1,
        ],
        'tx_jsdmodule_footer_sm_icons' => [
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'sys_file_reference',
                'foreign_field' => 'uid_foreign',
                'foreign_sortby' => 'sorting_foreign',
                'foreign_table_field' => 'tablenames',
                'foreign_match_fields' => [
                    'fieldname' => 'tx_jsdmodule_footer_sm_icons',
                ],
                'foreign_label' => 'uid_local',
                'foreign_selector' => 'uid_local',
                'overrideChildTca' => [
                    'columns' => [
                        'uid_local' => [
                            'config' => [
                                'appearance' => [
                                    'elementBrowserType' => 'file',
                                    'elementBrowserAllowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg,webp',
                                ],
                            ],
                        ],
                    ],
                    'types' => [
                        [
                            'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                        ],
                        [
                            'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                        ],
                        [
                            'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                        ],
                        [
                            'showitem' => '
                                --palette--;;audioOverlayPalette,
                                --palette--;;filePalette',
                        ],
                        [
                            'showitem' => '
                                --palette--;;videoOverlayPalette,
                                --palette--;;filePalette',
                        ],
                        [
                            'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                        ],
                    ],
                ],
                'filter' => [
                    [
                        'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                        'parameters' => [
                            'allowedFileExtensions' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg,webp',
                            'disallowedFileExtensions' => '',
                        ],
                    ],
                ],
                'appearance' => [
                    'useSortable' => 1,
                    'headerThumbnail' => [
                        'field' => 'uid_local',
                        'height' => '45m',
                    ],
                    'enabledControls' => [
                        'info' => 1,
                        'new' => false,
                        'dragdrop' => 1,
                        'sort' => 0,
                        'hide' => 1,
                        'delete' => 1,
                        'localize' => 1,
                    ],
                    'elementBrowserEnabled' => 1,
                    'fileUploadAllowed' => 1,
                ],
                'maxitems' => '6',
                'minitems' => '0',
            ],
            'l10n_mode' => 'copy',
            'label' => 'LLL:EXT:jsd_module/Resources/Private/Language/locallang_db.xlf:tx_jsdmodule_footer.tx_jsdmodule_footer_sm_icons',
            'exclude' => 1,
        ],
        'tx_jsdmodule_footer_gb_link_a' => [
            'config' => [
                'eval' => 'required',
                'placeholder' => 'Datenschutz',
                'renderType' => 'inputLink',
                'type' => 'input',
            ],
            'label' => 'LLL:EXT:jsd_module/Resources/Private/Language/locallang_db.xlf:tx_jsdmodule_footer.tx_jsdmodule_footer_gb_link_a',
            'exclude' => 1,
        ],
        'tx_jsdmodule_footer_gb_link_b' => [
            'config' => [
                'eval' => 'required',
                'placeholder' => 'Impressum',
                'renderType' => 'inputLink',
                'type' => 'input',
            ],
            'label' => 'LLL:EXT:jsd_module/Resources/Private/Language/locallang_db.xlf:tx_jsdmodule_footer.tx_jsdmodule_footer_gb_link_b',
            'exclude' => 1,
        ],
        'tx_jsdmodule_footer_gb_link_c' => [
            'config' => [
                'eval' => 'required',
                'placeholder' => 'Inhaltsverzeichnis',
                'renderType' => 'inputLink',
                'type' => 'input',
            ],
            'label' => 'LLL:EXT:jsd_module/Resources/Private/Language/locallang_db.xlf:tx_jsdmodule_footer.tx_jsdmodule_footer_gb_link_c',
            'exclude' => 1,
        ],
        'tx_jsdmodule_footer_gb_link_d' => [
            'config' => [
                'eval' => 'required',
                'placeholder' => 'Leichte Sprache',
                'renderType' => 'inputLink',
                'type' => 'input',
            ],
            'label' => 'LLL:EXT:jsd_module/Resources/Private/Language/locallang_db.xlf:tx_jsdmodule_footer.tx_jsdmodule_footer_gb_link_d',
            'exclude' => 1,
        ],
        'tx_jsdmodule_footer_gb_link_e' => [
            'config' => [
                'eval' => 'required',
                'placeholder' => 'Mitarbeiter-Login',
                'renderType' => 'inputLink',
                'type' => 'input',
            ],
            'label' => 'LLL:EXT:jsd_module/Resources/Private/Language/locallang_db.xlf:tx_jsdmodule_footer.tx_jsdmodule_footer_gb_link_e',
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
            'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,tx_jsdmodule_footer_teaser,tx_jsdmodule_footer_menu_a_title,tx_jsdmodule_footer_menu_a_link,tx_jsdmodule_footer_menu_b_title,tx_jsdmodule_footer_menu_b_link,tx_jsdmodule_footer_menu_c_title,tx_jsdmodule_footer_menu_c_link,tx_jsdmodule_footer_menu_d_link,tx_jsdmodule_footer_sm_icons,tx_jsdmodule_footer_gb_link_a,tx_jsdmodule_footer_gb_link_b,tx_jsdmodule_footer_gb_link_c,tx_jsdmodule_footer_gb_link_d,tx_jsdmodule_footer_gb_link_e,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;;access',
        ],
    ],
];