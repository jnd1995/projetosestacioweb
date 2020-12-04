<?php 

$valorA = $_GET["valorA"];
$valorB = $_GET["valorB"];
$notas=$valorB+$valorA;
$percent=0.3;
$resultado=$valorA*$percent;
if ($resultado >= $valorB){
    print (" Linha de credito liberada. "); 
print("<p>");
}
else{
    print (" Infelizmente esse valor ultrapassa sua margem liberada. ");
   print("<p>");
}
 ?>