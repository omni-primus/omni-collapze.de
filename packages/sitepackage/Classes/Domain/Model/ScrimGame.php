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

    protected string $blueBan1 = '';

    protected string $blueBan2 = '';

    protected string $blueBan3 = '';

    protected string $redBan1 = '';

    protected string $redBan2 = '';

    protected string $redBan3 = '';

    protected string $bluePick1 = '';

    protected string $bluePick2 = '';

    protected string $bluePick3 = '';

    protected string $redPick1 = '';

    protected string $redPick2 = '';

    protected string $redPick3 = '';

    protected string $blueBan4 = '';

    protected string $blueBan5 = '';

    protected string $redBan4 = '';

    protected string $redBan5 = '';

    protected string $bluePick4 = '';

    protected string $bluePick5 = '';

    protected string $redPick4 = '';

    protected string $redPick5 = '';

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

    public function getBlueBan1(): string
    {
        return $this->blueBan1;
    }

    public function setBlueBan1(string $blueBan1): void
    {
        $this->blueBan1 = $blueBan1;
    }

    public function getBlueBan2(): string
    {
        return $this->blueBan2;
    }

    public function setBlueBan2(string $blueBan2): void
    {
        $this->blueBan2 = $blueBan2;
    }

    public function getBlueBan3(): string
    {
        return $this->blueBan3;
    }

    public function setBlueBan3(string $blueBan3): void
    {
        $this->blueBan3 = $blueBan3;
    }

    public function getRedBan1(): string
    {
        return $this->redBan1;
    }

    public function setRedBan1(string $redBan1): void
    {
        $this->redBan1 = $redBan1;
    }

    public function getRedBan2(): string
    {
        return $this->redBan2;
    }

    public function setRedBan2(string $redBan2): void
    {
        $this->redBan2 = $redBan2;
    }

    public function getRedBan3(): string
    {
        return $this->redBan3;
    }

    public function setRedBan3(string $redBan3): void
    {
        $this->redBan3 = $redBan3;
    }

    public function getBluePick1(): string
    {
        return $this->bluePick1;
    }

    public function setBluePick1(string $bluePick1): void
    {
        $this->bluePick1 = $bluePick1;
    }

    public function getBluePick2(): string
    {
        return $this->bluePick2;
    }

    public function setBluePick2(string $bluePick2): void
    {
        $this->bluePick2 = $bluePick2;
    }

    public function getBluePick3(): string
    {
        return $this->bluePick3;
    }

    public function setBluePick3(string $bluePick3): void
    {
        $this->bluePick3 = $bluePick3;
    }

    public function getRedPick1(): string
    {
        return $this->redPick1;
    }

    public function setRedPick1(string $redPick1): void
    {
        $this->redPick1 = $redPick1;
    }

    public function getRedPick2(): string
    {
        return $this->redPick2;
    }

    public function setRedPick2(string $redPick2): void
    {
        $this->redPick2 = $redPick2;
    }

    public function getRedPick3(): string
    {
        return $this->redPick3;
    }

    public function setRedPick3(string $redPick3): void
    {
        $this->redPick3 = $redPick3;
    }

    public function getBlueBan4(): string
    {
        return $this->blueBan4;
    }

    public function setBlueBan4(string $blueBan4): void
    {
        $this->blueBan4 = $blueBan4;
    }

    public function getBlueBan5(): string
    {
        return $this->blueBan5;
    }

    public function setBlueBan5(string $blueBan5): void
    {
        $this->blueBan5 = $blueBan5;
    }

    public function getRedBan4(): string
    {
        return $this->redBan4;
    }

    public function setRedBan4(string $redBan4): void
    {
        $this->redBan4 = $redBan4;
    }

    public function getRedBan5(): string
    {
        return $this->redBan5;
    }

    public function setRedBan5(string $redBan5): void
    {
        $this->redBan5 = $redBan5;
    }

    public function getBluePick4(): string
    {
        return $this->bluePick4;
    }

    public function setBluePick4(string $bluePick4): void
    {
        $this->bluePick4 = $bluePick4;
    }

    public function getBluePick5(): string
    {
        return $this->bluePick5;
    }

    public function setBluePick5(string $bluePick5): void
    {
        $this->bluePick5 = $bluePick5;
    }

    public function getRedPick4(): string
    {
        return $this->redPick4;
    }

    public function setRedPick4(string $redPick4): void
    {
        $this->redPick4 = $redPick4;
    }

    public function getRedPick5(): string
    {
        return $this->redPick5;
    }

    public function setRedPick5(string $redPick5): void
    {
        $this->redPick5 = $redPick5;
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
