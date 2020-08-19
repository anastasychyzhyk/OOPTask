<?php
declare(strict_types=1);

namespace App;


class EmployeeInProject
{
    private Employee $employee;
    private Salary $salary;

    public function __construct(Employee $employee, Salary $salary)
    {
        $this->employee = $employee;
        $this->salary = $salary;
    }

    public function getSalary(): Salary
    {
        return $this->salary;
    }

    public function getEmployee(): Employee
    {
        return $this->employee;
    }
}