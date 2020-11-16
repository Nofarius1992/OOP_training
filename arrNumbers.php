<?php
class arrNumbers
{
    private $arr = [];

    public function getArr()
    {
        return $this->arr;
    }

    public function addNum($number)
    {
        $this->arr[] = $number;
        return $this;
    }

    public function getSum()
    {
       return array_sum($this->arr);
    }

    public function append($numbers)
    {
        $this->arr = $numbers;
        return $this;
    }
}