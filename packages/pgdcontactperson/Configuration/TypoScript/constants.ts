
plugin.tx_pgdcontactperson_contactperson {
    view {
        # cat=plugin.tx_pgdcontactperson_contactperson/file; type=string; label=Path to template root (FE)
        templateRootPath = EXT:pgdcontactperson/Resources/Private/Templates/
        # cat=plugin.tx_pgdcontactperson_contactperson/file; type=string; label=Path to template partials (FE)
        partialRootPath = EXT:pgdcontactperson/Resources/Private/Partials/
        # cat=plugin.tx_pgdcontactperson_contactperson/file; type=string; label=Path to template layouts (FE)
        layoutRootPath = EXT:pgdcontactperson/Resources/Private/Layouts/
    }
    persistence {
        # cat=plugin.tx_pgdcontactperson_contactperson//a; type=string; label=Default storage PID
        storagePid =
    }
}
