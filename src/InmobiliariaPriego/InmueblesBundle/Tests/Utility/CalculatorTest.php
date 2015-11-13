<?php
namespace InmobiliariaPriego\InmueblesBundle\Tests\Utility;

use InmobiliariaPriego\InmueblesBundle\Utility\CalcularPrecios;

class CalculatorTest extends \PHPUnit_Framework_TestCase
{
    public function testCalcularPrecios()
    {
        $calc = new CalcularPrecios();
        $result = $calc->calcPriceFromMeters(80, 800);
        
        $this->assertEquals(64000, $result);
    }
    
    public function testCalcularComision()
    {
        $calc = new CalcularPrecios();
        $result = $calc->calcularComision(64000, 5);
        
        $this->assertEquals(3200, $result);
    }
}
