<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Tournament API',
    'description' => 'Makes it possible to create tournaments and show a tournament tree',
    'category' => 'services',
    'author' => 'OMNI Primus',
    'author_email' => 'primus@omni-collapze.de',
    'state' => 'alpha',
    'clearCacheOnLoad' => 0,
    'version' => '@dev',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-11.5.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
