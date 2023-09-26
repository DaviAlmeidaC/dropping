<?php
// Conectar ao banco de dados
$conexao = mysqli_connect("localhost", "root", "2006", "dropping");

// Verificar a conexão
if (mysqli_connect_errno()) {
    die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
}

// Dados padrão que você deseja inserir
$nomePadrao = "carr";
$idadePadrao = 100;

// Realizar a inserção no banco de dados
$query = "INSERT INTO produtos (nome, preco) VALUES ('$nomePadrao', $idadePadrao)";
if (mysqli_query($conexao, $query)) {
    echo "Dados padrão inseridos com sucesso!";
} else {
    echo "Erro ao inserir dados padrão: " . mysqli_error($conexao);
}

// Fechar a conexão
mysqli_close($conexao);
?>
