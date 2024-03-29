<?php

namespace Primus\Tournament\DataProcessing;

use http\Exception\RuntimeException;
use TYPO3\CMS\Core\Exception;
use TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer;
use TYPO3\CMS\Frontend\ContentObject\DataProcessorInterface;

class Table {
    private $apiKey = '5K4yWSHxlDVGIzqmOIpoDLCIDLoYzwQaFmyF55zk';
    private $username = 'omni_primus';
    private $tournamentUrl = '@api.challonge.com/v1/tournaments/3ukiiumf.json';
    private $matchesUrl = '@api.challonge.com/v1/tournaments/3ukiiumf/matches.json';
    private $playerUrl = '@api.challonge.com/v1/tournaments/3ukiiumf/participants.json';

    public function getTournament():array {

        $apiUrl = 'https://' . $this->username . ":" . $this->apiKey . $this->tournamentUrl;
        $json = file_get_contents($apiUrl);
        if(!$json) {
            throw new Exception("API not available");
        }
        elseif($json == "") {
            throw new Exception("Request to API got an empty body");
        }

        $arr = \GuzzleHttp\json_decode($json, true);
        return $arr;
    }

    public function getMatches():array {
        $apiUrl = 'https://' . $this->username . ":" . $this->apiKey . $this->matchesUrl;
        $json = file_get_contents($apiUrl);
        if(!$json) {
            throw new Exception("API not available");
        }
        elseif($json == "") {
            throw new Exception("Request to API got an empty body");
        }

        $arr = \GuzzleHttp\json_decode($json, true);

        //split score so we can read in template
        for($i=0; $i < sizeof($arr); $i++) {
            $score = $arr[$i]["match"]["scores_csv"];
            $scores = preg_split("[-]", $score);
            $arr[$i]["match"]["scorePlayer1"] = $scores[0];
            $arr[$i]["match"]["scorePlayer2"] = $scores[1];
        }
        return $arr;
    }
    public function getRoundCount(array $matches):int {
        return sizeof($matches);
    }

    public function getRoundArray(array $matches):array {
        $roundArray = [];
        for($i = 0; $i < count($matches); $i++) {
            if($roundArray[$matches[$i]["match"]["round"]]) {
                array_push($roundArray[$matches[$i]["match"]["round"]], $matches[$i]);
            }
            else {
                $roundArray[$matches[$i]["match"]["round"]] = array($matches[$i]);
            }
        }
        return $roundArray;
    }

    public function getPlayerNames():array {

        $apiUrl = 'https://' . $this->username . ":" . $this->apiKey . $this->playerUrl;
        $json = file_get_contents($apiUrl);
        $playerArr = \GuzzleHttp\json_decode($json, true);
        $newPlayerArr = [];

        for($i = 0;$i < count($playerArr);$i++) {
            $newPlayerArr[$playerArr[$i]["participant"]["id"]] = $playerArr[$i]["participant"]["display_name"];
        }

        return $newPlayerArr;
    }
}