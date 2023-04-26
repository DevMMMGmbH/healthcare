<?php

defined('TYPO3_MODE') || die();

/***************
 * RTE
 */
$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['jsdtheme'] = 'EXT:jsd_theme/Configuration/TsConfig/Page/Rte.yaml';

/***************
 * PageTS
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('
    <INCLUDE_TYPOSCRIPT: source="FILE:EXT:jsd_theme/Configuration/TsConfig/Page/All.tsconfig">
');

/***************
 * Custom Form Element Icon
 */
if (TYPO3_MODE === 'BE') {
    /** @var \TYPO3\CMS\Core\Imaging\IconRegistry $iconRegistry */
    $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
    $iconRegistry->registerIcon(
        'CustomDsgvoCheckbox-icon',
        \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
        ['source' => 'EXT:jsd_theme/Resources/Public/Icons/CustomDsgvoCheckbox-icon.svg']
    );
}