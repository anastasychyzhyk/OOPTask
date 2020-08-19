<?php
declare(strict_types=1);

namespace App;

class Project
{
    private array $employees;

    public function addEmployee(EmployeeInProject $employee)
    {
        $this->employees[]=$employee;
    }

    public function getSum(): float
    {
        $sum =0;

        foreach ($this->employees as $employee)
        {
            $sum+=$employee->getSalary()->getSum();
        }
        return $sum;
    }
}