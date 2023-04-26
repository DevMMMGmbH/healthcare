<?php
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;
use JSD\JsdModeinrichtungen\Controller\InstitutionsController;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider;

defined('TYPO3') || die('Access denied.');

call_user_func(
    function () {
        ExtensionUtility::configurePlugin(
            'JsdModeinrichtungen',
            'Teaser',
            [InstitutionsController::class => 'teaser',],
            // non-cacheable actions
            [InstitutionsController::class => '',]
        );

        // wizards
        ExtensionManagementUtility::addPageTSConfig(
            'mod {
                wizards.newContentElement.wizardItems.plugins {
                    elements {
                        teaser {
                            iconIdentifier = jsd_modeinrichtungen-plugin-teaser
                            title = LLL:EXT:jsd_modeinrichtungen/Resources/Private/Language/locallang_db.xlf:tx_jsd_modeinrichtungen_teaser.name
                            description = LLL:EXT:jsd_modeinrichtungen/Resources/Private/Language/locallang_db.xlf:tx_jsd_modeinrichtungen_teaser.description
                            tt_content_defValues {
                                CType = list
                                list_type = jsdmodeinrichtungen_teaser
                            }
                        }
                    }
                    show = *
                }
            }'
        );

        $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);

        $iconRegistry->registerIcon(
            'jsd_modeinrichtungen-plugin-teaser',
            SvgIconProvider::class,
            [
                'source' => 'EXT:jsd_modeinrichtungen/Resources/Public/Icons/user_plugin_teaser.svg',
            ]
        );

    }

);
