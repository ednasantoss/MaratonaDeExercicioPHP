<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Autenticação de Funcionário</title>
</head>

<body>

<?php

/*Desafio: Você foi solicitado a desenvolver um sistema de autenticação para a 
empresa.
 O acesso ao sistema é permitido apenas se o funcionário tiver 
permissão e o cadastro estiver ativo ou se o funcionário for um administrador. 
Implemente essa lógica com operadores lógicos.*/

echo "<h3> Sistema de Autenticação </h3>";


$Edna = ["permissao" => "sim",
"ativo" => "sim", "administrador" => "sim"
];

$Victor = ["permissao" => "sim",
"ativo" => "não", "administrador" => "não"
];

$Richard = ["permissao" => "sim",
"ativo" => "sim", "administrador" => "não"
];


if ($Richard["permissao"]  == "sim" && $Richard["ativo"] == "sim" || $Richard["administrador"] == "sim" ) 

{echo "Acesso permitido! ";} else {echo "Acesso negado! ";}



?>


</body>


</html>