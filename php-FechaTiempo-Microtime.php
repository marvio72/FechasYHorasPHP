<?php
  // usleep retrasa la ejecución en milisegundos
  // mt_rand - Genera un mejor número entero aleatorio
  // microtime devuelve la fecha Unix actual con microsegundos

  usleep(mt_rand(100, 10000));
  $t = microtime(true) - $_SERVER["REQUEST_TIME_FLOAT"];
  print "Transcurrieron " .$t. " segundos sin hacer nada";
?>