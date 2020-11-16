<?php


class User
{
    private $name;
    private $surname;
    private $birthday;
    private $age;
    public function __construct($name,$surname,$birthday)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->birthday = $birthday;
        $this->age = $this->calculateAge($birthday);
    }
    public function getName()
    {
        return $this->name;
    }
    public function getAge()
    {
        return $this->age;
    }
    public function getBirthday()
    {
        return $this->birthday;
    }
    private function calculateAge($birthday)
    {
        $date1 = new DateTime($birthday);
        $date2 = new DateTime(date('Y/m/d'));
        $interval = date_diff($date1, $date2);
        return (int)($interval->format('%a') / 365);
    }
}