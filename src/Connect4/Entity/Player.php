<?php

declare(strict_types=1);

namespace App\Connect4\Entity;

final class Player implements Participant
{

    private $id;
    private $name;

    public function __construct(int $id)
    {
        $this->id = $id;
    }

    public function id(): int
    {
      return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }
}