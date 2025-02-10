<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Verificação de Cliente</title>

</head>

<h3>Verificação Cliente</h3>

<body>

<?php

/*Crie um sistema de login onde o usuário tem até 3 tentativas para inserir 
a senha correta. Se ele acertar a senha, o sistema deve exibir "Acesso concedido". 
Caso contrário, após 3 tentativas, o sistema deve exibir "Acesso negado". 
Implemente essa lógica com um loop while e uma verificação para o número de 
tentativas.*/ 



$senha = "123fourfivesix";
$insira = "aa";
$tentativas = 1;

if ($tentativas < 3 && $insira == $senha){
    echo "Acesso concedido. "; 
} else if ($tentativas > 3 && $insira != $senha) {
    echo "Acesso negado. ";
}


while ($tentativas <= 3 && $insira != $senha ) {

echo "Senha icorreta! Número de tentativas: " . $tentativas . "<br>";
$tentativas++;
   
;}



?>
    
</body>


</html>