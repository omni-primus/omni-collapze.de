<?php

declare(strict_types=1);

namespace Primus\Tournament\Controller;


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
        return $this->htmlResponse();
    }

    /**
     * action list
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function listAction(): \Psr\Http\Message\ResponseInterface
    {
        $tournamentTrees = $this->tournamentTreeRepository->findAll();
        $this->view->assign('tournamentTrees', $tournamentTrees);
        return $this->htmlResponse();
    }

    /**
     * action show
     *
     * @param \Primus\Tournament\Domain\Model\TournamentTree $tournamentTree
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function showAction(\Primus\Tournament\Domain\Model\TournamentTree $tournamentTree): \Psr\Http\Message\ResponseInterface
    {
        $this->view->assign('tournamentTree', $tournamentTree);
        return $this->htmlResponse();
    }

    /**
     * action new
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function newAction(): \Psr\Http\Message\ResponseInterface
    {
        return $this->htmlResponse();
    }

    /**
     * action create
     *
     * @param \Primus\Tournament\Domain\Model\TournamentTree $newTournamentTree
     */
    public function createAction(\Primus\Tournament\Domain\Model\TournamentTree $newTournamentTree)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/p/friendsoftypo3/extension-builder/master/en-us/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->tournamentTreeRepository->add($newTournamentTree);
        $this->redirect('list');
    }

    /**
     * action edit
     *
     * @param \Primus\Tournament\Domain\Model\TournamentTree $tournamentTree
     * @TYPO3\CMS\Extbase\Annotation\IgnoreValidation("tournamentTree")
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function editAction(\Primus\Tournament\Domain\Model\TournamentTree $tournamentTree): \Psr\Http\Message\ResponseInterface
    {
        $this->view->assign('tournamentTree', $tournamentTree);
        return $this->htmlResponse();
    }

    /**
     * action update
     *
     * @param \Primus\Tournament\Domain\Model\TournamentTree $tournamentTree
     */
    public function updateAction(\Primus\Tournament\Domain\Model\TournamentTree $tournamentTree)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/p/friendsoftypo3/extension-builder/master/en-us/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->tournamentTreeRepository->update($tournamentTree);
        $this->redirect('list');
    }

    /**
     * action delete
     *
     * @param \Primus\Tournament\Domain\Model\TournamentTree $tournamentTree
     */
    public function deleteAction(\Primus\Tournament\Domain\Model\TournamentTree $tournamentTree)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/p/friendsoftypo3/extension-builder/master/en-us/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->tournamentTreeRepository->remove($tournamentTree);
        $this->redirect('list');
    }

    /**
     * action
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function Action(): \Psr\Http\Message\ResponseInterface
    {
        return $this->htmlResponse();
    }
}
