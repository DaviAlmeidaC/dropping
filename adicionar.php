<?php
$conexao = mysqli_connect("localhost", "root", "", "dropping");

if (mysqli_connect_errno()) {
    die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
}

$nome = "Fone de Ouvido Hazir";
$preco = 156.99;

$query = "INSERT INTO produtos (nome, preco) VALUES ('$nome', '$preco')";
if (mysqli_query($conexao, $query)) {
    echo "";
} else {
    echo "Erro ao inserir dados: " . mysqli_error($conexao);
}

$sql = "SELECT info FROM produtos";
$result = $conexao->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $saldo_atual = $row["quantidade"];

    // Verificar se há saldo suficiente para a subtração
    if ($saldo_atual >= 1) {
        $novo_saldo = $saldo_atual - 1;

        // Atualizar o saldo na tabela
        $sql = "UPDATE info SET quantidade = $novo_saldo";
       
    } else {
        echo "produtos acabados";
    }
} else {
    echo "Nenhum registro de produtos encontrado.";
}


mysqli_close($conexao);
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
</body>
</html>
