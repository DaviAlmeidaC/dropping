<?php
$DRB_conexao = mysqli_connect("localhost", "root", "", "dropping");

if (mysqli_connect_errno()) {
    die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
}

$DRB_nome = "Cadeira gamer";
$DRB_preco = 100.99;

$DRB_query = "INSERT INTO produtos (nome, preco) VALUES ('$DRB_nome', '$DRB_preco')";
if (mysqli_query($DRB_conexao, $DRB_query)) {
    echo "";
} else {
    echo "Erro ao inserir dados: " . mysqli_error($DRB_conexao);
}

$DRB_sql = "SELECT quantidade FROM produtos";
$DRB_result = $DRB_conexao->query($DRB_sql);

    $DRB_row = $DRB_result->fetch_assoc();
    $DRB_quantidade_atual = $DRB_row["quantidade"];

    if ($DRB_quantidade_atual >= 1) {
        $DRB_novo_saldo = $DRB_quantidade_atual - 1;

        $DRB_sql = "UPDATE quantidade SET produtos = $DRB_novo_saldo";
       
    } else {
        echo "produtos acabados";
    }



mysqli_close($DRB_conexao);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/adicionar">
    <title>Document</title>
</head>
<body>

    <h1 class="titulo_principal">Item adicionado ao carrinho!</h1>
    <a class="link_direto" href="carrinho.php">ir para o carrinho</a>
    <a class="link_direto" href="index.php">ir para a tela principal</a>
    <a class="link_direto" href="venda copy.php">ir para a tela principal</a>
</body>
</html>
