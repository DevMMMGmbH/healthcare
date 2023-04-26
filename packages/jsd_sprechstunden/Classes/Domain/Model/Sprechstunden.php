<?php

declare(strict_types=1);

namespace RobertHeyduck\JsdSprechstunden\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

/***
 *
 * This file is part of the "JSD Sprechstunden" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2021 Robert Heyduck <mail@typo-script.de>, Robert Heyduck
 *
 ***/
/**
 * Sprechstunden
 */
class Sprechstunden extends AbstractEntity
{
    /**
     * Titel für die Auswahl
     *
     * @var string
     */
    protected $auswahlname = '';

    /**
     * Titel der Sprechstunde
     *
     * @var string
     */
    protected $title = '';

    /**
     * Einrichtung
     *
     * @var string
     */
    protected $einrichtung = '';

    /**
     * Google Maps Link
     *
     * @var string
     */
    protected $gglmaplink = '';

    /**
     * Beschreibung
     *
     * @var string
     */
    protected $beschreibung = '';

    /**
     * Terminevereinbarung - Titel
     *
     * @var string
     */
    protected $terminTitle = '';

    /**
     * Terminevereinbarung -  E-Mail Titel
     *
     * @var string
     */
    protected $terminEmailTitle = '';

    /**
     * Terminevereinbarung - E-Mail Adresse
     *
     * @var string
     */
    protected $terminEmailLink = '';

    /**
     * Terminevereinbarung - Link Titel
     *
     * @var string
     */
    protected $terminLinkTitle = '';

    /**
     * Terminevereinbarung - Link
     *
     * @var string
     */
    protected $terminLink = '';

    /**
     * Terminevereinbarung - Telefon Titel
     *
     * @var string
     */
    protected $terminTelLink = '';

    /**
     * Terminevereinbarung - Telefonnummer
     *
     * @var string
     */
    protected $terminTel = '';

    /**
     * Terminzeiten - Überschrift
     *
     * @var string
     */
    protected $terminZeitenTitle = '';

    /**
     * Terminzeiten - Zeiten (Tabelle)
     *
     * @var string
     */
    protected $terminZeiten = '';

    /**
     * Returns the auswahlname
     *
     * @return string
     */
    public function getAuswahlname()
    {
        return $this->auswahlname;
    }

    /**
     * Sets the auswahlname
     *
     * @param string $auswahlname
     */
    public function setAuswahlname($auswahlname)
    {
        $this->auswahlname = $auswahlname;
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
     * Returns the einrichtung
     *
     * @return string
     */
    public function getEinrichtung()
    {
        return $this->einrichtung;
    }

    /**
     * Sets the einrichtung
     *
     * @param string $einrichtung
     */
    public function setEinrichtung($einrichtung)
    {
        $this->einrichtung = $einrichtung;
    }

    /**
     * Returns the gglmaplink
     *
     * @return string
     */
    public function getGglmaplink()
    {
        return $this->gglmaplink;
    }

    /**
     * Sets the gglmaplink
     *
     * @param string $gglmaplink
     */
    public function setGglmaplink($gglmaplink)
    {
        $this->gglmaplink = $gglmaplink;
    }

    /**
     * Returns the beschreibung
     *
     * @return string
     */
    public function getBeschreibung()
    {
        return $this->beschreibung;
    }

    /**
     * Sets the beschreibung
     *
     * @param string $beschreibung
     */
    public function setBeschreibung($beschreibung)
    {
        $this->beschreibung = $beschreibung;
    }

    /**
     * Returns the terminTitle
     *
     * @return string
     */
    public function getTerminTitle()
    {
        return $this->terminTitle;
    }

    /**
     * Sets the terminTitle
     *
     * @param string $terminTitle
     */
    public function setTerminTitle($terminTitle)
    {
        $this->terminTitle = $terminTitle;
    }

    /**
     * Returns the terminEmailTitle
     *
     * @return string
     */
    public function getTerminEmailTitle()
    {
        return $this->terminEmailTitle;
    }

    /**
     * Sets the terminEmailTitle
     *
     * @param string $terminEmailTitle
     */
    public function setTerminEmailTitle($terminEmailTitle)
    {
        $this->terminEmailTitle = $terminEmailTitle;
    }

    /**
     * Returns the terminEmailLink
     *
     * @return string
     */
    public function getTerminEmailLink()
    {
        return $this->terminEmailLink;
    }

    /**
     * Sets the terminEmailLink
     *
     * @param string $terminEmailLink
     */
    public function setTerminEmailLink($terminEmailLink)
    {
        $this->terminEmailLink = $terminEmailLink;
    }

    /**
     * Returns the terminLinkTitle
     *
     * @return string
     */
    public function getTerminLinkTitle()
    {
        return $this->terminLinkTitle;
    }

    /**
     * Sets the terminLinkTitle
     *
     * @param string $terminLinkTitle
     */
    public function setTerminLinkTitle($terminLinkTitle)
    {
        $this->terminLinkTitle = $terminLinkTitle;
    }

    /**
     * Returns the terminLink
     *
     * @return string
     */
    public function getTerminLink()
    {
        return $this->terminLink;
    }

    /**
     * Sets the terminLink
     *
     * @param string $terminLink
     */
    public function setTerminLink($terminLink)
    {
        $this->terminLink = $terminLink;
    }

    /**
     * Returns the terminTelLink
     *
     * @return string
     */
    public function getTerminTelLink()
    {
        return $this->terminTelLink;
    }

    /**
     * Sets the terminTelLink
     *
     * @param string $terminTelLink
     */
    public function setTerminTelLink($terminTelLink)
    {
        $this->terminTelLink = $terminTelLink;
    }

    /**
     * Returns the terminTel
     *
     * @return string
     */
    public function getTerminTel()
    {
        return $this->terminTel;
    }

    /**
     * Sets the terminTel
     *
     * @param string $terminTel
     */
    public function setTerminTel($terminTel)
    {
        $this->terminTel = $terminTel;
    }

    /**
     * Returns the terminZeitenTitle
     *
     * @return string
     */
    public function getTerminZeitenTitle()
    {
        return $this->terminZeitenTitle;
    }

    /**
     * Sets the terminZeitenTitle
     *
     * @param string $terminZeitenTitle
     */
    public function setTerminZeitenTitle($terminZeitenTitle)
    {
        $this->terminZeitenTitle = $terminZeitenTitle;
    }

    /**
     * Returns the terminZeiten
     *
     * @return string
     */
    public function getTerminZeiten()
    {
        return $this->terminZeiten;
    }

    /**
     * Sets the terminZeiten
     *
     * @param string $terminZeiten
     */
    public function setTerminZeiten($terminZeiten)
    {
        $this->terminZeiten = $terminZeiten;
    }
}
