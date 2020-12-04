<?php

$valorA = $_GET["valorA"];
$valorB = $_GET["valorB"];

if(isset($_GET["somar"])){
    $operaçao = $valorA + $valorB;
    print("Soma: " . $operaçao);
}

if(isset($_GET["subtrair"])){
    $operaçao = $valorA - $valorB;
    print("Subtrair: " . $operaçao);
}
if(isset($_GET["multiplicar"])){
    $operaçao = $valorA * $valorB;
    print("Multiplicar: " . $operaçao);
}
if(isset($_GET["dividir"])){
    $operaçao = $valorA / $valorB;
    print("Divir: " . $operaçao);
}




?>