<?php 

$valorA = $_GET["valorA"];
$valorB = $_GET["valorB"];
$notas=$valorB+$valorA;
$valor=2;
$resultado=$notas/$valor;

print ("Sua nota final foi :");
print ($resultado);
print("<p>");

if ($resultado >= 7){
    print (" Passou ");
    
print("<p>");
}
elseif ($resultado >=3){
    print (" Exame ");
    print("<p>");
    }
if($resultado < 3){
    print (" Reprovado ");
   print("<p>");
}
 ?>
