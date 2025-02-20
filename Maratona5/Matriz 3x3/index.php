<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matrizes</title>
</head>

<body>
    <h2>Matriz 3x3</h2>
    <?php
    $matriz = array();
    $numeros = array();
 
    for ($a = 0; $a < 3; $a++) {
        for ($l = 0; $l < 3; $l++) {
            $matriz[$a][$l] = rand(1, 100);
            $numeros[] = $matriz[$a][$l];
        }
    }
     
        $soma = 0;
        for ($a = 0; $a < 3; $a++) {
            for ($l = 0; $l < 3; $l++) {
                $soma += $matriz[$a][$l];
            }
        }
        echo "Os numeros são: " . implode(" ,", $numeros) . "<br><br>";
        echo "A soma de todos os elementos da Matriz será de: " . $soma;
        
    ?>
</body>

</html>