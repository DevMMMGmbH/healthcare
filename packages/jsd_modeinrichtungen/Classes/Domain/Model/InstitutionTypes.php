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
 * Typen der Einrichtungen
 */
class InstitutionTypes extends AbstractEntity
{
    /**
     * Titel des Typs
     *
     * @var string
     * @Validate("NotEmpty")
     */
    protected $title = '';

    /**
     * Zuordung des Typs zum Bereich
     *
     * @var int
     * @Validate("NotEmpty")
     */
    protected $types = 0;

    /**
     * Zuordnung Bereich zum Fachbereich
     *
     * @var int
     */
    protected $bereich = 0;

    /**
     * __construct
     */
    public function __construct()
    {
        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }

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
     * Returns the types
     *
     * @return int
     */
    public function getTypes()
    {
        return $this->types;
    }

    /**
     * Sets the types
     *
     * @param int $types
     */
    public function setTypes($types)
    {
        $this->types = $types;
    }

    /**
     * Returns the bereich
     *
     * @return int
     */
    public function getBereich()
    {
        return $this->bereich;
    }

    /**
     * Sets the bereich
     *
     * @param int $bereich
     */
    public function setBereich($bereich)
    {
        $this->bereich = $bereich;
    }

    /**
     * Initializes all ObjectStorage properties Do not modify this method! It will be rewritten on each save in the
     * extension builder You may modify the constructor of this class instead
     */
    protected function initStorageObjects()
    {
    }
}
