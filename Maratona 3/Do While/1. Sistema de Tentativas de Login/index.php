<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Tentativas de Login</title>


</head>

<h3>Tentativas de Login</h3>

<body>

<?php 

/*Implemente um sistema de login que permita ao usuário tentar inserir a 
senha até acertar ou até alcançar o número máximo de tentativas. O sistema deve 
pedir uma nova senha até que o usuário insira a senha correta ou ultrapasse o 
limite de 3 tentativas.*/

$senha = "123fourfivesix"; //senh do usuário
$insira = "senhasenha"; //tentiva de senha
$tentativas = 2; // núnero de tentativas feitas pelo usuário


if ($tentativas < 3 && $insira == $senha){
    echo "Acesso concedido. "; 
} else if ($tentativas > 3 && $insira != $senha) {
    echo "Acesso negado. <br> ";
}


do {
     if ($tentativas > 0 && $tentativas <4)  {
         echo "Insira sua senha: <br>";
         break;
        }
    $tentativas++;
} while ($tentativas <= 3  && $insira != $senha )

?>

</body>


</html>