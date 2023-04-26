<?php

declare(strict_types=1);

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();
// Add some fields to FE Users table to show TCA fields definitions
// USAGE: TCA Reference > $GLOBALS['TCA'] array reference > ['columns'][fieldname]['config'] / TYPE: "select"
$temporaryColumns = [
    'type' => [
        'exclude' => true,
        'label' => 'Art der Region',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [['', 0], ['Stadt', 1], ['Bezirk oder Lankreis', 2], ['Bundesland', 3]],
            'size' => 1,
            'maxitems' => 1,
            'eval' => 'required',
        ],
    ],
];

ExtensionManagementUtility::addTCAcolumns('tx_jsdmodeinrichtungen_domain_model_locations', $temporaryColumns);
