<?php

namespace WebneoGmbh\Sitepackage\Controller;

use TYPO3\CMS\Backend\Utility\BackendUtility;
use TYPO3\CMS\Core\Localization\LanguageService;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use WebneoGmbh\Sitepackage\Domain\Repository\ScrimSeriesRepository;

class ScrimManagerController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    protected ScrimSeriesRepository $scrimSeriesRepository;

    public function __construct(ScrimSeriesRepository $scrimSeriesRepository)
    {
        $this->scrimSeriesRepository = $scrimSeriesRepository;
    }

    public function indexAction(): \Psr\Http\Message\ResponseInterface
    {
        $pageId = (int)GeneralUtility::_GP('id');

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
            $returnUrl = BackendUtility::getModuleUrl('web_scrimmanager', ['id' => $pageId]);
            $this->view->assignMultiple([
                'createSeriesUrl' => BackendUtility::getModuleUrl('record_edit', [
                    'edit' => [
                        'tx_sitepackage_domain_model_scrimseries' => [
                            $pageId => 'new',
                        ],
                    ],
                    'returnUrl' => $returnUrl,
                ]),
                'listModuleUrl' => BackendUtility::getModuleUrl('web_list', ['id' => $pageId]),
                'returnUrl' => $returnUrl,
                'seriesList' => $this->scrimSeriesRepository->findByPid($pageId),
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
