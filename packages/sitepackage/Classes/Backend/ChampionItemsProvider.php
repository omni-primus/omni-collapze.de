<?php

namespace WebneoGmbh\Sitepackage\Backend;

class ChampionItemsProvider
{
    public function addChampionItems(array &$config): void
    {
        $champions = require dirname(__DIR__, 2) . '/Configuration/LeagueOfLegends/Champions.php';

        foreach ($champions as $champion) {
            $config['items'][] = [
                $champion,
                $champion,
            ];
        }
    }
}
