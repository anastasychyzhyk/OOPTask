<?php
declare(strict_types=1);

namespace App;

class Employee
{
    private string $position;
    private string $name;

    public function __construct(string $position, string $name)
    {
        $this->position=$position;
        $this->name=$name;
    }

    public function getPosition(): string
    {
        return $this->position;
    }

    public function getName(): string
    {
        return $this->name;
    }
}
