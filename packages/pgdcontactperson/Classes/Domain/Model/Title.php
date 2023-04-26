<?php

declare(strict_types=1);

namespace ImkenLeibrock\Pgdcontactperson\Domain\Model;

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
 * Title
 */
class Title extends AbstractEntity
{
    /**
     * title
     *
     * @var string
     */
    protected $title;

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
}
