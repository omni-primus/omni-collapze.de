<?php

namespace WebneoGmbh\Sitepackage\Controller;

use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class PrimeLeagueController extends ActionController {
    public function showAction()
    {
        if ($this->settings['primeLeagueJSON']) {
            $json = $this->settings['primeLeagueJSON'];
        }
        else {
            return $this->htmlResponse();
        }

        try {
            $tableType = (string) ($this->settings['tableType'] ?? 'group');
            $result = $tableType === 'history'
                ? $this->getMatchHistory($json)
                : $this->fetchHtml($json);
            $assignments = [
                'primeLeagueResult' => $result,
            ];

            if ($tableType === 'playoff') {
                $assignments['primeLeagueTree'] = $this->buildPlayoffTree($result);
                $assignments['hasSpecialPlayoffResult'] = count(array_filter($result, static function (array $match): bool {
                    return !empty($match['hasSpecialResult']);
                })) > 0;
            }

            if ($tableType === 'history') {
                $assignments['hasSpecialHistoryResult'] = count(array_filter($result, static function (array $match): bool {
                    return !empty($match['hasSpecialResult']);
                })) > 0;
            }

            $this->view->assignMultiple($assignments);
        } catch (\Exception $e) {
            echo 'Fehler: ' . $e->getMessage();
        }
        return $this->htmlResponse();
    }

    function fetchHtml($json) : array {
        $result = [];

        if (!$json) {
            return $result;
        }

        $data = json_decode($json, true);
        if (json_last_error() !== JSON_ERROR_NONE || !is_array($data)) {
            throw new \InvalidArgumentException('Invalid JSON provided');
        }

        if ($this->settings['tableType'] == 'group') {
            foreach ($data as $entry) {
                if (!is_array($entry)) {
                    continue;
                }

                $teamdata = [
                    'rank' => trim((string) ($entry['rank'] ?? $entry['place'] ?? '')),
                    'name' => trim((string) ($entry['name'] ?? $entry['teamName'] ?? '')),
                    'score' => trim((string) ($entry['score'] ?? '')),
                ];

                if ($teamdata['rank'] === '' && $teamdata['name'] === '' && $teamdata['score'] === '') {
                    continue;
                }

                $result[] = $teamdata;
            }
        }
        else if ($this->settings['tableType'] == 'playoff') {
            foreach ($data as $entry) {
                if (!is_array($entry)) {
                    continue;
                }

                $match = [
                    'bracket' => trim((string) ($entry['bracket'] ?? '')),
                    'round' => (int) ($entry['round'] ?? 0),
                    'match' => (int) ($entry['match'] ?? 0),
                    'bestof' => (int) ($entry['bestof'] ?? 0),
                    'roundName' => trim((string) ($entry['roundName'] ?? '')),
                    'team1' => trim((string) ($entry['team1'] ?? '')),
                    'team2' => trim((string) ($entry['team2'] ?? '')),
                    'score' => trim((string) ($entry['score'] ?? ''))
                ];

                if (!empty($match['score']) && strpos($match['score'], ':') !== false) {
                    [$score1, $score2] = explode(':', $match['score'], 2);
                    $match['score_team1'] = (int) $score1;
                    $match['score_team2'] = (int) $score2;
                }

                $match['hasSpecialResult'] = strpos($match['score'], '*') !== false;

                if (
                    $match['bracket'] === '' &&
                    $match['round'] === 0 &&
                    $match['team1'] === '' &&
                    $match['team2'] === '' &&
                    $match['score'] === ''
                ) {
                    continue;
                }

                $result[] = $match;
            }
        }

        return $result;
    }

    protected function getMatchHistory(string $json): array
    {
        $result = [];

        if (!$json) {
            return $result;
        }

        $data = json_decode($json, true);
        if (json_last_error() !== JSON_ERROR_NONE || !is_array($data)) {
            throw new \InvalidArgumentException('Invalid history JSON provided');
        }

        foreach ($data as $entry) {
            if (!is_array($entry)) {
                continue;
            }

            $match = [
                'team1' => trim((string) ($entry['team1'] ?? '')),
                'team2' => trim((string) ($entry['team2'] ?? '')),
                'score' => trim((string) ($entry['score'] ?? '')),
                'date' => trim((string) ($entry['date'] ?? '')),
                'bestof' => trim((string) ($entry['bestof'] ?? '')),
                'stage' => trim((string) ($entry['stage'] ?? ''))
            ];

            if (!empty($match['score']) && strpos($match['score'], ':') !== false) {
                [$score1, $score2] = explode(':', $match['score'], 2);
                $match['score_team1'] = (int) $score1;
                $match['score_team2'] = (int) $score2;
            }

            $match['hasSpecialResult'] = strpos($match['score'], '*') !== false;

            if (
                $match['team1'] === '' &&
                $match['team2'] === '' &&
                $match['score'] === '' &&
                $match['bestof'] === '' &&
                $match['stage'] === '' &&
                $match['date'] === ''
            ) {
                continue;
            }

            $result[] = $match;
        }
        return $result;
    }

    protected function buildPlayoffTree(array $matches): array
    {
        $tree = [
            'upper' => [
                'label' => 'Upper Bracket',
                'rounds' => [],
            ],
            'lower' => [
                'label' => 'Lower Bracket',
                'rounds' => [],
            ]
        ];

        foreach ($matches as $match) {
            $bracket = strtolower((string) ($match['bracket'] ?? ''));
            if (!isset($tree[$bracket])) {
                $tree[$bracket] = [
                    'label' => ucfirst($bracket),
                    'rounds' => [],
                ];
            }

            $roundNumber = (int) ($match['round'] ?? 0);
            $roundKey = $roundNumber > 0 ? $roundNumber : count($tree[$bracket]['rounds']) + 1;

            if (!isset($tree[$bracket]['rounds'][$roundKey])) {
                $tree[$bracket]['rounds'][$roundKey] = [
                    'round' => $roundKey,
                    'roundName' => $match['roundName'] ?: $this->getDefaultRoundName($bracket, $roundKey),
                    'matches' => [],
                ];
            }

            $tree[$bracket]['rounds'][$roundKey]['matches'][] = $match;
        }

        foreach ($tree as $bracketKey => $bracketData) {
            ksort($tree[$bracketKey]['rounds']);

            foreach ($tree[$bracketKey]['rounds'] as $roundKey => $roundData) {
                usort($tree[$bracketKey]['rounds'][$roundKey]['matches'], static function (array $left, array $right): int {
                    return ($left['match'] ?? 0) <=> ($right['match'] ?? 0);
                });
            }

            $tree[$bracketKey]['rounds'] = array_values($tree[$bracketKey]['rounds']);
        }

        return $tree;
    }

    protected function getDefaultRoundName(string $bracket, int $round): string
    {
        return match ($bracket) {
            'upper' => 'Upper Bracket Round ' . $round,
            'lower' => 'Lower Bracket Round ' . $round,
            default => ucfirst($bracket) . ' Round ' . $round,
        };
    }
}
