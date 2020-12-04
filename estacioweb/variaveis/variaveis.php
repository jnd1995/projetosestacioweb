<?php

$acesa = FALSE;

if($acesa){
    print("primeiro IF, acesa ");
}

$acesa = TRUE;
if($acesa){
    print(" Segundo IF, acesa ");
}
# tipo de variavel inteira,negativos ou positivos.#
echo "<br/>";
$variavelinteira = -23345668;

echo $variavelinteira;
# tipo de ponto flutuante, numeros quebrados.#
echo "<br/>";
$notaavum = 4.5;
$notaavdois = 9.5;
echo $notaavum + $notaavdois;

echo "<br/>";
$listacpf = array("josi" =>"108966", "fia"=>"54631");
echo "CPF 1: ";
echo $listacpf["josi"];
 echo "<br/>";
 echo "CPF 2: ";
echo $listacpf["fia"];




?>