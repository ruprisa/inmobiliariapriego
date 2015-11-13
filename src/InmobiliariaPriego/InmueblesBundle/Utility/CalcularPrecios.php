<?php
namespace InmobiliariaPriego\InmueblesBundle\Utility;

class CalcularPrecios 
{
    /*
     * Calcular el precio del inmueble a partir de los metros del mismo y el
     * precio del metro cuadrado.
     */
    public function calcPriceFromMeters($metros, $precioMetro)
    {
        return $metros * $precioMetro;
    }
    
    /*
     * Calcular la comisión de un vendedor sobre la venta de un inmueble
     */
    public function calcularComision($precioInmueble, $porcentajeComision)
    {
        return ($precioInmueble * $porcentajeComision) / 100;
    }
}
