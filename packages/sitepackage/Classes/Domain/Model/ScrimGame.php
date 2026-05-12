<?php

namespace WebneoGmbh\Sitepackage\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;

class ScrimGame extends AbstractEntity
{
    protected ?ScrimSeries $series = null;

    protected int $sortingForeign = 0;

    protected string $title = '';

    protected string $duration = '';

    protected string $blueSideTeam = '';

    protected string $redSideTeam = '';

    protected string $winner = '';

    /**
     * @var ObjectStorage<ScrimPlayer>
     */
    protected ObjectStorage $players;

    public function __construct()
    {
        $this->players = new ObjectStorage();
    }

    public function getSeries(): ?ScrimSeries
    {
        return $this->series;
    }

    public function setSeries(?ScrimSeries $series): void
    {
        $this->series = $series;
    }

    public function getSortingForeign(): int
    {
        return $this->sortingForeign;
    }

    public function setSortingForeign(int $sortingForeign): void
    {
        $this->sortingForeign = $sortingForeign;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getDuration(): string
    {
        return $this->duration;
    }

    public function setDuration(string $duration): void
    {
        $this->duration = $duration;
    }

    public function getBlueSideTeam(): string
    {
        return $this->blueSideTeam;
    }

    public function setBlueSideTeam(string $blueSideTeam): void
    {
        $this->blueSideTeam = $blueSideTeam;
    }

    public function getRedSideTeam(): string
    {
        return $this->redSideTeam;
    }

    public function setRedSideTeam(string $redSideTeam): void
    {
        $this->redSideTeam = $redSideTeam;
    }

    public function getWinner(): string
    {
        return $this->winner;
    }

    public function setWinner(string $winner): void
    {
        $this->winner = $winner;
    }

    /**
     * @return ObjectStorage<ScrimPlayer>
     */
    public function getPlayers(): ObjectStorage
    {
        return $this->players;
    }

    /**
     * @param ObjectStorage<ScrimPlayer> $players
     */
    public function setPlayers(ObjectStorage $players): void
    {
        $this->players = $players;
    }

    public function getBlueSideTeamName(): string
    {
        return $this->series ? $this->series->resolveTeamName($this->blueSideTeam) : $this->blueSideTeam;
    }

    public function getRedSideTeamName(): string
    {
        return $this->series ? $this->series->resolveTeamName($this->redSideTeam) : $this->redSideTeam;
    }

    public function getWinnerName(): string
    {
        return $this->series ? $this->series->resolveTeamName($this->winner) : $this->winner;
    }
}
