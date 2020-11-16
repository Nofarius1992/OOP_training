<?php


class ArraySumHelper
{
    public function getAvg1($arr)
    {
        return $this->getSum($arr, 1);
    }

    public function getAvg2($arr)
    {
        return $this->getSum($arr, 2);
    }

    public function getAvg3($arr)
    {
        return $this->getSum($arr, 3);
    }

    public function getAvg4($arr)
    {
       return $this->getSum($arr, 4);
    }

    private function getSum($arr, $power)
    {
        $sum = 0;
        foreach ($arr as $num) {
            $sum += pow($num, $power);
        }
        return  $this->calcSqrt($sum, $power);
    }

    private function calcSqrt($sum, $power)
    {
        return pow($sum, 1/$power);
    }
}