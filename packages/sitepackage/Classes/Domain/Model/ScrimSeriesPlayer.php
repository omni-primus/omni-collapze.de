<?php

namespace WebneoGmbh\Sitepackage\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class ScrimSeriesPlayer extends AbstractEntity
{
    protected ?ScrimSeries $series = null;

    protected string $playerName = '';

    protected string $team = 'omni';

    protected string $position = 'top';

    public function getSeries(): ?ScrimSeries
    {
        return $this->series;
    }

    public function setSeries(?ScrimSeries $series): void
    {
        $this->series = $series;
    }

    public function getPlayerName(): string
    {
        return $this->playerName;
    }

    public function setPlayerName(string $playerName): void
    {
        $this->playerName = $playerName;
    }

    public function getTeam(): string
    {
        return $this->team;
    }

    public function setTeam(string $team): void
    {
        $this->team = $team;
    }

    public function getPosition(): string
    {
        return $this->position;
    }

    public function setPosition(string $position): void
    {
        $this->position = $position;
    }

    public function getTeamName(): string
    {
        return $this->series ? $this->series->resolveTeamName($this->team) : $this->team;
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

    public function getBackendLabel(): string
    {
        return sprintf('%s - %s (%s)', $this->getPositionLabel(), $this->getPlayerName(), $this->getTeamName());
    }
}
