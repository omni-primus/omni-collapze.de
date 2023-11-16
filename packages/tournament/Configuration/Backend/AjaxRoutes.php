<?php

use Primus\Tournament\Controller\TournamentController;

return [
    'tournament_update' => [
        'path' => '/tournament/update-match',
        'target' => TournamentController::class . '::editAction',
    ],
];