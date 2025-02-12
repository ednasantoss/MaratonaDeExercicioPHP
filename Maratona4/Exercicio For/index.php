<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Tabela da tabuada do 8</title>
</head>

<body>
    <?php
    echo "<br>Tabuada do 8<br>";
    //Exercicio 1 - For
    for ($t = 8, $r = 1; $r <= 10; $r++) {
        echo "O resultado é " . $t * $r . "<br>";
    }

    echo "<br>Tabuada do 8<br>";
    for ($a = 1; $a <= 10; $a++) {
        echo "A multiplicação de 8 vezes " . $a . " é " . $a * 8 . "<br>";
    }

    //Exercicio 2 - For
    echo "<br>Calcular média<br>";
    $array = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];
    // Count serve para contar o número de elementos que foram inseridos dentro de um array
    $count = count($array);

    for ($i = 0; $i < 1; $i++) {
        // array_sum é usado para somar todos os números em um array
        $média =  array_sum($array) / count($array);
        echo "A média desses números é: $média";
        echo "<pre>";
        print_r($array);
    }

    ?>
</body>

</html>