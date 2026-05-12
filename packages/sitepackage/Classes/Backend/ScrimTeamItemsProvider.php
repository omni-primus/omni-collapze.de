<?php

namespace WebneoGmbh\Sitepackage\Backend;

use TYPO3\CMS\Core\Database\ConnectionPool;
use TYPO3\CMS\Core\Utility\GeneralUtility;

class ScrimTeamItemsProvider
{
    public function addTeamItems(array &$config): void
    {
        $config['items'] = [
            [
                $this->translate('team.omni'),
                'omni',
            ],
            [
                $this->resolveOpponentTeamLabel($config),
                'opponent',
            ],
        ];
    }

    protected function resolveOpponentTeamLabel(array $config): string
    {
        $seriesId = (int)($config['row']['series'] ?? 0);
        if ($seriesId <= 0) {
            return $this->translate('team.opponent');
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

        $opponentName = trim((string)($row['opponent_team_name'] ?? ''));
        return $opponentName !== '' ? $opponentName : $this->translate('team.opponent');
    }

    protected function translate(string $key): string
    {
        return (string)($GLOBALS['LANG']->sL(
            'LLL:EXT:sitepackage/Resources/Private/Language/locallang_scrim.xlf:' . $key
        ) ?: $key);
    }
}
