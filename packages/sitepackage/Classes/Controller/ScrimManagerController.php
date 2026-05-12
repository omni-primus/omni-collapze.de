<?php

namespace WebneoGmbh\Sitepackage\Controller;

use TYPO3\CMS\Backend\Routing\UriBuilder;
use TYPO3\CMS\Core\Localization\LanguageService;
use WebneoGmbh\Sitepackage\Domain\Repository\ScrimSeriesRepository;

class ScrimManagerController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    protected ScrimSeriesRepository $scrimSeriesRepository;

    protected UriBuilder $backendUriBuilder;

    public function __construct(
        ScrimSeriesRepository $scrimSeriesRepository,
        UriBuilder $backendUriBuilder
    ) {
        $this->scrimSeriesRepository = $scrimSeriesRepository;
        $this->backendUriBuilder = $backendUriBuilder;
    }

    public function indexAction(): \Psr\Http\Message\ResponseInterface
    {
        $pageId = (int)($this->request->getQueryParams()['id'] ?? 0);

        $this->view->assignMultiple([
            'pageId' => $pageId,
            'moduleTitle' => $this->translate('module.title'),
            'moduleDescription' => $this->translate('module.description'),
            'noPageMessage' => $this->translate('module.noPage'),
            'labels' => [
                'createSeries' => $this->translate('module.createSeries'),
                'openList' => $this->translate('module.openList'),
                'date' => $this->translate('module.table.date'),
                'opponent' => $this->translate('module.table.opponent'),
                'games' => $this->translate('module.table.games'),
                'actions' => $this->translate('module.table.actions'),
                'empty' => $this->translate('module.table.empty'),
                'edit' => $this->translate('module.action.edit'),
                'manage' => $this->translate('module.action.manage'),
            ],
        ]);

        if ($pageId > 0) {
            $returnUrl = (string)$this->backendUriBuilder->buildUriFromRoute('web_scrimmanager', [
                'id' => $pageId,
            ]);
            $seriesList = $this->scrimSeriesRepository->findByPid($pageId);
            $seriesRows = [];

            foreach ($seriesList as $series) {
                $editUrl = (string)$this->backendUriBuilder->buildUriFromRoute('record_edit', [
                    'edit' => [
                        'tx_sitepackage_domain_model_scrimseries' => [
                            $series->getUid() => 'edit',
                        ],
                    ],
                    'returnUrl' => $returnUrl,
                ]);

                $seriesRows[] = [
                    'series' => $series,
                    'editUrl' => $editUrl,
                ];
            }

            $this->view->assignMultiple([
                'createSeriesUrl' => (string)$this->backendUriBuilder->buildUriFromRoute('record_edit', [
                    'edit' => [
                        'tx_sitepackage_domain_model_scrimseries' => [
                            $pageId => 'new',
                        ],
                    ],
                    'returnUrl' => $returnUrl,
                ]),
                'listModuleUrl' => (string)$this->backendUriBuilder->buildUriFromRoute('web_list', [
                    'id' => $pageId,
                ]),
                'returnUrl' => $returnUrl,
                'seriesRows' => $seriesRows,
            ]);
        }

        return $this->htmlResponse();
    }

    protected function translate(string $key): string
    {
        return (string)($this->getLanguageService()->sL(
            'LLL:EXT:sitepackage/Resources/Private/Language/locallang_scrim.xlf:' . $key
        ) ?: $key);
    }

    protected function getLanguageService(): LanguageService
    {
        return $GLOBALS['LANG'];
    }
}
