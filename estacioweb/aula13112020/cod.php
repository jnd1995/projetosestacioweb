<?php 

$idade = $_GET["idade"];

if ($idade >= 18){

    header("location: https://www.vagas.com.br");
}
else {
    header("location: https://www.rihappy.com.br/mega-liquida");
    
print("<p>");
}


 ?>