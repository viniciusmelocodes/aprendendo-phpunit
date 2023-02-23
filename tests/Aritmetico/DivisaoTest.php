<?php 

namespace App\Aritmetico;

use PHPUnit\Framework\TestCase;
use App\Aritmetico\Divisao;

class DivisaoTest extends TestCase
{
    public function testDivisao()
    {
        $divisao = new Divisao();
        $divisao->setNum1(8);
        $divisao->setNum2(2);

        $this->assertEquals(4.1, $divisao->dividir());
    }
}