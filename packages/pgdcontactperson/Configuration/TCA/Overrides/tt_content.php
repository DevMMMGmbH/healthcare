<?php

declare(strict_types=1);

use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

// Prevent script from being called directly
defined('TYPO3') or die();

(static function () {
    ExtensionUtility::registerPlugin('Pgdcontactperson', 'Contactperson', 'Modul: Kontaktperson');
})();
