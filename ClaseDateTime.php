<?php 

// Fecha en timestamp
$hoy = new DateTime();
// Formato Americano
$colon = new DateTime("10/12/1492");
// Europa
$bastilla = new DateTime("14-7-1789");
// ISO
$iso = new DateTime("1999-08-27");
// Futuro
$futuro = new DateTime(1-1-2050);
// Sumar dias o semanas
$suma = new DateTime("+2 weeks +3days");
//Fecha proxima
$viernes = new DateTime("last friday of december 2019");
// Imprimir pantalla
print "<p>Hoy es ".$hoy->format('Y-m-d h:i:s')."</p>";
$formato = "l, F j, Y";
print "<p>Colon descubrió América el ".$colon->format($formato)."</p>";
print "<p>La toma de la Bastilla fue un ".$bastilla->format($formato)."</p>";
print "<p>Laurita nació un ".$iso->format($formato)."</p>";
print "<p>El próximo fin del mundo será un ".$futuro->format($formato)."</p>";
print "<p>Dentro de dos semanas y tres días será ".$suma->format($formato)."</p>";
print "<p>El último viernes del año será ".$viernes->format($formato)."</p>";