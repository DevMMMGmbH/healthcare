<?php

/***************************************************************
 * Extension Manager/Repository config file for ext: "jsd_theme"
 *
 *
 * Manual updates:
 * Only the data in the array - anything else is removed by next write.
 * "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = [
    'title' => 'JDI Theme',
    'description' => 'Basic Theme for this Page',
    'category' => 'templates',
    'author' => 'Robert heyduck',
    'author_email' => 'mail@typo-script.de',
    'state' => 'beta',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.0-11.5.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
    'autoload' => [
        'psr-4' => [
            'JSD\\JsdTheme\\' => 'Classes',
        ],
    ],
];
