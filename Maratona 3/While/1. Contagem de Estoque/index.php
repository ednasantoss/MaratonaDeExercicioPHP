<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contagem de Estoque</title>
</head>

<h3>Contagem de estoque</h3>

<body>


<?php 

/*Desafio: Implemente um programa que simule a venda de um produto. O estoque 
começa com 100 unidades. Cada vez que um produto for vendido, o estoque deve 
ser decrementado e o programa deve imprimir quantas unidades restam. O 
programa deve continuar até que o estoque seja zerado.*/

$estoque = 100;

echo "O estoque inicial é de: <b>" . $estoque . "</b><br><br>";

while ($estoque > 0) {
    $estoque -=1;
 echo "Vendemos 1 produto! O número atualizado de itens no estoque é: <b>" .  $estoque  . "</b><br>";
    
}

?>
    
</body>

</html>