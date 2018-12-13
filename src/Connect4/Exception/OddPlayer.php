<?php

declare(strict_types=1);

namespace App\Connect4\Exception;

use RuntimeException;

final class OddPlayer extends RuntimeException
{
    public function __construct()
    {
        parent::__construct('Le nombre de joueur est impair ! Veuillez choisir un nombre de joueur pair.');
    }
}