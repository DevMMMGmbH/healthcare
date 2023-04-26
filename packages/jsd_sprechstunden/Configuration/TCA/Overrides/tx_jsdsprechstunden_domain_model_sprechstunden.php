<?php

declare(strict_types=1);

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') || die();

ExtensionManagementUtility::makeCategorizable(
    'jsd_sprechstunden',
    'tx_jsdsprechstunden_domain_model_sprechstunden'
);
