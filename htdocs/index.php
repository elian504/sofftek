<?php
  $a = $_POST['apellido'];
  $n = $_POST['nombre'];
  $na = $_POST['nacimientoa'];
  
  $y= date("y");

  $edad=$y-$na;
  $diasv=$edad*365;
  $semanasv=$diasv/7;

  echo "tu nombre es: " . $n . " " . $a ."    <br>
  " ." tienes " . $edad . "  years "."    <br>
  "."días vividos : " . $diasv . "    <br>
  "." semanas: " . $semanasv;
?>