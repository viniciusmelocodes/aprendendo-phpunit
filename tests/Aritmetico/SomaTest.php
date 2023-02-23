<?php

namespace App\Aritmetico;

use PHPUnit\Framework\TestCase;
use App\Aritmetico\Soma;

class SomaTest extends TestCase
{
    public function testSoma()
    {
        $soma = new Soma();
        $soma->setNum1(5);
        $soma->setNum2(7);

        $this->assertEquals(15, $soma->somar());
    }
}
