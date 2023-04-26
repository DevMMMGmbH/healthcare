<?php
defined('TYPO3_MODE') || die();

call_user_func(static function () {

$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['jsdmodule_jsdmod3erteaser'] = 'tx_jsdmodule_jsdmod3erteaser';
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['jsdmodule_jsdmodakkordeon'] = 'tx_jsdmodule_jsdmodakkordeon';
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['jsdmodule_jsdmodankerliste'] = 'tx_jsdmodule_jsdmodankerliste';
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['jsdmodule_jsdmodbereichsteaser'] = 'tx_jsdmodule_jsdmodbereichsteaser';
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['jsdmodule_jsdmodbildergalerie'] = 'tx_jsdmodule_jsdmodbildergalerie';
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['jsdmodule_jsdmodbilderkachel'] = 'tx_jsdmodule_jsdmodbilderkachel';
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['jsdmodule_jsdmodbildslider'] = 'tx_jsdmodule_jsdmodbildslider';
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['jsdmodule_jsdmodbildtextteaser'] = 'tx_jsdmodule_jsdmodbildtextteaser';
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['jsdmodule_jsdmodbuehnedetailseite'] = 'tx_jsdmodule_jsdmodbuehnedetailseite';
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['jsdmodule_jsdmoddownload'] = 'tx_jsdmodule_jsdmoddownload';
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['jsdmodule_jsdmodfooter'] = 'tx_jsdmodule_jsdmodfooter';
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['jsdmodule_jsdmodgmapbvgyoutube'] = 'tx_jsdmodule_jsdmodgmapbvgyoutube';
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['jsdmodule_jsdmodhighlightteaser'] = 'tx_jsdmodule_jsdmodhighlightteaser';
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['jsdmodule_jsdmodinfobox'] = 'tx_jsdmodule_jsdmodinfobox';
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['jsdmodule_jsdmodkontakt'] = 'tx_jsdmodule_jsdmodkontakt';
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['jsdmodule_jsdmodleistungen'] = 'tx_jsdmodule_jsdmodleistungen';
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['jsdmodule_jsdmodlinkliste'] = 'tx_jsdmodule_jsdmodlinkliste';
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['jsdmodule_jsdmodnavigation'] = 'tx_jsdmodule_jsdmodnavigation';
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['jsdmodule_jsdmodschnellzugriffsteaser'] = 'tx_jsdmodule_jsdmodschnellzugriffsteaser';
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['jsdmodule_jsdmodseointrotext'] = 'tx_jsdmodule_jsdmodseointrotext';
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['jsdmodule_jsdmodsimplespeak'] = 'tx_jsdmodule_jsdmodsimplespeak';
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['jsdmodule_jsdmodzahltext'] = 'tx_jsdmodule_jsdmodzahltext';
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['jsdmodule_jsdmodzitattext'] = 'tx_jsdmodule_jsdmodzitattext';
$tempColumns = [
    'tx_jsdmodule_akkordeon' => [
        'config' => [
            'appearance' => [
                'collapseAll' => 1,
                'enabledControls' => [
                    'delete' => 1,
                    'dragdrop' => '1',
                    'hide' => 1,
                    'info' => 1,
                    'localize' => 1,
                    'new' => 1,
                    'sort' => 1,
                ],
                'levelLinksPosition' => 'both',
                'showAllLocalizationLink' => 1,
                'showNewRecordLink' => 1,
                'showPossibleLocalizationRecords' => 1,
                'useSortable' => 1,
            ],
            'foreign_field' => 'parentid',
            'foreign_sortby' => 'sorting',
            'foreign_table' => 'tx_jsdmodule_akkordeon',
            'foreign_table_field' => 'parenttable',
            'minitems' => '1',
            'type' => 'inline',
        ],
        'l10n_mode' => 'copy',
        'exclude' => 1,
        'label' => 'LLL:EXT:jsd_module/Resources/Private/Language/locallang_db.xlf:tt_content.tx_jsdmodule_akkordeon',
    ],
    'tx_jsdmodule_bereichsteaser' => [
        'config' => [
            'appearance' => [
                'enabledControls' => [
                    'dragdrop' => '1',
                ],
                'levelLinksPosition' => 'top',
            ],
            'foreign_field' => 'parentid',
            'foreign_sortby' => 'sorting',
            'foreign_table' => 'tx_jsdmodule_bereichsteaser',
            'foreign_table_field' => 'parenttable',
            'maxitems' => '3',
            'minitems' => '3',
            'type' => 'inline',
        ],
        'l10n_mode' => 'copy',
        'exclude' => 1,
        'label' => 'LLL:EXT:jsd_module/Resources/Private/Language/locallang_db.xlf:tt_content.tx_jsdmodule_bereichsteaser',
    ],
    'tx_jsdmodule_bild_text_teaser' => [
        'config' => [
            'appearance' => [
                'enabledControls' => [
                    'dragdrop' => '1',
                ],
                'levelLinksPosition' => 'top',
            ],
            'foreign_field' => 'parentid',
            'foreign_sortby' => 'sorting',
            'foreign_table' => 'tx_jsdmodule_bild_text_teaser',
            'foreign_table_field' => 'parenttable',
            'type' => 'inline',
        ],
        'l10n_mode' => 'copy',
        'exclude' => 1,
        'label' => 'LLL:EXT:jsd_module/Resources/Private/Language/locallang_db.xlf:tt_content.tx_jsdmodule_bild_text_teaser',
    ],
    'tx_jsdmodule_bildergalerie' => [
        'config' => [
            'appearance' => [
                'enabledControls' => [
                    'dragdrop' => '1',
                ],
                'levelLinksPosition' => 'both',
            ],
            'foreign_field' => 'parentid',
            'foreign_sortby' => 'sorting',
            'foreign_table' => 'tx_jsdmodule_bildergalerie',
            'foreign_table_field' => 'parenttable',
            'maxitems' => '999',
            'minitems' => '1',
            'type' => 'inline',
        ],
        'l10n_mode' => 'copy',
        'exclude' => 1,
        'label' => 'LLL:EXT:jsd_module/Resources/Private/Language/locallang_db.xlf:tt_content.tx_jsdmodule_bildergalerie',
    ],
    'tx_jsdmodule_bilderkachel' => [
        'config' => [
            'appearance' => [
                'enabledControls' => [
                    'delete' => 1,
                    'dragdrop' => '1',
                    'hide' => 1,
                    'info' => 1,
                    'localize' => 1,
                    'new' => 1,
                    'sort' => 1,
                ],
                'levelLinksPosition' => 'both',
                'showAllLocalizationLink' => 1,
                'showNewRecordLink' => 1,
                'showPossibleLocalizationRecords' => 1,
                'useSortable' => 1,
            ],
            'foreign_field' => 'parentid',
            'foreign_sortby' => 'sorting',
            'foreign_table' => 'tx_jsdmodule_bilderkachel',
            'foreign_table_field' => 'parenttable',
            'minitems' => '1',
            'type' => 'inline',
        ],
        'l10n_mode' => 'copy',
        'exclude' => 1,
        'label' => 'LLL:EXT:jsd_module/Resources/Private/Language/locallang_db.xlf:tt_content.tx_jsdmodule_bilderkachel',
    ],
    'tx_jsdmodule_downloads' => [
        'config' => [
            'appearance' => [
                'enabledControls' => [
                    'dragdrop' => '1',
                ],
                'levelLinksPosition' => 'both',
            ],
            'foreign_field' => 'parentid',
            'foreign_sortby' => 'sorting',
            'foreign_table' => 'tx_jsdmodule_downloads',
            'foreign_table_field' => 'parenttable',
            'minitems' => '1',
            'type' => 'inline',
        ],
        'l10n_mode' => 'copy',
        'exclude' => 1,
        'label' => 'LLL:EXT:jsd_module/Resources/Private/Language/locallang_db.xlf:tt_content.tx_jsdmodule_downloads',
    ],
    'tx_jsdmodule_footer' => [
        'config' => [
            'appearance' => [
                'enabledControls' => [
                    'dragdrop' => '1',
                ],
                'levelLinksPosition' => 'top',
            ],
            'foreign_field' => 'parentid',
            'foreign_sortby' => 'sorting',
            'foreign_table' => 'tx_jsdmodule_footer',
            'foreign_table_field' => 'parenttable',
            'maxitems' => '1',
            'minitems' => '1',
            'type' => 'inline',
        ],
        'l10n_mode' => 'copy',
        'exclude' => 1,
        'label' => 'LLL:EXT:jsd_module/Resources/Private/Language/locallang_db.xlf:tt_content.tx_jsdmodule_footer',
    ],
    'tx_jsdmodule_highlight_teaser' => [
        'config' => [
            'appearance' => [
                'enabledControls' => [
                    'dragdrop' => '1',
                ],
                'levelLinksPosition' => 'top',
            ],
            'foreign_field' => 'parentid',
            'foreign_sortby' => 'sorting',
            'foreign_table' => 'tx_jsdmodule_highlight_teaser',
            'foreign_table_field' => 'parenttable',
            'maxitems' => '1',
            'minitems' => '1',
            'type' => 'inline',
        ],
        'l10n_mode' => 'copy',
        'exclude' => 1,
        'label' => 'LLL:EXT:jsd_module/Resources/Private/Language/locallang_db.xlf:tt_content.tx_jsdmodule_highlight_teaser',
    ],
    'tx_jsdmodule_image_slider' => [
        'config' => [
            'appearance' => [
                'enabledControls' => [
                    'dragdrop' => '1',
                ],
                'levelLinksPosition' => 'top',
            ],
            'foreign_field' => 'parentid',
            'foreign_sortby' => 'sorting',
            'foreign_table' => 'tx_jsdmodule_image_slider',
            'foreign_table_field' => 'parenttable',
            'minitems' => '1',
            'type' => 'inline',
        ],
        'l10n_mode' => 'copy',
        'exclude' => 1,
        'label' => 'LLL:EXT:jsd_module/Resources/Private/Language/locallang_db.xlf:tt_content.tx_jsdmodule_image_slider',
    ],
    'tx_jsdmodule_infobox' => [
        'config' => [
            'appearance' => [
                'collapseAll' => 1,
                'enabledControls' => [
                    'delete' => 1,
                    'dragdrop' => '1',
                    'hide' => 1,
                    'info' => 1,
                    'localize' => 1,
                    'new' => 1,
                    'sort' => 1,
                ],
                'levelLinksPosition' => 'both',
                'showAllLocalizationLink' => 1,
                'showNewRecordLink' => 1,
                'showPossibleLocalizationRecords' => 1,
                'useSortable' => 1,
            ],
            'foreign_field' => 'parentid',
            'foreign_sortby' => 'sorting',
            'foreign_table' => 'tx_jsdmodule_infobox',
            'foreign_table_field' => 'parenttable',
            'maxitems' => '10',
            'minitems' => '1',
            'type' => 'inline',
        ],
        'l10n_mode' => 'copy',
        'exclude' => 1,
        'label' => 'LLL:EXT:jsd_module/Resources/Private/Language/locallang_db.xlf:tt_content.tx_jsdmodule_infobox',
    ],
    'tx_jsdmodule_jsdmodgmapbvgyt' => [
        'config' => [
            'appearance' => [
                'enabledControls' => [
                    'dragdrop' => '1',
                ],
                'levelLinksPosition' => 'top',
            ],
            'foreign_field' => 'parentid',
            'foreign_sortby' => 'sorting',
            'foreign_table' => 'tx_jsdmodule_jsdmodgmapbvgyt',
            'foreign_table_field' => 'parenttable',
            'maxitems' => '99',
            'minitems' => '1',
            'type' => 'inline',
        ],
        'l10n_mode' => 'copy',
        'exclude' => 1,
        'label' => 'LLL:EXT:jsd_module/Resources/Private/Language/locallang_db.xlf:tt_content.tx_jsdmodule_jsdmodgmapbvgyt',
    ],
    'tx_jsdmodule_kontakt' => [
        'config' => [
            'appearance' => [
                'collapseAll' => 1,
                'enabledControls' => [
                    'delete' => 1,
                    'dragdrop' => '1',
                    'hide' => 1,
                    'info' => 1,
                    'localize' => 1,
                    'new' => 1,
                    'sort' => 1,
                ],
                'levelLinksPosition' => 'both',
                'showAllLocalizationLink' => 1,
                'showNewRecordLink' => 1,
                'showPossibleLocalizationRecords' => 1,
                'useSortable' => 1,
            ],
            'foreign_field' => 'parentid',
            'foreign_sortby' => 'sorting',
            'foreign_table' => 'tx_jsdmodule_kontakt',
            'foreign_table_field' => 'parenttable',
            'maxitems' => '5',
            'type' => 'inline',
        ],
        'l10n_mode' => 'copy',
        'exclude' => 1,
        'label' => 'LLL:EXT:jsd_module/Resources/Private/Language/locallang_db.xlf:tt_content.tx_jsdmodule_kontakt',
    ],
    'tx_jsdmodule_leichtsprache' => [
        'config' => [
            'appearance' => [
                'collapseAll' => 1,
                'enabledControls' => [
                    'delete' => 1,
                    'dragdrop' => '1',
                    'hide' => 1,
                    'info' => 1,
                    'localize' => 1,
                    'new' => 1,
                    'sort' => 1,
                ],
                'levelLinksPosition' => 'both',
                'showAllLocalizationLink' => 1,
                'showNewRecordLink' => 1,
                'showPossibleLocalizationRecords' => 1,
                'useSortable' => 1,
            ],
            'foreign_field' => 'parentid',
            'foreign_sortby' => 'sorting',
            'foreign_table' => 'tx_jsdmodule_leichtsprache',
            'foreign_table_field' => 'parenttable',
            'minitems' => '1',
            'type' => 'inline',
        ],
        'l10n_mode' => 'copy',
        'exclude' => 1,
        'label' => 'LLL:EXT:jsd_module/Resources/Private/Language/locallang_db.xlf:tt_content.tx_jsdmodule_leichtsprache',
    ],
    'tx_jsdmodule_leistungen' => [
        'config' => [
            'appearance' => [
                'enabledControls' => [
                    'dragdrop' => '1',
                ],
                'levelLinksPosition' => 'both',
            ],
            'foreign_field' => 'parentid',
            'foreign_sortby' => 'sorting',
            'foreign_table' => 'tx_jsdmodule_leistungen',
            'foreign_table_field' => 'parenttable',
            'maxitems' => '8',
            'minitems' => '1',
            'type' => 'inline',
        ],
        'l10n_mode' => 'copy',
        'exclude' => 1,
        'label' => 'LLL:EXT:jsd_module/Resources/Private/Language/locallang_db.xlf:tt_content.tx_jsdmodule_leistungen',
    ],
    'tx_jsdmodule_leitbilder' => [
        'config' => [
            'appearance' => [
                'enabledControls' => [
                    'dragdrop' => '1',
                ],
                'levelLinksPosition' => 'top',
            ],
            'foreign_field' => 'parentid',
            'foreign_sortby' => 'sorting',
            'foreign_table' => 'tx_jsdmodule_leitbilder',
            'foreign_table_field' => 'parenttable',
            'maxitems' => '8',
            'minitems' => '1',
            'type' => 'inline',
        ],
        'l10n_mode' => 'copy',
        'exclude' => 1,
        'label' => 'LLL:EXT:jsd_module/Resources/Private/Language/locallang_db.xlf:tt_content.tx_jsdmodule_leitbilder',
    ],
    'tx_jsdmodule_linkliste' => [
        'config' => [
            'appearance' => [
                'enabledControls' => [
                    'dragdrop' => '1',
                ],
                'levelLinksPosition' => 'top',
            ],
            'foreign_field' => 'parentid',
            'foreign_sortby' => 'sorting',
            'foreign_table' => 'tx_jsdmodule_linkliste',
            'foreign_table_field' => 'parenttable',
            'maxitems' => '20',
            'minitems' => '1',
            'type' => 'inline',
        ],
        'l10n_mode' => 'copy',
        'exclude' => 1,
        'label' => 'LLL:EXT:jsd_module/Resources/Private/Language/locallang_db.xlf:tt_content.tx_jsdmodule_linkliste',
    ],
    'tx_jsdmodule_navigation' => [
        'config' => [
            'appearance' => [
                'enabledControls' => [
                    'delete' => 1,
                    'dragdrop' => '1',
                    'hide' => 1,
                    'info' => 1,
                    'localize' => 1,
                    'new' => 1,
                    'sort' => 1,
                ],
                'levelLinksPosition' => 'top',
                'showAllLocalizationLink' => 1,
                'showNewRecordLink' => 1,
                'showPossibleLocalizationRecords' => 1,
                'useSortable' => 1,
            ],
            'foreign_field' => 'parentid',
            'foreign_sortby' => 'sorting',
            'foreign_table' => 'tx_jsdmodule_navigation',
            'foreign_table_field' => 'parenttable',
            'maxitems' => '1',
            'type' => 'inline',
        ],
        'l10n_mode' => 'copy',
        'exclude' => 1,
        'label' => 'LLL:EXT:jsd_module/Resources/Private/Language/locallang_db.xlf:tt_content.tx_jsdmodule_navigation',
    ],
    'tx_jsdmodule_options' => [
        'config' => [
            'items' => [
                [
                    'LLL:EXT:jsd_module/Resources/Private/Language/locallang_db.xlf:tt_content.tx_jsdmodule_options.I.0',
                    '1',
                    '',
                    '',
                ],
                [
                    'LLL:EXT:jsd_module/Resources/Private/Language/locallang_db.xlf:tt_content.tx_jsdmodule_options.I.1',
                    '2',
                    '',
                    '',
                ],
            ],
            'renderType' => 'selectSingle',
            'type' => 'select',
        ],
        'exclude' => 1,
        'label' => 'LLL:EXT:jsd_module/Resources/Private/Language/locallang_db.xlf:tt_content.tx_jsdmodule_options',
    ],
    'tx_jsdmodule_schnellzugriffsteaser' => [
        'config' => [
            'appearance' => [
                'enabledControls' => [
                    'dragdrop' => '1',
                ],
                'levelLinksPosition' => 'top',
            ],
            'foreign_field' => 'parentid',
            'foreign_sortby' => 'sorting',
            'foreign_table' => 'tx_jsdmodule_schnellzugriffsteaser',
            'foreign_table_field' => 'parenttable',
            'maxitems' => '2',
            'minitems' => '1',
            'type' => 'inline',
        ],
        'l10n_mode' => 'copy',
        'exclude' => 1,
        'label' => 'LLL:EXT:jsd_module/Resources/Private/Language/locallang_db.xlf:tt_content.tx_jsdmodule_schnellzugriffsteaser',
    ],
    'tx_jsdmodule_teaser' => [
        'config' => [
            'appearance' => [
                'enabledControls' => [
                    'dragdrop' => '1',
                ],
                'levelLinksPosition' => 'top',
            ],
            'foreign_field' => 'parentid',
            'foreign_sortby' => 'sorting',
            'foreign_table' => 'tx_jsdmodule_teaser',
            'foreign_table_field' => 'parenttable',
            'maxitems' => '999',
            'type' => 'inline',
        ],
        'l10n_mode' => 'copy',
        'exclude' => 1,
        'label' => 'LLL:EXT:jsd_module/Resources/Private/Language/locallang_db.xlf:tt_content.tx_jsdmodule_teaser',
    ],
    'tx_jsdmodule_zahltext' => [
        'config' => [
            'appearance' => [
                'enabledControls' => [
                    'dragdrop' => '1',
                ],
                'levelLinksPosition' => 'top',
            ],
            'foreign_field' => 'parentid',
            'foreign_sortby' => 'sorting',
            'foreign_table' => 'tx_jsdmodule_zahltext',
            'foreign_table_field' => 'parenttable',
            'type' => 'inline',
        ],
        'l10n_mode' => 'copy',
        'exclude' => 1,
        'label' => 'LLL:EXT:jsd_module/Resources/Private/Language/locallang_db.xlf:tt_content.tx_jsdmodule_zahltext',
    ],
    'tx_jsdmodule_zitattext' => [
        'config' => [
            'appearance' => [
                'collapseAll' => 1,
                'enabledControls' => [
                    'delete' => 1,
                    'dragdrop' => '1',
                    'hide' => 1,
                    'info' => 1,
                    'localize' => 1,
                    'new' => 1,
                    'sort' => 1,
                ],
                'levelLinksPosition' => 'top',
                'showAllLocalizationLink' => 1,
                'showNewRecordLink' => 1,
                'showPossibleLocalizationRecords' => 1,
                'useSortable' => 1,
            ],
            'foreign_field' => 'parentid',
            'foreign_sortby' => 'sorting',
            'foreign_table' => 'tx_jsdmodule_zitattext',
            'foreign_table_field' => 'parenttable',
            'maxitems' => '1',
            'type' => 'inline',
        ],
        'l10n_mode' => 'copy',
        'exclude' => 1,
        'label' => 'LLL:EXT:jsd_module/Resources/Private/Language/locallang_db.xlf:tt_content.tx_jsdmodule_zitattext',
    ],
];
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $tempColumns);
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'LLL:EXT:jsd_module/Resources/Private/Language/locallang_db.xlf:tt_content.CType.div._jsdmodule_',
    '--div--',
];
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'LLL:EXT:jsd_module/Resources/Private/Language/locallang_db.xlf:tt_content.CType.jsdmodule_jsdmod3erteaser',
    'jsdmodule_jsdmod3erteaser',
    'tx_jsdmodule_jsdmod3erteaser',
];
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'LLL:EXT:jsd_module/Resources/Private/Language/locallang_db.xlf:tt_content.CType.jsdmodule_jsdmodakkordeon',
    'jsdmodule_jsdmodakkordeon',
    'tx_jsdmodule_jsdmodakkordeon',
];
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'LLL:EXT:jsd_module/Resources/Private/Language/locallang_db.xlf:tt_content.CType.jsdmodule_jsdmodankerliste',
    'jsdmodule_jsdmodankerliste',
    'tx_jsdmodule_jsdmodankerliste',
];
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'LLL:EXT:jsd_module/Resources/Private/Language/locallang_db.xlf:tt_content.CType.jsdmodule_jsdmodbereichsteaser',
    'jsdmodule_jsdmodbereichsteaser',
    'tx_jsdmodule_jsdmodbereichsteaser',
];
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'LLL:EXT:jsd_module/Resources/Private/Language/locallang_db.xlf:tt_content.CType.jsdmodule_jsdmodbildergalerie',
    'jsdmodule_jsdmodbildergalerie',
    'tx_jsdmodule_jsdmodbildergalerie',
];
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'LLL:EXT:jsd_module/Resources/Private/Language/locallang_db.xlf:tt_content.CType.jsdmodule_jsdmodbilderkachel',
    'jsdmodule_jsdmodbilderkachel',
    'tx_jsdmodule_jsdmodbilderkachel',
];
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'LLL:EXT:jsd_module/Resources/Private/Language/locallang_db.xlf:tt_content.CType.jsdmodule_jsdmodbildslider',
    'jsdmodule_jsdmodbildslider',
    'tx_jsdmodule_jsdmodbildslider',
];
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'LLL:EXT:jsd_module/Resources/Private/Language/locallang_db.xlf:tt_content.CType.jsdmodule_jsdmodbildtextteaser',
    'jsdmodule_jsdmodbildtextteaser',
    'tx_jsdmodule_jsdmodbildtextteaser',
];
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'LLL:EXT:jsd_module/Resources/Private/Language/locallang_db.xlf:tt_content.CType.jsdmodule_jsdmodbuehnedetailseite',
    'jsdmodule_jsdmodbuehnedetailseite',
    'tx_jsdmodule_jsdmodbuehnedetailseite',
];
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'LLL:EXT:jsd_module/Resources/Private/Language/locallang_db.xlf:tt_content.CType.jsdmodule_jsdmoddownload',
    'jsdmodule_jsdmoddownload',
    'tx_jsdmodule_jsdmoddownload',
];
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'LLL:EXT:jsd_module/Resources/Private/Language/locallang_db.xlf:tt_content.CType.jsdmodule_jsdmodfooter',
    'jsdmodule_jsdmodfooter',
    'tx_jsdmodule_jsdmodfooter',
];
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'LLL:EXT:jsd_module/Resources/Private/Language/locallang_db.xlf:tt_content.CType.jsdmodule_jsdmodgmapbvgyoutube',
    'jsdmodule_jsdmodgmapbvgyoutube',
    'tx_jsdmodule_jsdmodgmapbvgyoutube',
];
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'LLL:EXT:jsd_module/Resources/Private/Language/locallang_db.xlf:tt_content.CType.jsdmodule_jsdmodhighlightteaser',
    'jsdmodule_jsdmodhighlightteaser',
    'tx_jsdmodule_jsdmodhighlightteaser',
];
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'LLL:EXT:jsd_module/Resources/Private/Language/locallang_db.xlf:tt_content.CType.jsdmodule_jsdmodinfobox',
    'jsdmodule_jsdmodinfobox',
    'tx_jsdmodule_jsdmodinfobox',
];
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'LLL:EXT:jsd_module/Resources/Private/Language/locallang_db.xlf:tt_content.CType.jsdmodule_jsdmodkontakt',
    'jsdmodule_jsdmodkontakt',
    'tx_jsdmodule_jsdmodkontakt',
];
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'LLL:EXT:jsd_module/Resources/Private/Language/locallang_db.xlf:tt_content.CType.jsdmodule_jsdmodleistungen',
    'jsdmodule_jsdmodleistungen',
    'tx_jsdmodule_jsdmodleistungen',
];
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'LLL:EXT:jsd_module/Resources/Private/Language/locallang_db.xlf:tt_content.CType.jsdmodule_jsdmodlinkliste',
    'jsdmodule_jsdmodlinkliste',
    'tx_jsdmodule_jsdmodlinkliste',
];
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'LLL:EXT:jsd_module/Resources/Private/Language/locallang_db.xlf:tt_content.CType.jsdmodule_jsdmodnavigation',
    'jsdmodule_jsdmodnavigation',
    'tx_jsdmodule_jsdmodnavigation',
];
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'LLL:EXT:jsd_module/Resources/Private/Language/locallang_db.xlf:tt_content.CType.jsdmodule_jsdmodschnellzugriffsteaser',
    'jsdmodule_jsdmodschnellzugriffsteaser',
    'tx_jsdmodule_jsdmodschnellzugriffsteaser',
];
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'LLL:EXT:jsd_module/Resources/Private/Language/locallang_db.xlf:tt_content.CType.jsdmodule_jsdmodseointrotext',
    'jsdmodule_jsdmodseointrotext',
    'tx_jsdmodule_jsdmodseointrotext',
];
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'LLL:EXT:jsd_module/Resources/Private/Language/locallang_db.xlf:tt_content.CType.jsdmodule_jsdmodsimplespeak',
    'jsdmodule_jsdmodsimplespeak',
    'tx_jsdmodule_jsdmodsimplespeak',
];
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'LLL:EXT:jsd_module/Resources/Private/Language/locallang_db.xlf:tt_content.CType.jsdmodule_jsdmodzahltext',
    'jsdmodule_jsdmodzahltext',
    'tx_jsdmodule_jsdmodzahltext',
];
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'LLL:EXT:jsd_module/Resources/Private/Language/locallang_db.xlf:tt_content.CType.jsdmodule_jsdmodzitattext',
    'jsdmodule_jsdmodzitattext',
    'tx_jsdmodule_jsdmodzitattext',
];
$tempTypes = [
    'jsdmodule_jsdmod3erteaser' => [
        'columnsOverrides' => [
            'tx_jsdmodule_teaser' => [
                'label' => '3-er-Teaser oder Fakten:',
            ],
        ],
        'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,header,header_layout,tx_jsdmodule_teaser,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
    ],
    'jsdmodule_jsdmodakkordeon' => [
        'columnsOverrides' => [
            'tx_jsdmodule_akkordeon' => [
                'label' => 'Akkordeon Elemente:',
            ],
        ],
        'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,header,header_layout,tx_jsdmodule_akkordeon,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
    ],
    'jsdmodule_jsdmodankerliste' => [
        'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,header,header_layout,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
    ],
    'jsdmodule_jsdmodbereichsteaser' => [
        'columnsOverrides' => [
            'tx_jsdmodule_bereichsteaser' => [
                'label' => 'Bereichsteaser:',
            ],
        ],
        'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,header,header_layout,tx_jsdmodule_bereichsteaser,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
    ],
    'jsdmodule_jsdmodbildergalerie' => [
        'columnsOverrides' => [
            'tx_jsdmodule_options' => [
                'label' => 'Anzeigeoption:',
            ],
            'tx_jsdmodule_bildergalerie' => [
                'label' => 'Bildergalerie:',
            ],
        ],
        'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,header,header_layout,tx_jsdmodule_options,tx_jsdmodule_bildergalerie,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
    ],
    'jsdmodule_jsdmodbilderkachel' => [
        'columnsOverrides' => [
            'tx_jsdmodule_bilderkachel' => [
                'label' => 'Bilder-Kacheln:',
            ],
        ],
        'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,header,header_layout,header_link,subheader,tx_jsdmodule_bilderkachel,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
    ],
    'jsdmodule_jsdmodbildslider' => [
        'columnsOverrides' => [
            'tx_jsdmodule_image_slider' => [
                'label' => 'Bild Slider:',
            ],
        ],
        'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,header,header_layout,tx_jsdmodule_image_slider,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
    ],
    'jsdmodule_jsdmodbildtextteaser' => [
        'columnsOverrides' => [
            'tx_jsdmodule_bild_text_teaser' => [
                'label' => 'Bild-Text-Teaser:',
            ],
        ],
        'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,header,header_layout,tx_jsdmodule_bild_text_teaser,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
    ],
    'jsdmodule_jsdmodbuehnedetailseite' => [
        'columnsOverrides' => [
            'subheader' => [
                'label' => 'Youtube Video-ID (hinter v=):',
            ],
            'bodytext' => [
                'config' => [
                    'enableRichtext' => 1,
                ],
            ],
        ],
        'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,header,header_layout,bodytext,image,subheader,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
    ],
    'jsdmodule_jsdmoddownload' => [
        'columnsOverrides' => [
            'tx_jsdmodule_downloads' => [
                'label' => 'Dateien:',
            ],
        ],
        'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,header,header_layout,tx_jsdmodule_downloads,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
    ],
    'jsdmodule_jsdmodfooter' => [
        'columnsOverrides' => [
            'tx_jsdmodule_footer' => [
                'label' => 'Footer Element (Global):',
            ],
        ],
        'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,header,header_layout,tx_jsdmodule_footer,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
    ],
    'jsdmodule_jsdmodgmapbvgyoutube' => [
        'columnsOverrides' => [
            'tx_jsdmodule_jsdmodgmapbvgyt' => [
                'label' => 'Neues Element anlegen:',
            ],
        ],
        'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,header,header_layout,tx_jsdmodule_jsdmodgmapbvgyt,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
    ],
    'jsdmodule_jsdmodhighlightteaser' => [
        'columnsOverrides' => [
            'tx_jsdmodule_highlight_teaser' => [
                'label' => 'Highlight-Teaser:',
            ],
        ],
        'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,header,header_layout,tx_jsdmodule_highlight_teaser,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
    ],
    'jsdmodule_jsdmodinfobox' => [
        'columnsOverrides' => [
            'tx_jsdmodule_infobox' => [
                'label' => 'Vorteile:',
            ],
        ],
        'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,header,header_layout,tx_jsdmodule_infobox,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
    ],
    'jsdmodule_jsdmodkontakt' => [
        'columnsOverrides' => [
            'tx_jsdmodule_kontakt' => [
                'label' => 'Kontakt-Boxen:',
            ],
        ],
        'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,header,header_layout,image,tx_jsdmodule_kontakt,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
    ],
    'jsdmodule_jsdmodleistungen' => [
        'columnsOverrides' => [
            'header_link' => [
                'label' => 'CTA-Button:',
            ],
            'subheader' => [
                'label' => 'Link-Titel:',
            ],
            'tx_jsdmodule_leistungen' => [
                'label' => 'Leistungen:',
            ],
        ],
        'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,header,header_layout,header_link,subheader,tx_jsdmodule_leistungen,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
    ],
    'jsdmodule_jsdmodlinkliste' => [
        'columnsOverrides' => [
            'tx_jsdmodule_linkliste' => [
                'label' => 'Linkliste:',
            ],
        ],
        'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,header,subheader,header_link,tx_jsdmodule_linkliste,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
    ],
    'jsdmodule_jsdmodnavigation' => [
        'columnsOverrides' => [
            'tx_jsdmodule_navigation' => [
                'label' => 'Navigation Header (global):',
            ],
        ],
        'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,header,tx_jsdmodule_navigation,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
    ],
    'jsdmodule_jsdmodschnellzugriffsteaser' => [
        'columnsOverrides' => [
            'tx_jsdmodule_schnellzugriffsteaser' => [
                'label' => 'Schnellzugriffsteaser:',
            ],
        ],
        'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,header,header_layout,tx_jsdmodule_schnellzugriffsteaser,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
    ],
    'jsdmodule_jsdmodseointrotext' => [
        'columnsOverrides' => [
            'bodytext' => [
                'config' => [
                    'enableRichtext' => 1,
                ],
            ],
        ],
        'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,header,header_layout,bodytext,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
    ],
    'jsdmodule_jsdmodsimplespeak' => [
        'columnsOverrides' => [
            'tx_jsdmodule_leichtsprache' => [
                'label' => 'Leichte Sprache Elemente:',
            ],
        ],
        'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,header,tx_jsdmodule_leichtsprache,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
    ],
    'jsdmodule_jsdmodzahltext' => [
        'columnsOverrides' => [
            'bodytext' => [
                'config' => [
                    'enableRichtext' => 1,
                ],
            ],
        ],
        'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,header,header_layout,bodytext,tx_jsdmodule_zahltext,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
    ],
    'jsdmodule_jsdmodzitattext' => [
        'columnsOverrides' => [
            'header' => [
                'label' => 'Überschrift:',
            ],
            'header_layout' => [
                'label' => 'Typ:',
            ],
            'tx_jsdmodule_zitattext' => [
                'label' => 'Zitat und Text:',
            ],
        ],
        'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,header,header_layout,tx_jsdmodule_zitattext,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
    ],
];
$GLOBALS['TCA']['tt_content']['types'] += $tempTypes;
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'jsd_module',
    'Configuration/TypoScript/',
    'jsd_module'
);

});

