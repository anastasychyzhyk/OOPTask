<?php
declare(strict_types=1);

namespace App;

final class HoursSalary implements Salary
{
    private float $hoursCount;
    private float $priceForHour;

    public function __construct(float $hoursCount, float $priceForHour)
    {
        $this->hoursCount=$hoursCount;
        $this->priceForHour=$priceForHour;
    }

    public function getSum(): float
    {
        return $this->hoursCount*$this->priceForHour;
    }
}
