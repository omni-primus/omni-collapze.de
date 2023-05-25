<?php

namespace Primus\Tournament\Controller;

use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class TournamentController extends ActionController {
    public function showAction() : ResponseInterface {
        return $this->htmlResponse();
    }
}