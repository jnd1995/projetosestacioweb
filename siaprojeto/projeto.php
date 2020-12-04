<?php

include("conexao.php");

$nome=filter_input(input_get,'nome', filter_sanitize_string);
$sobrenome=filter_input(input_get,'sobrenome', filter_sanitize_string);
$idade=filter_input(input_get,'idade', filter_sanitize_number);
$signo=filter_input(input_get,'signo', filter_sanitize_string);
$status=filter_input(input_get,'status', filter_sanitize_string);

//echo"Nome: $nome<br>";
//echo"Sobrenome: $sobrenome<br>";
//echo"Idade: $idade<br>";
//echo"Signo: $signo<br>";
//echo"Signo: $signo<br>";

?>