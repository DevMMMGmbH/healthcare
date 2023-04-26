<?php

declare(strict_types=1);

namespace ImkenLeibrock\Pgdcontactperson\Domain\Repository;

use TYPO3\CMS\Extbase\Persistence\Repository;

/***
 *
 * This file is part of the "PGD Contactperson" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2019 Imken Leibrock <imme@snafu.de>
 *
 ***/
/**
 * The repository for Contactpersons
 */
class ContactpersonRepository extends Repository
{
    /**
     * @param $allPersons
     */
    public function findInstitutionsFromFlexform($allPersons)
    {
        $query = $this->createQuery();
        if ($allPersons != '') {
            $sql = 'SELECT ' . 'a.uid,' . 'b.title as iTitle,' . 'b.street as iStreet,' . 'b.house_number as iHouseNumber,' . 'b.zip as iZip,' . 'b.stadt as iCity ' . 'FROM tx_pgdcontactperson_domain_model_contactperson as a ' . 'left join  tx_jsdmodeinrichtungen_domain_model_institutions  as b ON a.institution  = b.uid ' . '' . ' where a.deleted=0 and a.hidden = 0 and a.uid in (' . $allPersons . ')' . 'ORDER BY FIELD(a.uid,' . $allPersons . ')';
            $query->statement($sql);
            return $query->execute(true);
        }
    }

    /**
     * @param $allPersons
     */
    public function findAllFromFlexform($allPersons)
    {
        $query = $this->createQuery();
        if ($allPersons != '') {
            //echo $sql = "SELECT * FROM tx_pgdcontactperson_domain_model_contactperson where deleted=0 and hidden = 0 and uid in (".$allPersons.")";
            $sql = 'SELECT ' . 'a.*,' . 'b.title as iTitle,' . 'b.street as iStreet,' . 'b.house_number as iHouseNumber,' . 'b.zip as iZip,' . 'b.stadt as iCity ' . 'FROM tx_pgdcontactperson_domain_model_contactperson as a ' . 'left join  tx_jsdmodeinrichtungen_domain_model_institutions  as b ON a.institution  = b.uid ' . '' . ' where a.deleted=0 and a.hidden = 0 and a.uid in (' . $allPersons . ')' . ' ORDER BY FIELD(a.uid,' . $allPersons . ')';
            $query->statement($sql);
            return $query->execute(true);
        }
    }

    /**
     * @param $allPersons
     */
    public function findAllContactsFromFlexform($allPersons)
    {
        $query = $this->createQuery();
        if ($allPersons != '') {
            $sql = 'SELECT ' . 'a.*' . 'FROM tx_pgdcontactperson_domain_model_contactperson as a ' . ' where a.deleted=0 and a.hidden = 0 and a.uid in (' . $allPersons . ')' . ' ORDER BY FIELD(a.uid,' . $allPersons . ')';
            $query->statement($sql);
            return $query->execute();
        }
    }
}
