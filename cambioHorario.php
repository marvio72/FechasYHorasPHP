<?php
print "Creamos el objeto sin parámetros, tz por omisión<br>";
$fecha1 = new DateTime();
print "Fecha Local: " . $fecha1->format('g:i a, F j, Y') . '<br>';
print 'Local: ' . $fecha1->getTimestamp() . '<br>';
print "<hr>";

print "Creamos el objeto con la zona horaria<br>";
$fecha2 = new DateTime("Europe/London");
print "Fecha London: " . $fecha2->format('g:i a, F j, Y') . '<br>';
print 'London: ' . $fecha2->getTimestamp() . '<br>';
print "<hr>";

print "Creamos el objeto con la zona horaria, asignando una hora<br>";
$londres = new DateTimeZone("Europe/London");
$fecha3 = new DateTime("2019-12-24 0152", $londres);
print "Fecha Londres: " . $fecha3->format('g:i a, F j, Y') . '<br>';
print 'Londres: ' . $fecha3->getTimestamp() . '<br>';
print "<hr>";

print "Creamos el objeto con la zona horaria, prevalece el primero<br>";
$fecha4 = new DateTime("2019-12-24 0152 America/Los_Angeles", $londres);
$z = $fecha4->getTimezone()->getName();
print "Fecha " . $z . ": " . $fecha4->format('g:i a, F j, Y') . '<br>';
print $z . ": " . $fecha4->getTimestamp() . '<br>';
print "<hr>";

print "Creamos el objeto con la zona horaria, prevalece el primero<br>";
$fecha5 = new DateTime("2019-12-24 0152 -0800", $londres);
$z5 = $fecha5->getTimezone()->getName();
print "Fecha " . $z5 . ": " . $fecha5->format('g:i a, F j, Y') . '<br>';
print $z5 . ": " . $fecha5->getTimestamp() . '<br>';
print "<hr>";
