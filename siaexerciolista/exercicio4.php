<?php
$dias=$_GET["dias"];
$cliente=$_GET["cliente"];
number_format($total, 2, '.', '');
$taxa1=15;
$taxa2=8;


if($dias>=10){
    $hospedagem=$dias*40;
    $diaria =$dias*$taxa2;
    $total= $diaria+$hospedagem;
print("Caro (a) " . $cliente.", ");
    echo "<br/>";
    print(" Resumo :");
    echo "<br/>";
    print("Total das taxas diarias R$ ".$diaria= number_format($diaria, 2, '.', ''));
    echo "<br/>";
    print("Total da hospedagem R$ ".$hospedagem = number_format($hospedagem, 2, '.', ''));
    echo "<br/>";
    print("Total a pagar : R$".$total = number_format($total, 2, '.', ''));
    echo "<br/>";
    echo "<br/>";
    print("Volte sempre!");
}
else{
    $hospedagem=$dias*40;
    $diaria =$dias*$taxa1;
    $total= $diaria+$hospedagem;
    print("Caro (a) " . $cliente.", ");
    echo "<br/>";
    print(" Resumo :");
    echo "<br/>";
    print("Total das taxas diarias R$ ".$diaria= number_format($diaria, 2, '.', ''));
    echo "<br/>";
    print("Total da hospedagem R$ ".$hospedagem = number_format($hospedagem, 2, '.', ''));
    echo "<br/>";
    print("Total a pagar : R$".$total = number_format($total, 2, '.', ''));
    echo "<br/>";
    echo "<br/>";
    print("Volte sempre!");
}
?>