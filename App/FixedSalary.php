<?php
declare(strict_types=1);

namespace App;

final class FixedSalary implements Salary
{
    private float $salary;

    public function __construct(float $salary)
    {
        $this->salary=$salary;
    }

    public function getSum(): float
    {
        return $this->salary;
    }
}