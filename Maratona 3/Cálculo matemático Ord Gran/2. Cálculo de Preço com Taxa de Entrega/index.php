<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Cálculo de Preço com Taxa de Entrega</title>

</head>


<h3>Preço com taxa de entrega</h3>


<body>


<?php 
    
/*Crie um sistema para calcular o valor final de uma compra, considerando uma 
taxa de entrega de 15% sobre o valor da compra. Se o valor da compra for superior 
a R$1000,00, um desconto de 20% será aplicado após calcular a taxa de entrega. */

$vcomp = 1001 ; //variável de valor da compra

$compdesc = ($vcomp + ($vcomp * 0.15)) - (($vcomp + ($vcomp * 0.15)) * 0.2) ; //valor de compras acima de 1000, com descono de 20%
$compent = ($vcomp + ($vcomp  * 0.15)) ; //valor de compras abaixo de 1000, apenas com o valor da taxa de entrega

$convdesc = number_format($compdesc, 2 , ',' , '.'); //conversão de BR para US na fórmula com desconto de 20% 
$convent = number_format($compent, 2 , ',' , '.'); //conversão de BR para US na fórmula com apenas a taxa de entrega somada

switch ($vcomp) {
    case $vcomp > 1000 :
        echo "Em compras <b>acima</b> de R$1.000,00 aplicamos uma taxa de 15% de entrega e um desconto de 20% sobre o valor do produto com taxa de entrega aplicada. Logo a sua compra tem valor final de: R$" . $convdesc . ".";
        break;
    case $vcomp <= 1000 :
        echo "Em compras <b>abaixo</b> de R$1.000,00 não aplicamos desconto, apenas o acréscimo de 15% da taxa de entrega, logo o valor da sua compra é: R$ " . $convent . ".";
        break;
   default :
   echo "Valor inserido incorretamente, por gentileza inserir o preço do produto novamente.";
   break;
}


?>


</body>

</html>