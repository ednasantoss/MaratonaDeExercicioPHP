<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes e Objetos</title>
</head>

<body>
    <h2>Sobre o Livro</h2>

    <?php
    class Livro{
        public $titulo;
        public $autor;
        public $anoPublicacao;

        public function mostrarDetalhes(){
            echo "Titulo: " . $this->titulo . "<br>";
            echo "Autor: " . $this->autor . "<br>";
            echo "Ano de Publicação: " . $this->anoPublicacao . "<br>";
        }
    }

    echo "<br>";
    $meuLivro = new Livro ();
    $meuLivro->titulo = "Harry Potter e a câmara secreta";
    $meuLivro->autor = "J.K Rowling";
    $meuLivro->anoPublicacao = 2017;

    $meuLivro->mostrarDetalhes();

    echo "<br>";
    $meuLivro1 = new Livro ();
    $meuLivro1->titulo = "Harry Potter e a Pedra Filosofal";
    $meuLivro1->autor = "J.K Rowling";
    $meuLivro1->anoPublicacao = 2017;

    $meuLivro1->mostrarDetalhes();

    echo "<br>";
    $meuLivro2 = new Livro ();
    $meuLivro2->titulo = "O Pequeno Principe";
    $meuLivro2->autor = "Antoine de Saint-Exupery";
    $meuLivro2->anoPublicacao = 1943;

    $meuLivro2->mostrarDetalhes();
    
    ?>
</body>

</html>