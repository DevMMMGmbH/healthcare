<?php

declare(strict_types=1);

namespace ImkenLeibrock\Pgdcontactperson\Domain\Model;

use JSD\JsdModeinrichtungen\Domain\Model\Institutions;
use JSD\JsdModeinrichtungen\Domain\Repository\InstitutionsRepository;
use TYPO3\CMS\Extbase\Annotation\ORM\Cascade;
use TYPO3\CMS\Extbase\Domain\Model\FileReference;
use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

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
 * Contactperson
 */
class Contactperson extends AbstractEntity
{
    /**
     * institutionsRepository
     *
     * @var InstitutionsRepository
     */
    protected $institutionsRepository;

    /**
     * profile
     *
     * @var string
     */
    protected $profile = '';

    /**
     * description
     *
     * @var string
     */
    protected $description = '';

    /**
     * image
     *
     * @var FileReference
     * @Cascade("remove")
     */
    protected $image;

    /**
     * firstname
     *
     * @var string
     */
    protected $firstname = '';

    /**
     * lastname
     *
     * @var string
     */
    protected $lastname = '';

    /**
     * phone
     *
     * @var string
     */
    protected $phone = '';

    /**
     * mobil
     *
     * @var string
     */
    protected $mobil = '';

    /**
     * fax
     *
     * @var string
     */
    protected $fax = '';

    /**
     * email
     *
     * @var string
     */
    protected $email = '';

    /**
     * institution
     *
     * @var Institutions
     */
    protected $institution;

    /**
     * area
     *
     * @var string
     */
    protected $area = '';

    /**
     * room
     *
     * @var string
     */
    protected $room = '';

    /**
     * therapie1label
     *
     * @var string
     */
    protected $therapie1label = '';

    /**
     * therapie1link
     *
     * @var string
     */
    protected $therapie1link = '';

    /**
     * therapie2label
     *
     * @var string
     */
    protected $therapie2label = '';

    /**
     * therapie2link
     *
     * @var string
     */
    protected $therapie2link = '';

    /**
     * therapie3label
     *
     * @var string
     */
    protected $therapie3label = '';

    /**
     * therapie3link
     *
     * @var string
     */
    protected $therapie3link = '';

    /**
     * therapie4label
     *
     * @var string
     */
    protected $therapie4label = '';

    /**
     * therapie4link
     *
     * @var string
     */
    protected $therapie4link = '';

    /**
     * refposition
     *
     * @var Position
     */
    protected $refposition;

    /**
     * reftitle
     *
     * @var Title
     */
    protected $reftitle;

    /**
     * noSearch
     *
     * @var bool
     */
    protected $noSearch = false;

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
     * Returns the profile
     *
     * @return string
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * Sets the profile
     *
     * @param string $profile
     */
    public function setProfile($profile)
    {
        $this->profile = $profile;
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
     * Returns the firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Sets the firstname
     *
     * @param string $firstname
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * Returns the lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Sets the lastname
     *
     * @param string $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
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
     * Returns the mobil
     *
     * @return string
     */
    public function getMobil()
    {
        return $this->mobil;
    }

    /**
     * Sets the mobil
     *
     * @param string $mobil
     */
    public function setMobil($mobil)
    {
        $this->mobil = $mobil;
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
     *
     * @param int $institution
     */
    public function setInstitution($institution)
    {
        $this->institution = $institution;
    }

    /**
     * Returns the area
     *
     * @return string
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * Sets the area
     *
     * @param string $area
     */
    public function setArea($area)
    {
        $this->area = $area;
    }

    /**
     * Returns the room
     *
     * @return string
     */
    public function getRoom()
    {
        return $this->room;
    }

    /**
     * Sets the room
     *
     * @param string $room
     */
    public function setRoom($room)
    {
        $this->room = $room;
    }

    /**
     * Returns the therapie1label
     *
     * @return string
     */
    public function getTherapie1label()
    {
        return $this->therapie1label;
    }

    /**
     * Sets the therapie1label
     *
     * @param string $therapie1label
     */
    public function setTherapie1label($therapie1label)
    {
        $this->therapie1label = $therapie1label;
    }

    /**
     * Returns the therapie1link
     *
     * @return string
     */
    public function getTherapie1link()
    {
        return $this->therapie1link;
    }

    /**
     * Sets the therapie1link
     *
     * @param string $therapie1link
     */
    public function setTherapie1link($therapie1link)
    {
        $this->therapie1link = $therapie1link;
    }

    /**
     * Returns the therapie2label
     *
     * @return string
     */
    public function getTherapie2label()
    {
        return $this->therapie2label;
    }

    /**
     * Sets the therapie2label
     *
     * @param string $therapie2label
     */
    public function setTherapie2label($therapie2label)
    {
        $this->therapie2label = $therapie2label;
    }

    /**
     * Returns the therapie2link
     *
     * @return string
     */
    public function getTherapie2link()
    {
        return $this->therapie2link;
    }

    /**
     * Sets the therapie2link
     *
     * @param string $therapie2link
     */
    public function setTherapie2link($therapie2link)
    {
        $this->therapie2link = $therapie2link;
    }

    /**
     * Returns the therapie3label
     *
     * @return string
     */
    public function getTherapie3label()
    {
        return $this->therapie3label;
    }

    /**
     * Sets the therapie3label
     *
     * @param string $therapie3label
     */
    public function setTherapie3label($therapie3label)
    {
        $this->therapie3label = $therapie3label;
    }

    /**
     * Returns the therapie3link
     *
     * @return string
     */
    public function getTherapie3link()
    {
        return $this->therapie3link;
    }

    /**
     * Sets the therapie3link
     *
     * @param string $therapie3link
     */
    public function setTherapie3link($therapie3link)
    {
        $this->therapie3link = $therapie3link;
    }

    /**
     * Returns the therapie4label
     *
     * @return string
     */
    public function getTherapie4label()
    {
        return $this->therapie4label;
    }

    /**
     * Sets the therapie4label
     *
     * @param string $therapie4label
     */
    public function setTherapie4label($therapie4label)
    {
        $this->therapie4label = $therapie4label;
    }

    /**
     * Returns the therapie4link
     *
     * @return string
     */
    public function getTherapie4link()
    {
        return $this->therapie4link;
    }

    /**
     * Sets the therapie4link
     *
     * @param string $therapie4link
     */
    public function setTherapie4link($therapie4link)
    {
        $this->therapie4link = $therapie4link;
    }

    /**
     * Returns the refposition
     *
     * @return Position
     */
    public function getRefposition()
    {
        return $this->refposition;
    }

    /**
     * Sets the refposition
     */
    public function setRefposition(Position $refposition)
    {
        $this->refposition = $refposition;
    }

    /**
     * Returns the reftitle
     *
     * @return Title
     */
    public function getReftitle()
    {
        return $this->reftitle;
    }

    /**
     * Sets the reftitle
     */
    public function setReftitle(Title $reftitle)
    {
        $this->reftitle = $reftitle;
    }

    /**
     * Returns the noSearch
     *
     * @return bool
     */
    public function getNoSearch()
    {
        return $this->noSearch;
    }

    /**
     * Sets the noSearch
     *
     * @param bool $noSearch
     */
    public function setNoSearch($noSearch)
    {
        $this->noSearch = $noSearch;
    }

    /**
     * Returns the boolean state of noSearch
     *
     * @return bool
     */
    public function isNoSearch()
    {
        return $this->noSearch;
    }

    public function injectInstitutionsRepository(InstitutionsRepository $institutionsRepository): void
    {
        $this->institutionsRepository = $institutionsRepository;
    }

    protected function initStorageObjects()
    {
    }
}
