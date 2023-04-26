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
 *  (c) 2019 Robert Heyduck <mail@typo-script.de>, i.A. MMM
 *
 ***/
/**
 * Standort
 */
class Locations extends AbstractEntity
{
    /**
     * Name
     *
     * @var string
     * @Validate("NotEmpty")
     */
    protected $title = '';

    /**
     * Regionstyp
     *
     * @var int
     * @Validate("NotEmpty")
     */
    protected $type = 0;

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
     * Returns the type
     *
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets the type
     *
     * @param int $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }
}
