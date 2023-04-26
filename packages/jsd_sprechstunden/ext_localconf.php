<?php

defined('TYPO3') || die('Access denied.');

call_user_func(
    function () {
        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'JsdSprechstunden',
            'Sprechstunden',
            [
                \RobertHeyduck\JsdSprechstunden\Controller\SprechstundenController::class => 'list',
            ],
            // non-cacheable actions
            [
                \RobertHeyduck\JsdSprechstunden\Controller\SprechstundenController::class => '',
            ]
        );

        // wizards
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
            'mod {
                wizards.newContentElement.wizardItems.plugins {
                    elements {
                        sprechstunden {
                            iconIdentifier = jsd_sprechstunden-plugin-sprechstunden
                            title = LLL:EXT:jsd_sprechstunden/Resources/Private/Language/locallang_db.xlf:tx_jsd_sprechstunden_sprechstunden.name
                            description = LLL:EXT:jsd_sprechstunden/Resources/Private/Language/locallang_db.xlf:tx_jsd_sprechstunden_sprechstunden.description
                            tt_content_defValues {
                                CType = list
                                list_type = jsdsprechstunden_sprechstunden
                            }
                        }
                    }
                    show = *
                }
           }'
        );
        $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);

        $iconRegistry->registerIcon(
            'jsd_sprechstunden-plugin-sprechstunden',
            \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
            [
                'source' => 'EXT:jsd_sprechstunden/Resources/Public/Icons/user_plugin_sprechstunden.svg',
            ]
        );
    }
);
