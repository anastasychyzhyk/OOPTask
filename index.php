<?php
declare(strict_types=1);


namespace App;

spl_autoload_register(function (string $className) {
    require sprintf('./%s.php', $className);
});

$project = new Project();
$project->addEmployee(createFixedEmployee('Designer', 'Ivanov Ivan Ivanovich', 3000));
$project->addEmployee(createHoursEmployee('Senior Developer', 'Us Petr Ivanovich', 65, 10));
$project->addEmployee(createFixedEmployee('Middle Developer', 'Kot Anton Petrovich', 1000));
$project->addEmployee(createFixedEmployee('Middle Developer', 'Semenov Igor Victorovich', 1000));
$project->addEmployee(createHoursEmployee('Layout Designer', 'Blinov Oleg Antonovich', 120, 5));

echo $project->getSum();

function createFixedEmployee(string $position, string $name, float $salary): EmployeeInProject
{
    return new EmployeeInProject(new Employee($position, $name), new FixedSalary($salary));
}

function createHoursEmployee(string $position, string $name, float $hoursCount, float $priceForHour): EmployeeInProject
{
    return new EmployeeInProject(new Employee($position, $name), new HoursSalary($hoursCount, $priceForHour));
}