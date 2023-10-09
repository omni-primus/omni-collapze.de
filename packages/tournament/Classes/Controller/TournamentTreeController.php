<?php

declare(strict_types=1);

namespace Primus\Tournament\Controller;

use Primus\Tournament\DataProcessing\Table;


/**
 * This file is part of the "Tournament" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2023 Primus <primus@omni-collapze.de>, OMNI CollapZe
 */

/**
 * TournamentTreeController
 */
class TournamentTreeController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * action index
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function indexAction(): \Psr\Http\Message\ResponseInterface
    {
        $table = new Table;
        $this->view->assign('tournamentArray', $table->getTournament());
        $this->view->assign('matchesArray', $table->getMatches());
        return $this->htmlResponse();
    }
    public function showAction() : \Psr\Http\Message\ResponseInterface {
        $table = new Table;
        $matchArray = $table->getMatches();        
        $this->view->assign('tournamentArray', $table->getTournament());
        $this->view->assign('matchesArray', $matchArray);
        $this->view->assign('roundCount', $table->getRoundCount($matchArray));
        $this->view->assign('roundArray', $table->getRoundArray($matchArray));
        $this->view->assign('playerArray', $table->getPlayerNames());
        return $this->htmlResponse();
    }
}
