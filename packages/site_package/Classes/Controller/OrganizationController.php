<?php

namespace Fab\SitePackage\Controller;

use Fab\SitePackage\Domain\Repository\OrganizationRepository;
use Psr\Http\Message\ResponseInterface;

class OrganizationController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    public function __construct(
        private readonly OrganizationRepository $organizationRepository
    )
    {
    }

    public function showRandomAction(): ResponseInterface
    {
        $this->view->assignMultiple([
            'organization' => $this->organizationRepository->findRandom()
        ]);
        return $this->htmlResponse();
    }
}
