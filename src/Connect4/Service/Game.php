<?php

declare(strict_types=1);

namespace App\Connect4\Service;

use Support\Renderer\Output;

interface Game
{
  public function run(): Output;
}