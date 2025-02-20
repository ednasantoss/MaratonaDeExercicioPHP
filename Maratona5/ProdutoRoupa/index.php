<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificadores de Acesso</title>
</head>

<body>
    <h2>Produto Roupa</h2>
    <?php
   class ProdutoRoupa{
    public $nome;
    private $codigoProduto;
    public $preco;

    public function set_codigoProduto($codigoProduto){
        $this->nome = $codigoProduto;
    }

    public function get_codigoProduto(){
        return $this->codigoProduto;
    }
       
}

$produto1 = new ProdutoRoupa();

// Tentando acessar diretamente o código do produto (isso não deve ser possível)
// $produto->codigoProduto = "XYZ1234";  // Isto causará um erro

$produto1->nome = 'Tênis';
echo "Nome do produto: " . $produto1->nome . "<br>";

$produto1->set_codigoProduto('010203');
echo "Codigo do produto: " . $produto1->get_codigoProduto() . "<br>";

$produto1->get_codigoProduto('987654');
echo "Codigo do produto: " . $produto1->get_codigoProduto() . "<br>";

$produto1->preco = 'R$599,00';
echo "Preço do produto: " . $produto1->preco . "<br>";
    ?>
</body>

</html>