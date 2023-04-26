<?php

declare(strict_types=1);

namespace JSD\JsdModeinrichtungen\Controller;

use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use JSD\JsdModeinrichtungen\Domain\Repository\InstitutionsRepository;

/***
 *
 * This file is part of the "JSD Modul Einrichtungen" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2023 Robert Heyduck mail@typo-script.de
 *
 ***/

/**
 * Summary of InstitutionsController
 */
class InstitutionsController extends ActionController
{
    /**
     * @var InstitutionsRepository
     */
    protected $institutionsRepository;
    
    /**
     * @param InstitutionsRepository $institutionsRepository
     * @return void
     */
    public function injectInstitutionsRepository(InstitutionsRepository $institutionsRepository): void
    {
        $this->institutionsRepository = $institutionsRepository;
    }

    public function teaserAction(): ResponseInterface
    {
        $this->view->assign(
            'data', 
            $this->configurationManager->getContentObject()->data);
        $this->view->assign(
            'institutions', 
            $this->institutionsRepository->findAll());
        
        return $this->htmlResponse();
    }

}
