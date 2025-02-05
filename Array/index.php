<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>

<body>
    <?php
    //Exercicio 1
    $array = ["willian", "Samuel", "Lucas", "Gabriel", "Geovanna"];
    echo "Cinco amigos da classe do TI114. ";
    print_r($array);

    echo "<br>";
    unset($array[2]);
    echo "Removendo o Lucas da lista de classe. ";
    print_r($array);
    //Exercicio 2
    echo "<br>";
    $array = array();
    for ($i = 0; $i < 10; $i++) {
        $array[] = rand(1, 100);
    }

    $contadorPares = 0;
    foreach ($array as $numero) {
        if ($numero % 2 == 0) {
            $contadorPares++;
        }
    }
    //Exercicio 3
    echo "Array: ";
    print_r($array);
    echo "Quantidade de números pares: " . $contadorPares;

    //Exercicio 4
    echo "<br>";
    $array = [1, 2, 3, 4, 5];
    $array2 = [6, 8, 9, 10];
    $arrayFinal = array_merge($array, $array2);
    echo "Mostrando o array final: ";
    print_r($arrayFinal);

    ?>
</body>

</html>