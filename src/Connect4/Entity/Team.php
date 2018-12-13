<?php

declare(strict_types=1);

namespace App\Connect4\Entity;

final class Team
{

  private const YELLOW = 'yellow';
  private const RED = 'red';
  private $color;

  private function __construct(string $color)
  {
    $this->color = $color;
  }
  public function __toString(): string
  {
    return $this->color;
  }

  public static function createYellow(): Team
  {
    return new self(self::YELLOW);
  }

  public static function createRed(): Team
  {
    return new self(self::RED);
  }

}