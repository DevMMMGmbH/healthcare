<?php

declare(strict_types=1);

namespace RobertHeyduck\JsdSprechstunden\Domain\Repository;

use TYPO3\CMS\Extbase\Persistence\QueryInterface;
use TYPO3\CMS\Extbase\Persistence\Repository;

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
 * The repository for Sprechstundens
 */
class SprechstundenRepository extends Repository
{
    /**
     * @var array
     */
    protected $defaultOrderings = [
        'sorting' => QueryInterface::ORDER_ASCENDING,
    ];
}
