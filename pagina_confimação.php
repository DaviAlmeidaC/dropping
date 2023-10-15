<?php
    include "conexao.php";

    $sql = "SELECT * FROM produtos";
    $result = mysqli_query($conn, $sql);

    if(!$result){
        die("ocorreu um erro na consulta: ".mysqli_error($conn));
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/venda.css">
    <link rel="stylesheet" href="css/reset.css">
    <title>Document</title>
</head>

<Header class="header">
        <button class="Butao_menu"><img class="img_menu" src="img/menu.png" alt=""></button>   
        <h1 class="logo">Logo</h1>
        <input class="pesquisa" type="text" placeholder="Pesquise o seu produto" >
        <a href=""><img class="perfil" src="img/image-60.png" alt=""></a>
        <a href=""><img class="coração" src="img/heart.png" alt=""></a>
        <a href=""><img class="carrinho" src="img/shopping-cart.png" alt=""></a>
    </Header>

<body>
     <style>
    body {
      font-family: 'SuaFonte', sans-serif;
    }
  </style>
    <div class="links_header">
        <a class="liks_baixo" href="index.php">Ofertas do dia</a>
        <a class="liks_baixo" href="">Entrar em contato</a>
        <a class="liks_baixo" href="">Comprar novamente</a>
        <a class="liks_baixo1" href="">Redes sociais</a>
    </div>

    <h1 class="title">Carrinho</h1>

    <?php while ($row = mysqli_fetch_assoc($result)): ?>
    <div class="blocos" >
        <div class="img_div">
            <img class="img" src="img2/image 13 (1).png" alt="">
        </div>

        <div class="infos" <?php $row = mysqli_fetch_assoc($result) ?>>
            <div class="trash">
            <a href="deletar.php?id=<?php echo $row["id"]?>"><img  src="img2/trash-2.png" alt=""></a>
            </div>
        <h1 class="nome_info"><?php echo $row['nome'];?></h1>
        <div class="dinheiro">
                
                <div>
                <p><b class="preco_novo"> <?php echo $row['preco']; ?> </b> no pix</p>
                </div>
            </div>

            <div class="calcular">
                <div>
                <a class="calcular-frete" href="">Calcular Frete</a>
                </div>
            <div class="acrescimo">
                <button class="acrescimo-sinal"><p >-</p></button>
                <section class=quantidade></section>
                <button class="acrescimo-sinal"><p >+</p></button>
            </div>
            </div>

            <div class="button">
            <a class="botao_compra" href="">Finalizar pedido</a>
            </div>
        </div>
    </div>
    <?php endwhile; ?>

</body>
</html>