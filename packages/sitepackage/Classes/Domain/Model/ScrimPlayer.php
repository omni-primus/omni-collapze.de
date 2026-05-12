<?php

namespace WebneoGmbh\Sitepackage\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class ScrimPlayer extends AbstractEntity
{
    protected ?ScrimGame $game = null;

    protected ?ScrimSeriesPlayer $seriesPlayer = null;

    protected string $championName = '';

    protected int $kills = 0;

    protected int $deaths = 0;

    protected int $assists = 0;

    protected int $gold = 0;

    protected int $minions = 0;

    public function getGame(): ?ScrimGame
    {
        return $this->game;
    }

    public function setGame(?ScrimGame $game): void
    {
        $this->game = $game;
    }

    public function getSeriesPlayer(): ?ScrimSeriesPlayer
    {
        return $this->seriesPlayer;
    }

    public function setSeriesPlayer(?ScrimSeriesPlayer $seriesPlayer): void
    {
        $this->seriesPlayer = $seriesPlayer;
    }

    public function getPlayerName(): string
    {
        return $this->seriesPlayer ? $this->seriesPlayer->getPlayerName() : '';
    }

    public function getPosition(): string
    {
        return $this->seriesPlayer ? $this->seriesPlayer->getPosition() : '';
    }

    public function getTeam(): string
    {
        return $this->seriesPlayer ? $this->seriesPlayer->getTeam() : '';
    }

    public function getChampionName(): string
    {
        return $this->championName;
    }

    public function setChampionName(string $championName): void
    {
        $this->championName = $championName;
    }

    public function getKills(): int
    {
        return $this->kills;
    }

    public function setKills(int $kills): void
    {
        $this->kills = $kills;
    }

    public function getDeaths(): int
    {
        return $this->deaths;
    }

    public function setDeaths(int $deaths): void
    {
        $this->deaths = $deaths;
    }

    public function getAssists(): int
    {
        return $this->assists;
    }

    public function setAssists(int $assists): void
    {
        $this->assists = $assists;
    }

    public function getGold(): int
    {
        return $this->gold;
    }

    public function setGold(int $gold): void
    {
        $this->gold = $gold;
    }

    public function getMinions(): int
    {
        return $this->minions;
    }

    public function setMinions(int $minions): void
    {
        $this->minions = $minions;
    }

    public function getTeamSideLabel(): string
    {
        if (!$this->game || !$this->seriesPlayer) {
            return '';
        }

        $team = $this->seriesPlayer->getTeam();
        if ($team === $this->game->getBlueSideTeam()) {
            return 'Blue Side';
        }

        if ($team === $this->game->getRedSideTeam()) {
            return 'Red Side';
        }

        return '';
    }

    public function getPositionLabel(): string
    {
        return $this->seriesPlayer ? $this->seriesPlayer->getPositionLabel() : '';
    }

    public function getTeamName(): string
    {
        return $this->seriesPlayer ? $this->seriesPlayer->getTeamName() : '';
    }
}
