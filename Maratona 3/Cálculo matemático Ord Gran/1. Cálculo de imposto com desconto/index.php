<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Cálculo de imposto com desconto</title>
</head>

<h3>Imposto com desconto</h3>


<body>

<?php 

/*Crie um programa que calcule o valor final de uma compra considerando um 
desconto e imposto. Se o valor da compra for maior que R$500,00, um desconto 
de 10% será aplicado. O imposto de 8% será calculado sobre o valor original da 
compra, antes de aplicar o desconto.
*/

$precoprod = 600; //variável do preço original do produto

$desc = ($precoprod - ($precoprod * 0.1))+ ($precoprod * 0.08); //fórmula para calc de produtos acima de R$500,00
$imp = ($precoprod + ($precoprod * 0.08)); //fórmula para calc de produtos abaixo de R$500,00 (desconto de 10% não aplicado)

$convdesc = number_format($desc, 2 , ',' , '.'); //conversão de formato US para BR dos cálculos com desconto e imposto
$convimp = number_format($imp, 2 , ',' , '.'); //conversãod de formato US para BR dos cálculos apenas de imposto

switch ($precoprod) {
     case $precoprod > 500 :
         echo "Em produtos <b>acima</b> de R$500,00 aplicamos um desconto de 10%, e somamos imposto de 8%, então o valor da sua compra é: R$" . $convdesc . ".";
         break;
     case $precoprod <= 500 :
         echo "Em produtos que custam <b>abaixo</b> de R$500,00 não aplicamos desconto, apenas o acréscimo de 8% de imposto, logo o valor da sua compra é: R$ " . $convimp . ".";
         break;
    default :
    echo "Valor inserido incorretamente, por gentileza inserir o preço do produto novamente.";
    break;
}



?>
    
</body>


</html>