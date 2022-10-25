<?php

namespace Youtube\TestesPhp\Tests\Unit;

use PHPUnit\Framework\TestCase;
use Youtube\TestesPhp\Calculadora;

class CalculadoraTest extends TestCase
{
    public function testMetodoSomaDeveRetornarASomaDeDoisNumeroRecebidosComoParametro()
    {
        // Declaração
        $numeroUm = 5;
        $numeroDois = 10;
        $resultadoEsperado = 15;

        // Executar
        $resultado = Calculadora::soma($numeroUm, $numeroDois);

        // Assert -> Testar
        $this->assertEquals($resultado, $resultadoEsperado, "O resultado não esta de acordo com o esperado");
    }
}
