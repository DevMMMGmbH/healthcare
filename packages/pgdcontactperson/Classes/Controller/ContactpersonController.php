<?php

declare(strict_types=1);

namespace ImkenLeibrock\Pgdcontactperson\Controller;

use ImkenLeibrock\Pgdcontactperson\Domain\Model\Contactperson;
use ImkenLeibrock\Pgdcontactperson\Domain\Repository\ContactpersonRepository;
use JSD\JsdModeinrichtungen\Domain\Repository\InstitutionsRepository;
use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

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
 * ContactpersonController
 */
class ContactpersonController extends ActionController
{
    /**
     * institutionsRepository
     *
     * @var InstitutionsRepository
     */
    protected $institutionsRepository;

    public function injectInstitutionsRepository(InstitutionsRepository $institutionsRepository): void
    {
        $this->institutionsRepository = $institutionsRepository;
    }

    /**
     * contactpersonRepository
     *
     * @var ContactpersonRepository
     */
    protected $contactpersonRepository;

    public function injectContactpersonRepository(ContactpersonRepository $contactpersonRepository): void
    {
        $this->contactpersonRepository = $contactpersonRepository;
    }

    /**
     * action list
     */
    public function listAction(): ResponseInterface
    {
        $cObj = $this->configurationManager->getContentObject();
        $this->view->assign('data', $cObj->data);
        
        //$pid = $this->settings['setPid'];
        $allPersons = $this->settings['contactpersons'];
        $contactpersons = $this->contactpersonRepository->findAllContactsFromFlexform($allPersons);
        $institutions = $this->contactpersonRepository->findInstitutionsFromFlexform($allPersons);

        //$contactpersons = $this->contactpersonRepository->findAll();
        $this->view->assign('contactpersons', $contactpersons);
        $this->view->assign('institutions', $institutions);

        return $this->htmlResponse();
    }

    /**
     * action show
     */
    public function showAction(Contactperson $contactperson): ResponseInterface
    {
        $this->view->assign('contactperson', $contactperson);
        return $this->htmlResponse();
    }
}
