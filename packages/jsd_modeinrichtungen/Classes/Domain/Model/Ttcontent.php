<?php

declare(strict_types=1);

namespace JSD\JsdModeinrichtungen\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;

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
 * Auswahl der Einrichtungen und Bereiche
 */
class Ttcontent extends AbstractEntity
{
    /**
     * Einrichtung Auswahl
     *
     * @var int
     */
    protected $jsdTeaserEinrichtungSelect = 0;

    /**
     * Auswahl der Einrichtung
     *
     * @var ObjectStorage<Institutions>
     */
    protected $jsdEinrichtungen;

    /**
     * Auswahl der Einrichtungsbereiche
     *
     * @var ObjectStorage<Sections>
     */
    protected $jsdBereiche;

    /**
     * __construct
     */
    public function __construct()
    {
        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }

    /**
     * Adds a Sections
     */
    public function addJsdBereiche(Sections $jsdBereiche)
    {
        $this->jsdBereiche->attach($jsdBereiche);
    }

    /**
     * Removes a Sections
     *
     * @param Sections $jsdBereicheToRemove The Sections to be removed
     */
    public function removeJsdBereiche(Sections $jsdBereicheToRemove)
    {
        $this->jsdBereiche->detach($jsdBereicheToRemove);
    }

    /**
     * Returns the jsdBereiche
     *
     * @return ObjectStorage<Sections> $jsdBereiche
     */
    public function getJsdBereiche()
    {
        return $this->jsdBereiche;
    }

    /**
     * Sets the jsdBereiche
     *
     * @param ObjectStorage<Sections> $jsdBereiche
     */
    public function setJsdBereiche(ObjectStorage $jsdBereiche)
    {
        $this->jsdBereiche = $jsdBereiche;
    }

    /**
     * Adds a Institutions
     */
    public function addJsdEinrichtungen(Institutions $jsdEinrichtungen)
    {
        $this->jsdEinrichtungen->attach($jsdEinrichtungen);
    }

    /**
     * Removes a Institutions
     *
     * @param Institutions $jsdEinrichtungenToRemove The Institutions to be removed
     */
    public function removeJsdEinrichtungen(Institutions $jsdEinrichtungenToRemove)
    {
        $this->jsdEinrichtungen->detach($jsdEinrichtungenToRemove);
    }

    /**
     * Returns the jsdEinrichtungen
     *
     * @return ObjectStorage<Institutions> $jsdEinrichtungen
     */
    public function getJsdEinrichtungen()
    {
        return $this->jsdEinrichtungen;
    }

    /**
     * Sets the jsdEinrichtungen
     *
     * @param ObjectStorage<Institutions> $jsdEinrichtungen
     */
    public function setJsdEinrichtungen(ObjectStorage $jsdEinrichtungen)
    {
        $this->jsdEinrichtungen = $jsdEinrichtungen;
    }

    /**
     * Returns the jsdTeaserEinrichtungSelect
     *
     * @return int
     */
    public function getJsdTeaserEinrichtungSelect()
    {
        return $this->jsdTeaserEinrichtungSelect;
    }

    /**
     * Sets the jsdTeaserEinrichtungSelect
     *
     * @param int $jsdTeaserEinrichtungSelect
     */
    public function setJsdTeaserEinrichtungSelect($jsdTeaserEinrichtungSelect)
    {
        $this->jsdTeaserEinrichtungSelect = $jsdTeaserEinrichtungSelect;
    }

    /**
     * Initializes all ObjectStorage properties Do not modify this method! It will be rewritten on each save in the
     * extension builder You may modify the constructor of this class instead
     */
    protected function initStorageObjects()
    {
        $this->jsdEinrichtungen = new ObjectStorage();
        $this->jsdBereiche = new ObjectStorage();
    }
}
