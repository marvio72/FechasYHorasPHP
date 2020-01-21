<?php 

$fecha = "1492-10-12";
$futuro = new DateTime($fecha);
print "<p>".$futuro->format('Y-m-d')."</p>";
var_dump($futuro->getTimestamp());
print "<hr>";
var_dump($futuro->format("U")); 