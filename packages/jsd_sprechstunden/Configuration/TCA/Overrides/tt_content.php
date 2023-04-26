<?php

declare(strict_types=1);

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

call_user_func(function () {

    // hide TCA fields in content element or plugin
    $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist']['jsdsprechstunden_sprechstunden'] = 'select_key,recursive,pages';
    $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['jsdsprechstunden_sprechstunden'] = 'pi_flexform';
    ExtensionManagementUtility::addPiFlexFormValue(
        'jsdsprechstunden_sprechstunden',
        'FILE:EXT:jsd_sprechstunden/Configuration/FlexForms/ff_sprechstunden.xml'
    );
});
