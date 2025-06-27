<?php

namespace WebneoGmbh\Sitepackage\Controller;

use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use function Safe\ps_add_pdflink;

class PrimeLeagueController extends ActionController {
    public function showAction()
    {
        $url = 'https://www.primeleague.gg/de/leagues/prm/3187-summer-split-202425/group/509-gruppenphase/5660-gruppe-5-20';

        try {
            $teams = $this->fetchHtml($url);
            $this->view->assign('primeLeagueTable', $teams);
        } catch (\Exception $e) {
            echo 'Fehler: ' . $e->getMessage();
        }
        return $this->htmlResponse();
    }

    function fetchHtml($url) {
        if($url) {
            $html = file_get_contents($url);
            $dom = new \DOMDocument();
            $dom->loadHTML($html);
            $xpath = new \DOMXPath($dom);
            $rows = $xpath->query('//table[contains(@class, "table-ranking")]//tr');

            $teams = [];

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
                $teams[] = $teamdata;
            }
        }
        return $teams;
    }
}
