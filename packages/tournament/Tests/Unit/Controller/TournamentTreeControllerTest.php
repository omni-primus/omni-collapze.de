<?php

declare(strict_types=1);

namespace Primus\Tournament\Tests\Unit\Controller;

use PHPUnit\Framework\MockObject\MockObject;
use TYPO3\TestingFramework\Core\AccessibleObjectInterface;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;
use TYPO3Fluid\Fluid\View\ViewInterface;

/**
 * Test case
 *
 * @author Primus <primus@omni-collapze.de>
 */
class TournamentTreeControllerTest extends UnitTestCase
{
    /**
     * @var \Primus\Tournament\Controller\TournamentTreeController|MockObject|AccessibleObjectInterface
     */
    protected $subject;

    protected function setUp(): void
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder($this->buildAccessibleProxy(\Primus\Tournament\Controller\TournamentTreeController::class))
            ->onlyMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown(): void
    {
        parent::tearDown();
    }



    /**
     * @test
     */
    public function listActionFetchesAllTournamentTreesFromRepositoryAndAssignsThemToView(): void
    {
        $allTournamentTrees = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $tournamentTreeRepository = $this->getMockBuilder(\::class)
            ->onlyMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $tournamentTreeRepository->expects(self::once())->method('findAll')->will(self::returnValue($allTournamentTrees));
        $this->subject->_set('tournamentTreeRepository', $tournamentTreeRepository);

        $view = $this->getMockBuilder(ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('tournamentTrees', $allTournamentTrees);
        $this->subject->_set('view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenTournamentTreeToView(): void
    {
        $tournamentTree = new \Primus\Tournament\Domain\Model\TournamentTree();

        $view = $this->getMockBuilder(ViewInterface::class)->getMock();
        $this->subject->_set('view', $view);
        $view->expects(self::once())->method('assign')->with('tournamentTree', $tournamentTree);

        $this->subject->showAction($tournamentTree);
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenTournamentTreeToTournamentTreeRepository(): void
    {
        $tournamentTree = new \Primus\Tournament\Domain\Model\TournamentTree();

        $tournamentTreeRepository = $this->getMockBuilder(\::class)
            ->onlyMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $tournamentTreeRepository->expects(self::once())->method('add')->with($tournamentTree);
        $this->subject->_set('tournamentTreeRepository', $tournamentTreeRepository);

        $this->subject->createAction($tournamentTree);
    }

    /**
     * @test
     */
    public function editActionAssignsTheGivenTournamentTreeToView(): void
    {
        $tournamentTree = new \Primus\Tournament\Domain\Model\TournamentTree();

        $view = $this->getMockBuilder(ViewInterface::class)->getMock();
        $this->subject->_set('view', $view);
        $view->expects(self::once())->method('assign')->with('tournamentTree', $tournamentTree);

        $this->subject->editAction($tournamentTree);
    }


    /**
     * @test
     */
    public function updateActionUpdatesTheGivenTournamentTreeInTournamentTreeRepository(): void
    {
        $tournamentTree = new \Primus\Tournament\Domain\Model\TournamentTree();

        $tournamentTreeRepository = $this->getMockBuilder(\::class)
            ->onlyMethods(['update'])
            ->disableOriginalConstructor()
            ->getMock();

        $tournamentTreeRepository->expects(self::once())->method('update')->with($tournamentTree);
        $this->subject->_set('tournamentTreeRepository', $tournamentTreeRepository);

        $this->subject->updateAction($tournamentTree);
    }

    /**
     * @test
     */
    public function deleteActionRemovesTheGivenTournamentTreeFromTournamentTreeRepository(): void
    {
        $tournamentTree = new \Primus\Tournament\Domain\Model\TournamentTree();

        $tournamentTreeRepository = $this->getMockBuilder(\::class)
            ->onlyMethods(['remove'])
            ->disableOriginalConstructor()
            ->getMock();

        $tournamentTreeRepository->expects(self::once())->method('remove')->with($tournamentTree);
        $this->subject->_set('tournamentTreeRepository', $tournamentTreeRepository);

        $this->subject->deleteAction($tournamentTree);
    }
}
