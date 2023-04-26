<?php

declare(strict_types=1);

namespace JSD\JsdModeinrichtungen\Domain\Model;

use TYPO3\CMS\Extbase\Annotation\ORM\Cascade;
use TYPO3\CMS\Extbase\Annotation\Validate;
use TYPO3\CMS\Extbase\Domain\Model\FileReference;
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
 * Einrichtungen der JSD
 */
class Institutions extends AbstractEntity
{
    /**
     * Name der Einrichtung
     *
     * @var string
     * @Validate("NotEmpty")
     */
    protected $title = '';

    /**
     * Beschreibung der Einrichtung
     *
     * @var string
     * @Validate("NotEmpty")
     */
    protected $description = '';

    /**
     * Startseite der Einrichtung (Seiten ID)
     *
     * @var string
     * @Validate("NotEmpty")
     */
    protected $rootpage = 0;

    /**
     * Telefon
     *
     * @var string
     * @Validate("NotEmpty")
     */
    protected $phone = '';

    /**
     * Fax
     *
     * @var string
     */
    protected $fax = '';

    /**
     * E-Mail
     *
     * @var string
     * @Validate("NotEmpty")
     */
    protected $email = '';

    /**
     * Bild der Einrichtung
     *
     * @var FileReference
     * @Cascade("remove")
     */
    protected $image;

    /**
     * Strasse
     *
     * @var string
     * @Validate("NotEmpty")
     */
    protected $street = '';

    /**
     * Hausnummer
     *
     * @var string
     */
    protected $houseNumber = '';

    /**
     * PLZ
     *
     * @var string
     * @Validate("NotEmpty")
     */
    protected $zip = 0;

    /**
     * Kommaseparierte Boost-Wörter 1
     *
     * @var string
     */
    protected $boostOne = '';

    /**
     * Kommaseparierte Boost-Wörter 2
     *
     * @var string
     */
    protected $boostTwo = '';

    /**
     * Presse - Detailseite
     *
     * @var string
     */
    protected $pidDetailPresse = 0;

    /**
     * Presse - Liste
     *
     * @var string
     */
    protected $pidListPresse = 0;

    /**
     * Presseschau - Liste
     *
     * @var string
     */
    protected $pidListPresseschau = 0;

    /**
     * Veranstaltungen - Detailseite
     *
     * @var string
     */
    protected $pidDetailVeranstaltungen = 0;

    /**
     * Veranstaltungen - Liste
     *
     * @var string
     */
    protected $pidListVeranstaltungen = '';

    /**
     * Fachveranstaltungen - Detailseite
     *
     * @var string
     */
    protected $pidDetailFachveranstaltungen = 0;

    /**
     * Fachveranstaltungen - Liste
     *
     * @var string
     */
    protected $pidListFachveranstaltungen = 0;

    /**
     * Karriere - Detailseite
     *
     * @var string
     */
    protected $pidDetailCareer = 0;

    /**
     * Karriere - Liste
     *
     * @var string
     */
    protected $pidListCareer = 0;

    /**
     * Location Breitengrad
     *
     * @var string
     */
    protected $locationLatitude = '';

    /**
     * Location Längengrad
     *
     * @var string
     */
    protected $locationLongitude = '';

    /**
     * Stadt
     *
     * @var Locations
     */
    protected $stadt;

    /**
     * Bezirk oder Lankreis
     *
     * @var Locations
     */
    protected $bezirk;

    /**
     * Bundesland
     *
     * @var Locations
     */
    protected $bundesland;

    /**
     * Klinikbereiche für die eKomi Bewertungen
     *
     * @var ObjectStorage<Sections>
     */
    protected $sectionsSelect;

    /**
     * Einrichtung Typ
     *
     * @var InstitutionTypes
     */
    protected $typ;

    /**
     * Bereich bzw. Leistungsbereich
     *
     * @var InstitutionTypes
     */
    protected $bereich;

    /**
     * Fachbereiche
     *
     * @var ObjectStorage<InstitutionTypes>
     * @Cascade("remove")
     */
    protected $fbereich;

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
     * Returns the description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets the description
     *
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Returns the phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Sets the phone
     *
     * @param string $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * Returns the fax
     *
     * @return string
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Sets the fax
     *
     * @param string $fax
     */
    public function setFax($fax)
    {
        $this->fax = $fax;
    }

    /**
     * Returns the email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets the email
     *
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * Returns the street
     *
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Sets the street
     *
     * @param string $street
     */
    public function setStreet($street)
    {
        $this->street = $street;
    }

    /**
     * Adds a Sections
     */
    public function addSectionsSelect(Sections $sectionsSelect)
    {
        $this->sectionsSelect->attach($sectionsSelect);
    }

    /**
     * Removes a Sections
     *
     * @param Sections $sectionsSelectToRemove The Sections to be removed
     */
    public function removeSectionsSelect(Sections $sectionsSelectToRemove)
    {
        $this->sectionsSelect->detach($sectionsSelectToRemove);
    }

    /**
     * Returns the sectionsSelect
     *
     * @return ObjectStorage<Sections> $sectionsSelect
     */
    public function getSectionsSelect()
    {
        return $this->sectionsSelect;
    }

    /**
     * Sets the sectionsSelect
     *
     * @param ObjectStorage<Sections> $sectionsSelect
     */
    public function setSectionsSelect(ObjectStorage $sectionsSelect)
    {
        $this->sectionsSelect = $sectionsSelect;
    }

    /**
     * Returns the image
     *
     * @return FileReference
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Sets the image
     */
    public function setImage(FileReference $image)
    {
        $this->image = $image;
    }

    /**
     * Returns the houseNumber
     *
     * @return string
     */
    public function getHouseNumber()
    {
        return $this->houseNumber;
    }

    /**
     * Sets the houseNumber
     *
     * @param string $houseNumber
     */
    public function setHouseNumber($houseNumber)
    {
        $this->houseNumber = $houseNumber;
    }

    /**
     * Adds a InstitutionTypes
     */
    public function addFbereich(InstitutionTypes $fbereich)
    {
        $this->fbereich->attach($fbereich);
    }

    /**
     * Removes a InstitutionTypes
     *
     * @param InstitutionTypes $fbereichToRemove The InstitutionTypes to be removed
     */
    public function removeFbereich(InstitutionTypes $fbereichToRemove)
    {
        $this->fbereich->detach($fbereichToRemove);
    }

    /**
     * Returns the fbereich
     *
     * @return ObjectStorage<InstitutionTypes> fbereich
     */
    public function getFbereich()
    {
        return $this->fbereich;
    }

    /**
     * Sets the fbereich
     *
     * @param ObjectStorage<InstitutionTypes> $fbereich
     */
    public function setFbereich(ObjectStorage $fbereich)
    {
        $this->fbereich = $fbereich;
    }

    /**
     * Returns the typ
     *
     * @return InstitutionTypes
     */
    public function getTyp()
    {
        return $this->typ;
    }

    /**
     * Sets the typ
     */
    public function setTyp(InstitutionTypes $typ)
    {
        $this->typ = $typ;
    }

    /**
     * Returns the bereich
     *
     * @return InstitutionTypes
     */
    public function getBereich()
    {
        return $this->bereich;
    }

    /**
     * Sets the bereich
     */
    public function setBereich(InstitutionTypes $bereich)
    {
        $this->bereich = $bereich;
    }

    /**
     * Returns the stadt
     *
     * @return Locations
     */
    public function getStadt()
    {
        return $this->stadt;
    }

    /**
     * Sets the stadt
     */
    public function setStadt(Locations $stadt)
    {
        $this->stadt = $stadt;
    }

    /**
     * Returns the bezirk
     *
     * @return Locations
     */
    public function getBezirk()
    {
        return $this->bezirk;
    }

    /**
     * Sets the bezirk
     */
    public function setBezirk(Locations $bezirk)
    {
        $this->bezirk = $bezirk;
    }

    /**
     * Returns the bundesland
     *
     * @return Locations
     */
    public function getBundesland()
    {
        return $this->bundesland;
    }

    /**
     * Sets the bundesland
     */
    public function setBundesland(Locations $bundesland)
    {
        $this->bundesland = $bundesland;
    }

    /**
     * Returns the zip
     *
     * @return string zip
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * Sets the zip
     *
     * @param int $zip
     */
    public function setZip($zip)
    {
        $this->zip = $zip;
    }

    /**
     * Returns the boostOne
     *
     * @return string
     */
    public function getBoostOne()
    {
        return $this->boostOne;
    }

    /**
     * Sets the boostOne
     *
     * @param string $boostOne
     */
    public function setBoostOne($boostOne)
    {
        $this->boostOne = $boostOne;
    }

    /**
     * Returns the boostTwo
     *
     * @return string
     */
    public function getBoostTwo()
    {
        return $this->boostTwo;
    }

    /**
     * Sets the boostTwo
     *
     * @param string $boostTwo
     */
    public function setBoostTwo($boostTwo)
    {
        $this->boostTwo = $boostTwo;
    }

    /**
     * Returns the pidListVeranstaltungen
     *
     * @return string
     */
    public function getPidListVeranstaltungen()
    {
        return $this->pidListVeranstaltungen;
    }

    /**
     * Sets the pidListVeranstaltungen
     *
     * @param string $pidListVeranstaltungen
     */
    public function setPidListVeranstaltungen($pidListVeranstaltungen)
    {
        $this->pidListVeranstaltungen = $pidListVeranstaltungen;
    }

    /**
     * Returns the locationLatitude
     *
     * @return string
     */
    public function getLocationLatitude()
    {
        return $this->locationLatitude;
    }

    /**
     * Sets the locationLatitude
     *
     * @param string $locationLatitude
     */
    public function setLocationLatitude($locationLatitude)
    {
        $this->locationLatitude = $locationLatitude;
    }

    /**
     * Returns the locationLongitude
     *
     * @return string
     */
    public function getLocationLongitude()
    {
        return $this->locationLongitude;
    }

    /**
     * Sets the locationLongitude
     *
     * @param string $locationLongitude
     */
    public function setLocationLongitude($locationLongitude)
    {
        $this->locationLongitude = $locationLongitude;
    }

    /**
     * Returns the pidDetailPresse
     *
     * @return string pidDetailPresse
     */
    public function getPidDetailPresse()
    {
        return $this->pidDetailPresse;
    }

    /**
     * Sets the pidDetailPresse
     *
     * @param int $pidDetailPresse
     */
    public function setPidDetailPresse($pidDetailPresse)
    {
        $this->pidDetailPresse = $pidDetailPresse;
    }

    /**
     * Returns the pidListPresse
     *
     * @return string pidListPresse
     */
    public function getPidListPresse()
    {
        return $this->pidListPresse;
    }

    /**
     * Sets the pidListPresse
     *
     * @param int $pidListPresse
     */
    public function setPidListPresse($pidListPresse)
    {
        $this->pidListPresse = $pidListPresse;
    }

    /**
     * Returns the pidListPresseschau
     *
     * @return string pidListPresseschau
     */
    public function getPidListPresseschau()
    {
        return $this->pidListPresseschau;
    }

    /**
     * Sets the pidListPresseschau
     *
     * @param int $pidListPresseschau
     */
    public function setPidListPresseschau($pidListPresseschau)
    {
        $this->pidListPresseschau = $pidListPresseschau;
    }

    /**
     * Returns the pidDetailVeranstaltungen
     *
     * @return string pidDetailVeranstaltungen
     */
    public function getPidDetailVeranstaltungen()
    {
        return $this->pidDetailVeranstaltungen;
    }

    /**
     * Sets the pidDetailVeranstaltungen
     *
     * @param int $pidDetailVeranstaltungen
     */
    public function setPidDetailVeranstaltungen($pidDetailVeranstaltungen)
    {
        $this->pidDetailVeranstaltungen = $pidDetailVeranstaltungen;
    }

    /**
     * Returns the pidDetailFachveranstaltungen
     *
     * @return string pidDetailFachveranstaltungen
     */
    public function getPidDetailFachveranstaltungen()
    {
        return $this->pidDetailFachveranstaltungen;
    }

    /**
     * Sets the pidDetailFachveranstaltungen
     *
     * @param int $pidDetailFachveranstaltungen
     */
    public function setPidDetailFachveranstaltungen($pidDetailFachveranstaltungen)
    {
        $this->pidDetailFachveranstaltungen = $pidDetailFachveranstaltungen;
    }

    /**
     * Returns the pidListFachveranstaltungen
     *
     * @return string pidListFachveranstaltungen
     */
    public function getPidListFachveranstaltungen()
    {
        return $this->pidListFachveranstaltungen;
    }

    /**
     * Sets the pidListFachveranstaltungen
     *
     * @param int $pidListFachveranstaltungen
     */
    public function setPidListFachveranstaltungen($pidListFachveranstaltungen)
    {
        $this->pidListFachveranstaltungen = $pidListFachveranstaltungen;
    }

    /**
     * Returns the pidDetailCareer
     *
     * @return string pidDetailCareer
     */
    public function getPidDetailCareer()
    {
        return $this->pidDetailCareer;
    }

    /**
     * Sets the pidDetailCareer
     *
     * @param int $pidDetailCareer
     */
    public function setPidDetailCareer($pidDetailCareer)
    {
        $this->pidDetailCareer = $pidDetailCareer;
    }

    /**
     * Returns the pidListCareer
     *
     * @return string pidListCareer
     */
    public function getPidListCareer()
    {
        return $this->pidListCareer;
    }

    /**
     * Sets the pidListCareer
     *
     * @param int $pidListCareer
     */
    public function setPidListCareer($pidListCareer)
    {
        $this->pidListCareer = $pidListCareer;
    }

    /**
     * Returns the rootpage
     *
     * @return string rootpage
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
     * Initializes all ObjectStorage properties Do not modify this method! It will be rewritten on each save in the
     * extension builder You may modify the constructor of this class instead
     */
    protected function initStorageObjects()
    {
        $this->sectionsSelect = new ObjectStorage();
        $this->fbereich = new ObjectStorage();
    }
}
