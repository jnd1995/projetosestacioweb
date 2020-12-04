<?php

$contador = $_GET['contador'];


    do{

     print("<h$contador> Texto </h$contador>");
        $contador++;
    }while($contador<= 6);

?>
