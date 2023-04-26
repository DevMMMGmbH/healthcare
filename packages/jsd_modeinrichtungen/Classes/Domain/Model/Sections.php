<?php

declare(strict_types=1);

namespace JSD\JsdModeinrichtungen\Domain\Model;

use TYPO3\CMS\Extbase\Annotation\Validate;
use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

/***
 *
 * This file is part of the "JSD Modul Einrichtungen" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2019
 *
 ***/
/**
 * Bereiche der Einrichtungen
 */
class Sections extends AbstractEntity
{
    /**
     * Titel des Bereichs
     *
     * @var string
     * @Validate("NotEmpty")
     */
    protected $title = '';

    /**
     * Seiten-ID der Bereichs-Startseite
     *
     * @var int
     * @Validate("NotEmpty")
     */
    protected $rootpage = 0;

    /**
     * Seiten-ID der Bereichs-Listenansicht
     *
     * @var int
     * @Validate("NotEmpty")
     */
    protected $listpage = 0;

    /**
     * Institution zuordnen
     *
     * @var Institutions
     */
    protected $institution;

    /**
     * Returns the title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets the title
     *
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Returns the rootpage
     *
     * @return int rootpage
     */
    public function getRootpage()
    {
        return $this->rootpage;
    }

    /**
     * Sets the rootpage
     *
     * @param int $rootpage
     */
    public function setRootpage($rootpage)
    {
        $this->rootpage = $rootpage;
    }

    /**
     * Returns the listpage
     *
     * @return int listpage
     */
    public function getListpage()
    {
        return $this->listpage;
    }

    /**
     * Sets the listpage
     *
     * @param int $listpage
     */
    public function setListpage($listpage)
    {
        $this->listpage = $listpage;
    }

    /**
     * Returns the institution
     *
     * @return Institutions
     */
    public function getInstitution()
    {
        return $this->institution;
    }

    /**
     * Sets the institution
     */
    public function setInstitution(Institutions $institution)
    {
        $this->institution = $institution;
    }
}
