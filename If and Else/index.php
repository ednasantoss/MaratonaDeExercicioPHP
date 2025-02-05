<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If and Else</title>
</head>

<body>
    <?php
    //Exercicio 1
    if (-2 < 2) {
        echo "O número -2 negativo! <br>";
    }

    if (2 > -2) {
        echo "O número 2 positivo!";
    }

    //Exercicio 2
    $nota = 8.5;
    $Reprovado = 0 <= 4.9;
    $Recuperacao = 5 <= 6.9;
    $Aprovado = 7 <= 8.9;
    $AprovadoComDistinção = 9 <= 10;

    echo "<br>";
    if ($nota <= $Reprovado) {
        echo "Você está Reprovado.";

        echo "<br>";
    }
    if ($nota <= $Recuperacao) {
        echo "Você está em Recuperação.";

        echo "<br>";
    }
    if ($nota <= $Aprovado) {
        echo "Você está aprovado.";

        echo "<br>";
    } else ($nota <= $AprovadoComDistinção);
    echo "Você está Aprovado com Distinção.";

    //Exercicio 3
    echo "<br>";
    $idade = 18;
    if ($idade < 16) {
        echo "Você não pode votar.";
    } else if ($idade >= 16 && $idade < 18) {
        echo "Você já pode votar mas não obrigatorio.";
    } else {
        echo "Você já pode votar, e o voto é obrigatorio.";
    }

    //Exercicio 4
    echo "<br>";
    $numero = 10;

    if ($numero % 2 == 0) {
        echo "$numero é um número par.";
    } else {
        echo "$numero é um número ímpar.";
    }

    //Exercicio 5
    echo "<br>";
    $hora = "16:30";
    $hora_timestamp = strtotime($hora);

    $matinal_inicio = strtotime("10:00");
    $matinal_fim = strtotime("12:00");
    $preco_matinal = 10.00;

    $diurno_inicio = strtotime("12:01");
    $diurno_fim = strtotime("17:00");
    $preco_diurno = 20.00;

    $noturno_inicio = strtotime("17:01");
    $noturno_fim = strtotime("22:00");
    $preco_noturno = 30.00;

    $ultima_sessao_inicio = strtotime("22:01");
    $ultima_sessao_fim = strtotime("23:59");
    $preco_ultima_sessao = 40.00;

    if ($hora_timestamp >= $matinal_inicio && $hora_timestamp <= $matinal_fim) {
        $preco = $preco_matinal;
    } else if ($hora_timestamp >= $diurno_inicio && $hora_timestamp <= $diurno_fim) {
        $preco = $preco_diurno;
    } else if ($hora_timestamp >= $noturno_inicio && $hora_timestamp <= $noturno_fim) {
        $preco = $preco_noturno;
    } else if ($hora_timestamp >= $ultima_sessao_inicio && $hora_timestamp <= $ultima_sessao_fim) {
        $preco = $preco_ultima_sessao;
    } else {
        $preco = "Horário inválido";
    }

    if (is_numeric($preco)) {
        echo "O preço do ingresso para a sessão das $hora é R$" . number_format($preco, 2, ',', '.');
    } else {
        echo $preco;
    }
    ?>
</body>

</html>