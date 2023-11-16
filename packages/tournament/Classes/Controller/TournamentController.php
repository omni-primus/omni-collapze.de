<?php

namespace Primus\Tournament\Controller;

use Primus\Tournament\DataProcessing\DataEditor;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use Primus\Tournament\DataProcessing\Table;
use TYPO3\CMS\Core\Exception;

class TournamentController extends ActionController {
    public function showAction() : ResponseInterface {
        $table = new Table;
        $matchArray = $table->getMatches();
        $this->view->assign('tournamentArray', $table->getTournament());
        $this->view->assign('matchesArray', $matchArray);
        $this->view->assign('roundCount', $table->getRoundCount($matchArray));
        $this->view->assign('roundArray', $table->getRoundArray($matchArray));
        $this->view->assign('playerArray', $table->getPlayerNames());
        return $this->htmlResponse();
    }

    public function editAction() : ResponseInterface {
        $matchId = $_POST["matchId"];
        $player1Id = $_POST["playerId1"];
        $player2Id = $_POST["playerId2"];
        $scorePlayer1 = $_POST["scorePlayer1"];
        $scorePlayer2 = $_POST["scorePlayer2"];
        $editor = new DataEditor();
        $editor->updateMatch($matchId, $player1Id, $player2Id, $scorePlayer1, $scorePlayer2);
        return $this->redirect('show');
    }
}