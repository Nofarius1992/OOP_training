<?php
    require_once 'User.php';
    $user1 = new User('Tolik','Prozhoga','1992/02/24');
    echo $user1->getName();
    echo $user1->getAge();
    require_once 'Employee.php';
    $employee1 = new Employee('Yaroslav','Likin','1990/21/10',7000);
    echo $employee->getSalary();
    