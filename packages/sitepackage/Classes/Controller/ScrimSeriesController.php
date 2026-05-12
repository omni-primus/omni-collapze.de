<?php

namespace WebneoGmbh\Sitepackage\Controller;

use Psr\Http\Message\ResponseInterface;
use WebneoGmbh\Sitepackage\Domain\Repository\ScrimSeriesRepository;

class ScrimSeriesController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    protected ScrimSeriesRepository $scrimSeriesRepository;

    public function __construct(ScrimSeriesRepository $scrimSeriesRepository)
    {
        $this->scrimSeriesRepository = $scrimSeriesRepository;
    }

    public function showAction(): ResponseInterface
    {
        $this->view->assign('seriesList', $this->scrimSeriesRepository->findAllOrderedByDate());
        return $this->htmlResponse();
    }
}
