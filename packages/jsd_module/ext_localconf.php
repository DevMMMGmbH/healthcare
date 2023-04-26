<?php
defined('TYPO3_MODE') || die();

call_user_func(static function () {

// Register content element icons
$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
$iconRegistry->registerIcon(
    'tx_jsdmodule_jsdmod3erteaser',
    \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
    [
        'source' => 'EXT:jsd_module/Resources/Public/Icons/Content/jsdmod3erteaser.svg',
    ]
);
$iconRegistry->registerIcon(
    'tx_jsdmodule_jsdmodakkordeon',
    \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
    [
        'source' => 'EXT:jsd_module/Resources/Public/Icons/Content/jsdmodakkordeon.svg',
    ]
);
$iconRegistry->registerIcon(
    'tx_jsdmodule_jsdmodankerliste',
    \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
    [
        'source' => 'EXT:jsd_module/Resources/Public/Icons/Content/jsdmodankerliste.svg',
    ]
);
$iconRegistry->registerIcon(
    'tx_jsdmodule_jsdmodbereichsteaser',
    \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
    [
        'source' => 'EXT:jsd_module/Resources/Public/Icons/Content/jsdmodbereichsteaser.svg',
    ]
);
$iconRegistry->registerIcon(
    'tx_jsdmodule_jsdmodbildergalerie',
    \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
    [
        'source' => 'EXT:jsd_module/Resources/Public/Icons/Content/jsdmodbildergalerie.svg',
    ]
);
$iconRegistry->registerIcon(
    'tx_jsdmodule_jsdmodbilderkachel',
    \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
    [
        'source' => 'EXT:jsd_module/Resources/Public/Icons/Content/jsdmodbilderkachel.svg',
    ]
);
$iconRegistry->registerIcon(
    'tx_jsdmodule_jsdmodbildslider',
    \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
    [
        'source' => 'EXT:jsd_module/Resources/Public/Icons/Content/jsdmodbildslider.svg',
    ]
);
$iconRegistry->registerIcon(
    'tx_jsdmodule_jsdmodbildtextteaser',
    \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
    [
        'source' => 'EXT:jsd_module/Resources/Public/Icons/Content/jsdmodbildtextteaser.svg',
    ]
);
$iconRegistry->registerIcon(
    'tx_jsdmodule_jsdmodbuehnedetailseite',
    \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
    [
        'source' => 'EXT:jsd_module/Resources/Public/Icons/Content/jsdmodbuehnedetailseite.svg',
    ]
);
$iconRegistry->registerIcon(
    'tx_jsdmodule_jsdmoddownload',
    \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
    [
        'source' => 'EXT:jsd_module/Resources/Public/Icons/Content/jsdmoddownload.svg',
    ]
);
$iconRegistry->registerIcon(
    'tx_jsdmodule_jsdmodfooter',
    \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
    [
        'source' => 'EXT:jsd_module/Resources/Public/Icons/Content/jsdmodfooter.svg',
    ]
);
$iconRegistry->registerIcon(
    'tx_jsdmodule_jsdmodgmapbvgyoutube',
    \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
    [
        'source' => 'EXT:jsd_module/Resources/Public/Icons/Content/jsdmodgmapbvgyoutube.svg',
    ]
);
$iconRegistry->registerIcon(
    'tx_jsdmodule_jsdmodhighlightteaser',
    \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
    [
        'source' => 'EXT:jsd_module/Resources/Public/Icons/Content/jsdmodhighlightteaser.svg',
    ]
);
$iconRegistry->registerIcon(
    'tx_jsdmodule_jsdmodinfobox',
    \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
    [
        'source' => 'EXT:jsd_module/Resources/Public/Icons/Content/jsdmodinfobox.svg',
    ]
);
$iconRegistry->registerIcon(
    'tx_jsdmodule_jsdmodkontakt',
    \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
    [
        'source' => 'EXT:jsd_module/Resources/Public/Icons/Content/jsdmodkontakt.svg',
    ]
);
$iconRegistry->registerIcon(
    'tx_jsdmodule_jsdmodleistungen',
    \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
    [
        'source' => 'EXT:jsd_module/Resources/Public/Icons/Content/jsdmodleistungen.svg',
    ]
);
$iconRegistry->registerIcon(
    'tx_jsdmodule_jsdmodlinkliste',
    \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
    [
        'source' => 'EXT:jsd_module/Resources/Public/Icons/Content/jsdmodlinkliste.svg',
    ]
);
$iconRegistry->registerIcon(
    'tx_jsdmodule_jsdmodnavigation',
    \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
    [
        'source' => 'EXT:jsd_module/Resources/Public/Icons/Content/jsdmodnavigation.svg',
    ]
);
$iconRegistry->registerIcon(
    'tx_jsdmodule_jsdmodschnellzugriffsteaser',
    \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
    [
        'source' => 'EXT:jsd_module/Resources/Public/Icons/Content/jsdmodschnellzugriffsteaser.svg',
    ]
);
$iconRegistry->registerIcon(
    'tx_jsdmodule_jsdmodseointrotext',
    \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
    [
        'source' => 'EXT:jsd_module/Resources/Public/Icons/Content/jsdmodseointrotext.svg',
    ]
);
$iconRegistry->registerIcon(
    'tx_jsdmodule_jsdmodsimplespeak',
    \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
    [
        'source' => 'EXT:jsd_module/Resources/Public/Icons/Content/jsdmodsimplespeak.svg',
    ]
);
$iconRegistry->registerIcon(
    'tx_jsdmodule_jsdmodzahltext',
    \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
    [
        'source' => 'EXT:jsd_module/Resources/Public/Icons/Content/jsdmodzahltext.svg',
    ]
);
$iconRegistry->registerIcon(
    'tx_jsdmodule_jsdmodzitattext',
    \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
    [
        'source' => 'EXT:jsd_module/Resources/Public/Icons/Content/jsdmodzitattext.svg',
    ]
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:jsd_module/Configuration/TsConfig/Page/NewContentElementWizard.tsconfig">'
);
$GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['formDataGroup']['tcaDatabaseRecord'][\JsdModule\JsdModule\Form\FormDataProvider\TcaColPosItem::class] = [
    'depends' => [
        \TYPO3\CMS\Backend\Form\FormDataProvider\DatabaseRowDefaultValues::class,
    ],
    'before' => [
        \TYPO3\CMS\Backend\Form\FormDataProvider\TcaSelectItems::class,
    ],
];
$GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['formDataGroup']['tcaDatabaseRecord'][\JsdModule\JsdModule\Form\FormDataProvider\TcaCTypeItem::class] = [
    'depends' => [
        \TYPO3\CMS\Backend\Form\FormDataProvider\TcaSelectItems::class,
    ],
];
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:jsd_module/Configuration/TsConfig/Page/BackendPreview.tsconfig">'
);
// Add backend preview hook
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/class.tx_cms_layout.php']['tt_content_drawItem']['jsd_module'] = 
    JsdModule\JsdModule\Hooks\PageLayoutViewDrawItem::class;

});

