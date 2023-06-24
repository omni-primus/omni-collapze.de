<?php

namespace Primus\Tournament\Controller;

use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use Primus\Tournament\DataProcessing\Table;
use http\Exception\RuntimeException;
use TYPO3\CMS\Core\Exception;

class TournamentController extends ActionController {
    public function showAction() : ResponseInterface {
        $table = new Table;
        $this->view->assign('tournamentArray', $table->getTournament());
        $this->view->assign('matchesArray', $table->getMatches());
        //$this->view->assign('testTitle', 'An example title');
        return $this->htmlResponse();
    }
}