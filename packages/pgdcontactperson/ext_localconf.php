<?php

defined('TYPO3') || die('Access denied.');

call_user_func(
    function () {
        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Pgdcontactperson',
            'Contactperson',
            [
                \ImkenLeibrock\Pgdcontactperson\Controller\ContactpersonController::class => 'list, show',
            ],
            // non-cacheable actions
            [
                \ImkenLeibrock\Pgdcontactperson\Controller\ContactpersonController::class => '',
            ]
        );

        // wizards
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
            'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    contactperson {
                        iconIdentifier = pgdcontactperson-plugin-contactperson
                        title = LLL:EXT:pgdcontactperson/Resources/Private/Language/locallang_db.xlf:tx_pgdcontactperson_contactperson.name
                        description = LLL:EXT:pgdcontactperson/Resources/Private/Language/locallang_db.xlf:tx_pgdcontactperson_contactperson.description
                        tt_content_defValues {
                            CType = list
                            list_type = pgdcontactperson_contactperson
                        }
                    }
                }
                show = *
            }
       }'
        );
        $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);

        $iconRegistry->registerIcon(
            'pgdcontactperson-plugin-contactperson',
            \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
            [
                'source' => 'EXT:pgdcontactperson/Resources/Public/Icons/user_plugin_contactperson.svg',
            ]
        );
    }
);
