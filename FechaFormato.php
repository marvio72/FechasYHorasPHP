<?php 

class FechaFormato extends DateTime
{
  protected $meses = [1 => 'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
  protected $dias = ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'];
  function __toString()
  {
    $m = (integer) $this->format("m");
    $j = (integer) $this->format("j");
    $a = (integer) $this->format("Y");
    $w = (integer) $this->format("w");
    return $this->dias[$w]." ".$j." de " .$this->meses[$m]." de ".$a;
  }
}
