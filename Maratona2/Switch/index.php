<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
</head>

<body>
    <?php

    //Exercicio 1
    $numero = 6;
    
    switch ($numero) {
        case 1:
            $dia_da_semana = "Domingo";
            break;
        case 2:
            $dia_da_semana = "Segunda-Feira";
            break;
        case 3:
            $dia_da_semana = "Terça-Feira";
            break;
        case 4:
            $dia_da_semana = "Quarta-Feira";
            break;
        case 5:
            $dia_da_semana = "Quinta-Feira";
            break;
        case 6:
            $dia_da_semana = "Sexta-Feira";
            break;
        case 7:
            $dia_da_semana = "Sábado";
            break;
        default:
            $dia_da_semana = "Número inválido. Digite um número de 1 a 7.";
            break;
    }

    echo "O dia da semana correspondente ao número $numero é: $dia_da_semana";


    //Exercicio 2
    echo "<br>";
    $nota = 5; 
 
switch (true) {
    case ($nota >= 0 && $nota <= 4.9):
        $categoria = "Reprovado";
        break;
    case ($nota >= 5 && $nota <= 6.9):
        $categoria = "Recuperação";
        break;
    case ($nota >= 7 && $nota <= 10):
        $categoria = "Aprovado";
        break;
    default:
        $categoria = "Nota inválida. Digite uma nota entre 0 e 10.";
        break;
}
 
echo "A categoria do estudante com nota $nota é: $categoria";

//Exercicio 3
echo "<br>";
$preco_original = 100.00; 
 
switch ($codigo_desconto) {
    case 1:
        $desconto = 0.10; 
        break;
    case 2:
        $desconto = 0.20; 
        break;
    case 3:
        $desconto = 0.30; 
        break;
    default:
        $desconto = 0;
        $mensagem_erro = "Código de desconto inválido. Digite um código de 1 a 3.";
        break;
}
 
if (isset($mensagem_erro)) {
    echo $mensagem_erro;
} else {
    $preco_final = $preco_original * (1 - $desconto);
    echo "O preço final do produto com o código de desconto $codigo_desconto é: R$" . number_format($preco_final, 2, ',', '.');
}

    ?>
</body>

</html>