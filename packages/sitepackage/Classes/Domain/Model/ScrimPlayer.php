<?php

namespace WebneoGmbh\Sitepackage\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class ScrimPlayer extends AbstractEntity
{
    protected ?ScrimGame $game = null;

    protected string $teamSide = '';

    protected string $position = '';

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

    public function getTeamSide(): string
    {
        return $this->teamSide;
    }

    public function setTeamSide(string $teamSide): void
    {
        $this->teamSide = $teamSide;
    }

    public function getPosition(): string
    {
        return $this->position;
    }

    public function setPosition(string $position): void
    {
        $this->position = $position;
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
        return $this->teamSide === 'red' ? 'Red Side' : 'Blue Side';
    }

    public function getPositionLabel(): string
    {
        return match ($this->position) {
            'jungle' => 'Jungle',
            'mid' => 'Mid',
            'bot' => 'Bot',
            'support' => 'Support',
            default => 'Top',
        };
    }
}
