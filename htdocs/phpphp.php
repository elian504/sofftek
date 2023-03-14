<?php
$c = array(10, 10, 9, 0, 10, 10);
$cr = array(2, 3, 4, 5, 5, 6);
$p = 0;



for ($i = 0; $i < count($c); $i++) {
    $p+= $c[$i] * $cr[$i];
}

$p /= array_sum($cr);


echo "El promedio ponderado es: " . $p;

?>