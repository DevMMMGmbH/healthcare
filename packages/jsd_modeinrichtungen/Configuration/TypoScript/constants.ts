
plugin.tx_jsdmodeinrichtungen_teaser {
    view {
        # cat=plugin.tx_jsdmodeinrichtungen_teaser/file; type=string; label=Path to template root (FE)
        templateRootPath = EXT:jsd_modeinrichtungen/Resources/Private/Templates/
        # cat=plugin.tx_jsdmodeinrichtungen_teaser/file; type=string; label=Path to template partials (FE)
        partialRootPath = EXT:jsd_modeinrichtungen/Resources/Private/Partials/
        # cat=plugin.tx_jsdmodeinrichtungen_teaser/file; type=string; label=Path to template layouts (FE)
        layoutRootPath = EXT:jsd_modeinrichtungen/Resources/Private/Layouts/
    }
    persistence {
        # cat=plugin.tx_jsdmodeinrichtungen_teaser//a; type=string; label=Default storage PID
        // storagePid =
    }
}

## EXTENSION BUILDER DEFAULTS END TOKEN - Everything BEFORE this line is overwritten with the defaults of the extension builder