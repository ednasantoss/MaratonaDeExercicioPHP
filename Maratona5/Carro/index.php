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
    //Exercicio 1 - Classe chamada Carro
    Class Carro {
        public $ano;
        public $cor;
        public $preco;
        public $modelo;
    
        public function exibir() {
            echo "Modelo: " . $this->modelo . "<br>";
            echo "Ano: ". $this->ano . "<br>";
            echo "Preço: " . $this->preco . "<br>";
            echo "Cor: " . $this->cor . "<br>";
        }
    }
   
    $meuCarro = new Carro ();
    $meuCarro->modelo = "Camaro";
    $meuCarro->ano = 2017;
    $meuCarro->preco = "R$ 345.000";
    $meuCarro->cor = "Amarelo";

    $meuCarro->exibir();

    echo "<br>";
    class Carro {
        public function exibir(){
            echo "O modelo é " . $this->modelo . "do ano de " . $this->ano . "com a cor " . $this->cor . "pelo preço de " . $this->preco;
        }
    }

    $camaro = new Carro();
    $camaro->modelo = "Camaro";
    $camaro->ano = 2017;
    $camaro->preco = "R$ 345.000";
    $camaro->cor = "Amarelo";

    $camaro->exibir();


    //Exercicio 2 - Classe chamada Livro 
   
    
    ?>
</body>

</html>