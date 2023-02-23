<?php 

namespace App\Aritmetico;

use PHPUnit\Framework\TestCase;
use App\Aritmetico\Multiplicacao;

class MultiplicacaoTest extends TestCase
{
    public function testMultiplicacao()
    {
        $multiplicacao = new Multiplicacao();
        $multiplicacao->setNum1(9);
        $multiplicacao->setNum2(3);

        $this->assertEquals(27, $multiplicacao->multiplicar());
    }
}