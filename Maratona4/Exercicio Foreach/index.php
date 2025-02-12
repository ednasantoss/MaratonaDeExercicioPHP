<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peças de carro</title>
</head>

<body>
    <?php
    //Exercicio 1 - Foreach
    
    echo "<br>Peças de carro<br>";
    $peças = array("motor", "transmissão", "freios", "radiador", "alternador", "bateria", "armotecedores", "pneus", "velas de ignição", "catalisador");

    foreach ($peças as $peça) {
        echo $peça . "<br>";
    };

    //Exercicio 2 - Foreach

    $associativo = [
        "Nome" => "Thor",
        "Idade" => 8,
        "Dono" => "Zeus"
    ];

    foreach ($associativo as $nome => $idade) {
        echo "<br>";
        echo "$nome é: ";
        echo ($idade);
    };
    ?>
</body>

</html>