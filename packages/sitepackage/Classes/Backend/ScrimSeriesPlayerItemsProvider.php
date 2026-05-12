<?php

namespace WebneoGmbh\Sitepackage\Backend;

use TYPO3\CMS\Core\Database\ConnectionPool;
use TYPO3\CMS\Core\Utility\GeneralUtility;

class ScrimSeriesPlayerItemsProvider
{
    public function addSeriesPlayerItems(array &$config): void
    {
        $gameId = (int)($config['row']['game'] ?? 0);
        if ($gameId <= 0) {
            return;
        }

        $seriesId = $this->resolveSeriesId($gameId);
        if ($seriesId <= 0) {
            return;
        }

        $queryBuilder = GeneralUtility::makeInstance(ConnectionPool::class)
            ->getQueryBuilderForTable('tx_sitepackage_domain_model_scrimseriesplayer');

        $rows = $queryBuilder
            ->select('uid', 'player_name', 'team', 'position')
            ->from('tx_sitepackage_domain_model_scrimseriesplayer')
            ->where(
                $queryBuilder->expr()->eq(
                    'series',
                    $queryBuilder->createNamedParameter($seriesId, \PDO::PARAM_INT)
                ),
                $queryBuilder->expr()->eq(
                    'deleted',
                    $queryBuilder->createNamedParameter(0, \PDO::PARAM_INT)
                ),
                $queryBuilder->expr()->eq(
                    'hidden',
                    $queryBuilder->createNamedParameter(0, \PDO::PARAM_INT)
                )
            )
            ->orderBy('sorting')
            ->addOrderBy('player_name')
            ->executeQuery()
            ->fetchAllAssociative();

        foreach ($rows as $row) {
            $config['items'][] = [
                $this->buildLabel($seriesId, $row),
                (int)$row['uid'],
            ];
        }
    }

    protected function resolveSeriesId(int $gameId): int
    {
        $queryBuilder = GeneralUtility::makeInstance(ConnectionPool::class)
            ->getQueryBuilderForTable('tx_sitepackage_domain_model_scrimgame');

        $row = $queryBuilder
            ->select('series')
            ->from('tx_sitepackage_domain_model_scrimgame')
            ->where(
                $queryBuilder->expr()->eq(
                    'uid',
                    $queryBuilder->createNamedParameter($gameId, \PDO::PARAM_INT)
                )
            )
            ->executeQuery()
            ->fetchAssociative();

        return (int)($row['series'] ?? 0);
    }

    protected function buildLabel(int $seriesId, array $row): string
    {
        $position = match ((string)$row['position']) {
            'jungle' => 'Jungle',
            'mid' => 'Mid',
            'bot' => 'Bot',
            'support' => 'Support',
            default => 'Top',
        };

        $team = $this->resolveTeamName($seriesId, (string)$row['team']);

        return sprintf('%s - %s (%s)', $position, (string)$row['player_name'], $team);
    }

    protected function resolveTeamName(int $seriesId, string $teamKey): string
    {
        if ($teamKey === 'omni') {
            return 'OMNI Falcons';
        }

        $queryBuilder = GeneralUtility::makeInstance(ConnectionPool::class)
            ->getQueryBuilderForTable('tx_sitepackage_domain_model_scrimseries');

        $row = $queryBuilder
            ->select('opponent_team_name')
            ->from('tx_sitepackage_domain_model_scrimseries')
            ->where(
                $queryBuilder->expr()->eq(
                    'uid',
                    $queryBuilder->createNamedParameter($seriesId, \PDO::PARAM_INT)
                )
            )
            ->executeQuery()
            ->fetchAssociative();

        return trim((string)($row['opponent_team_name'] ?? '')) ?: 'Opponent Team';
    }
}
