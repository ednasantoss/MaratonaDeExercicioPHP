<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matriz</title>
</head>

<body>
    <h2>Matriz 5x5</h2>

    <?php
    $matriz = array();
 
    for ($i = 0; $i < 5; $i++) {
        for ($j = 0; $j < 5; $j++) {
            $matriz[$i][$j] = rand(1, 50);
        }
    }
    $maior = 0;
 
    for ($i = 0; $i < 5; $i++) {
        for ($j = 0; $j < 5; $j++) {
            if ($matriz[$i][$j] > $maior) {
                $maior = $matriz[$i][$j];
            }
        }
    }    
 
    $posicao = array();
 
    for ($i = 0; $i < 5; $i++) {
        for ($j = 0; $j < 5; $j++) {
            if ($matriz[$i][$j] == $maior) {
                $posicao[0] = $i;
                $posicao[1] = $j;
            }
        }
    }
 
    print_r($matriz);
    echo "<br><br>";
    echo "O maior elemento da matriz é : " . $maior . "<br>";
    echo "<br>";
    echo "A posição do maior elemento da linha é: " . $posicao[0] . " da coluna " . $posicao[1] . ".";
    
    ?>
</body>

</html>