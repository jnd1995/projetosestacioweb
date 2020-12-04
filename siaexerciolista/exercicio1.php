<?php

$nome= $_GET["nome"];
$salario = $_GET["salario"];
$porcen = $_GET["porcen"];
$valor =$porcen / 100;
print ($valor );
$ajuste= $salario + $porcen;

print ($ajuste);
?>