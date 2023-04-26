
plugin.tx_jsdmodeinrichtungen_teaser {
    view {
        templateRootPaths.0 = EXT:{extension.extensionKey}/Resources/Private/Templates/
        templateRootPaths.1 = {$plugin.tx_jsdmodeinrichtungen_teaser.view.templateRootPath}
        partialRootPaths.0 = EXT:jsd_modeinrichtungen/Resources/Private/Partials/
        partialRootPaths.1 = {$plugin.tx_jsdmodeinrichtungen_teaser.view.partialRootPath}
        layoutRootPaths.0 = EXT:jsd_modeinrichtungen/Resources/Private/Layouts/
        layoutRootPaths.1 = {$plugin.tx_jsdmodeinrichtungen_teaser.view.layoutRootPath}
    }
    persistence {
        // storagePid = {$plugin.tx_jsdmodeinrichtungen_teaser.persistence.storagePid}
        #recursive = 1
    }
    features {
        #skipDefaultArguments = 1
        # if set to 1, the enable fields are ignored in BE context
        ignoreAllEnableFieldsInBe = 0
        # Should be on by default, but can be disabled if all action in the plugin are uncached
        requireCHashArgumentForActionArguments = 1
    }
    mvc {
        #callDefaultActionIfActionCantBeResolved = 1
    }
}

## EXTENSION BUILDER DEFAULTS END TOKEN - Everything BEFORE this line is overwritten with the defaults of the extension builder