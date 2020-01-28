<?php

/**
 * 
 */
class FechaFormato extends DateTime
{
  protected $meses = [1 => 'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
  protected $dias = ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'];
  function __toString()
  {
    $m = (int) $this->format("m");
    $j = (int) $this->format("j");
    $a = (int) $this->format("Y");
    $w = (int) $this->format("w");
    $h = (int) $this->format("H");
    $i = (int) $this->format("i");
    $e = $this->format("e");
    return $this->dias[$w] . " " . $j . " de " . $this->meses[$m] . " de " . $a;
  }
}
