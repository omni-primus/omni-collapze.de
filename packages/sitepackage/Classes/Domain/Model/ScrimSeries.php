<?php

namespace WebneoGmbh\Sitepackage\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;

class ScrimSeries extends AbstractEntity
{
    protected ?\DateTime $scrimDate = null;

    protected int $numberOfGames = 0;

    protected string $opponentTeamName = '';

    protected string $opponentTeamInformation = '';

    /**
     * @var ObjectStorage<ScrimGame>
     */
    protected ObjectStorage $games;

    /**
     * @var ObjectStorage<ScrimSeriesPlayer>
     */
    protected ObjectStorage $seriesPlayers;

    public function __construct()
    {
        $this->games = new ObjectStorage();
        $this->seriesPlayers = new ObjectStorage();
    }

    public function getScrimDate(): ?\DateTime
    {
        return $this->scrimDate;
    }

    public function setScrimDate(?\DateTime $scrimDate): void
    {
        $this->scrimDate = $scrimDate;
    }

    public function getNumberOfGames(): int
    {
        return $this->numberOfGames;
    }

    public function setNumberOfGames(int $numberOfGames): void
    {
        $this->numberOfGames = $numberOfGames;
    }

    public function getOpponentTeamName(): string
    {
        return $this->opponentTeamName;
    }

    public function setOpponentTeamName(string $opponentTeamName): void
    {
        $this->opponentTeamName = $opponentTeamName;
    }

    public function getOpponentTeamInformation(): string
    {
        return $this->opponentTeamInformation;
    }

    public function setOpponentTeamInformation(string $opponentTeamInformation): void
    {
        $this->opponentTeamInformation = $opponentTeamInformation;
    }

    /**
     * @return ObjectStorage<ScrimGame>
     */
    public function getGames(): ObjectStorage
    {
        return $this->games;
    }

    /**
     * @param ObjectStorage<ScrimGame> $games
     */
    public function setGames(ObjectStorage $games): void
    {
        $this->games = $games;
    }

    /**
     * @return ObjectStorage<ScrimSeriesPlayer>
     */
    public function getSeriesPlayers(): ObjectStorage
    {
        return $this->seriesPlayers;
    }

    /**
     * @param ObjectStorage<ScrimSeriesPlayer> $seriesPlayers
     */
    public function setSeriesPlayers(ObjectStorage $seriesPlayers): void
    {
        $this->seriesPlayers = $seriesPlayers;
    }

    public function getOwnTeamName(): string
    {
        return 'OMNI Falcons';
    }

    public function resolveTeamName(string $teamKey): string
    {
        return $teamKey === 'opponent' ? $this->getOpponentTeamName() : $this->getOwnTeamName();
    }
}
