<?php

declare(strict_types=1);


use App\Connect4\Factory\Game;
use Support\Factory;
use Support\Renderer;
use Support\Service\ConnectFourGame as Connect4;
use Support\Service\PseudoRandomValue;
use Support\Service\RandomValue;
use Zend\ServiceManager\Factory\InvokableFactory;

return [
    'games' => [
        'connect4' => Service\ConnectFourGame::class,
    ],
    'service_manager' => [
        'factories' => [
            Renderer\Output::class => Factory\Renderer\Output::class,
            Connect4::class => Factory\Service\ConnectFourGame::class,
            // InvokableFactory can be used when the service does not need any constructor argument
            PseudoRandomValue::class => InvokableFactory::class,
        ],
        'aliases' => [
            RandomValue::class => PseudoRandomValue::class,
        ],
    ]
];