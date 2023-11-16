<?php

namespace Primus\Tournament\DataProcessing;

use http\Exception\RuntimeException;
use TYPO3\CMS\Core\Exception;
use TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer;
use TYPO3\CMS\Frontend\ContentObject\DataProcessorInterface;

class DataEditor {
    private $apiKey = '5K4yWSHxlDVGIzqmOIpoDLCIDLoYzwQaFmyF55zk';
    private $username = 'omni_primus';
    private $matchesUrl = '@api.challonge.com/v1/tournaments/3ukiiumf/matches/';

    public function updateMatch(string $matchId, int $player1Id, int $player2Id, int $scorePlayer1, int $scorePlayer2) {
        $url = 'https://' . $this->username . ":" . $this->apiKey . $this->matchesUrl . $matchId . ".json";
        $urlNew = 'https://webneo.free.beeceptor.com';
        $curl = curl_init($url);
        if ($scorePlayer1 > $scorePlayer2) {
            $winnerId = $player1Id;
        }
        elseif ($scorePlayer1 < $scorePlayer2) {
            $winnerId = $player2Id;
        }

        if($winnerId) {
            $json = '{"match": {"scores_csv":"' . $scorePlayer1 . '-' . $scorePlayer2 . '",' . '"winner_id":' . $winnerId . '}}';

            $curlHeader[] = 'Content-Type:application/json';
            curl_setopt($curl, CURLOPT_HTTPHEADER, $curlHeader);
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
            curl_setopt($curl, CURLOPT_POSTFIELDS, $json);
            curl_setopt($curl, CURLOPT_HEADER, 0);
            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($curl);
        }
    }
}