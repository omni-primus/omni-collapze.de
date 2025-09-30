<?php

namespace WebneoGmbh\Sitepackage\Controller;

use http\Exception\BadUrlException;
use TYPO3\CMS\Core\SysLog\Error;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class PrimeLeagueController extends ActionController {
    public function showAction()
    {
        if ($this->settings['primeLeagueUrl']) {
            $url = $this->settings['primeLeagueUrl'];
        }
        else {
            throw new BadUrlException('No Url in Settings');
        }

        try {
            $result = $this->fetchHtml($url);
            $this->view->assign('primeLeagueResult', $result);
        } catch (\Exception $e) {
            echo 'Fehler: ' . $e->getMessage();
        }
        return $this->htmlResponse();
    }

    function fetchHtml($url) : array {
        $result = [];
        if($url) {
            $html = file_get_contents($url);
            $dom = new \DOMDocument();
            $dom->loadHTML($html);
            $xpath = new \DOMXPath($dom);
            if($this->settings['tableType'] == 'group') {
                $rows = $xpath->query('//table[contains(@class, "table-ranking")]//tr');

                foreach ($rows as $row) {
                    $cells = $row->getElementsByTagName('td');
                    if($cells->length == 0) {
                        continue;
                    }

                    $teamdata = [
                        'rank' => trim($cells->item(0)->textContent),
                        'name' => preg_replace('/\R.*/', '', trim($cells->item(1)->textContent)),
                        'score' => trim($cells->item(2)->textContent),
                    ];
                    $result[] = $teamdata;
                }
            }
            else if($this->settings['tableType'] == 'playoff') {
                $rows = $xpath->query('//table[contains(@class, "table table-fixed-single")]//tr');
                foreach ($rows as $row) {
                    $content = $row->textContent;
                    $parts = preg_split('/\R+/', $content);

                    $clean = array_values(array_filter(array_map('trim', $parts)));

                    $match = [
                        'team1' => $clean[0] ?? null,
                        'team2' => $clean[2] ?? null,
                        'score' => $clean[1] ?? null
                    ];
                    if (!empty($match['score']) && strpos($match['score'], ':') !== false) {
                        [$score1, $score2] = explode(':', $match['score'], 2);
                        $match['score_team1'] = (int) $score1;
                        $match['score_team2'] = (int) $score2;
                    }
                    $result[] = $match;
                }
            }
        }
        return $result;
    }
}
