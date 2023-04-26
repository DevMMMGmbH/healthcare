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
 * Position
 */
class Position extends AbstractEntity
{
    /**
     * position
     *
     * @var string
     */
    protected $position = '';

    /**
     * Returns the position
     *
     * @return string
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Sets the position
     *
     * @param string $position
     */
    public function setPosition($position)
    {
        $this->position = $position;
    }
}
