<?php

declare(strict_types=1);

namespace RobertHeyduck\JsdSprechstunden\Controller;

use Psr\Http\Message\ResponseInterface;
use RobertHeyduck\JsdSprechstunden\Domain\Repository\SprechstundenRepository;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

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
 * SprechstundenController
 */
class SprechstundenController extends ActionController
{
    /**
     * sprechstundenRepository
     *
     * @var SprechstundenRepository
     */
    protected $sprechstundenRepository;

    public function injectSprechstundenRepository(SprechstundenRepository $sprechstundenRepository)
    {
        $this->sprechstundenRepository = $sprechstundenRepository;
    }

    /**
     * action list
     */
    public function listAction(): ResponseInterface
    {
        $items = $this->settings['items'];
        $pids = $this->settings['storagePid'];
        $items = ($items) ? GeneralUtility::intExplode(',', $items, true) : '';
        $pids = ($pids) ? GeneralUtility::intExplode(',', $pids, true) : '';

        $cObjectData = $this->configurationManager->getContentObject()->data;

        if ($items) {
            foreach ($items as $key => $id) {
                $sprechstunden[$id] = $this->sprechstundenRepository->findByUid($id);
            }
        } else {
            if ($pids) {
                $sprechstunden = $this->sprechstundenRepository->findAll();
                $sprechstunden->getQuery()
                    ->getQuerySettings()
                    ->setStoragePageIds($pids);
            }
        }

        $this->view->assign('sprechstunden', $sprechstunden);
        $this->view->assign('data', $cObjectData);

        return $this->htmlResponse();
    }
}
