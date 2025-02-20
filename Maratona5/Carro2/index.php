<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes e Objetos</title>
</head>

<body>
    <h2>Informações sobre o Carro</h2>
    <?php 
    class Carro {
        public function exibir(){
            echo "O modelo é " . $this->modelo . " do ano de " . $this->ano . " com a cor " . $this->cor . "pelo preço de " . $this->preco;
        }
    }

    $camaro = new Carro();
    $camaro->modelo = "Camaro";
    $camaro->ano = 2017;
    $camaro->preco = "R$ 345.000";
    $camaro->cor = "Amarelo";

    $camaro->exibir();
    ?>
</body>

</html>