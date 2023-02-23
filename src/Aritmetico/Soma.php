<?php

namespace App\Aritmetico;

class Soma
{
    private $num1;
    private $num2;

    public function getNum1()
    {
        return $this->num1;
    }

    public function setNum1($value)
    {
        $this->num1 = $value;
    }

    public function getNum2()
    {
        return $this->num2;
    }

    public function setNum2($value)
    {
        $this->num2 = $value;
    }

    public function somar(): int
    {
        return $this->num1 + $this->num2;
    }
}
