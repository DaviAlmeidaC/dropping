<?php
if (isset($_GET['id']))
    include "conexao.php";

    $DRB_id = $_GET['id'];
    $DRB_sql = "DELETE FROM produtos WHERE id = $DRB_id";
    $DRB_result = mysqli_query($DRB_conn, $DRB_sql);

    if ($DRB_result){
        header("Location: carrinho.php");
        exit();
    } else {
        echo "Erro ao excluir o o produto.";
    }
?>