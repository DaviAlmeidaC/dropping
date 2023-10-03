<?php
    include "conexao.php";

    $sql = "SELECT * FROM produtos";
    $sql2 = "SELECT * FROM info";
    $result = mysqli_query($conn, $sql, $sql2);

    if(!$result){
        die("ocorreu um erro na consulta: ".mysqli_error($conn));
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/carrinho.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <title>Carrinho</title>
</head>

    <Header class="header">
        <button class="Butao_menu"><img class="img_menu" src="img/menu.png" alt=""></button>   
        <h1 class="logo">Logo</h1>
        <input class="pesquisa" type="text" placeholder="Pesquise o seu produto" >
        <a href=""><img class="perfil" src="img/image-60.png" alt=""></a>
        <a href=""><img class="coração" src="img/heart.png" alt=""></a>
        <a href="carrinho.php"><img class="carrinho" src="img/shopping-cart.png" alt=""></a>
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

    <h1 class="nome_cadeira">Fone de Ouvido Hazir</h1>

    <div class="div_principal">
    <div class="imagens">
        <div class="fotos_pequenas">
            <a href=""><img class="fotos_cadeiras" src="img2/image 13.png" alt=""></a>
            <a href=""><img class="fotos_cadeiras" src="img2/image 14.png" alt=""></a>
            <a href=""><img class="fotos_cadeiras" src="img2/image 16.png" alt=""></a>
            <a href=""><img class="fotos_cadeiras" src="img2/image 17.png" alt=""></a>
        </div>    

        <div>
        <img class="fotos" src="img/Frame 6.png" alt="">
        
        </div>
    </div>
    <?php  ($row = mysqli_fetch_assoc($result)) ?>
        <div class="informacoes">
            <div class="tempo">
                <h2 class="evento">Promoção de verão</h2>
                <h1 class="img_relogio"><img class="img_relo" src="img/stopwatch-7503_256.gif" alt=""><p>5 HORAS 15:0<span class="img_relogio1"></span></h1>
            </div>

            <div class="principal_avaliacoes">
                <div class="avaliacoes">
                    <p class="estrelas"><img src="img2/image 10.png" alt="">(1.234)</p>
                    <p class="vender">Vendas: <b class="vendas">1345</b></p>
                </div>
                <div class="estoque">
                    <p class="">Estoque:<?php echo $row['quantidade'];?></p>
                </div>
            </div>

            <div class="novo">
                <p class="estado">Estado:novo</p>
                <p class="loja">GB Games</p>
            </div>

            <h1 class="nome_info">Fone de Ouvido Hazir</h1>

            <div class="dinheiro">
                <img class="img_dinheiro" src="img2/dollar-sign.png" alt="">
                <div>
                <p class="preco_antigo"><b class="cortar">De: R$ 478,99</b> por: </p>
                <p><b class="preco_novo"> R$ 156,99</b> no pix</p>
                </div>
            </div>

            <div class="cartao">
                <img class="img_cartao" src="img2/credit-card.png" alt="">
                <div>
                <p class="preco_antigo"><b class="cortar">De: R$ 478,99</b> por:</p>
                <h1 class="preco_novo1"><b class="preco_novob">R$ 236,99</b> Parcelado de 10x</h1>
                </div>
            </div>

            <div class="icons">
            <a class="img_carrinho_bu" href=""><img class="tamanho_icons" src="img/shopping-cart.png" alt=""></a>
            <a href=""><img class="tamanho_icons" src="img2/Vector.png" alt=""></a>
            </div>

            <a class="botao_compra" href="adicionar.php" >Comprar com desconto</a>

        </div>


    </div>
    

    <div class="descricao">
        <h1 class="h1_descricao">Descrição</h1>  
        <p class="p_descricao">cadeira gamer é construída com um design ergonomicamente pensado. Ela é projetada para fornecer suporte adequado para a coluna vertebral e a postura, reduzindo a fadiga durante horas de jogo. Possui curvas e contornos que se encaixam no corpo do jogador.</p>
    </div>



    <section class="carrossel">
    <p class="carrosel__titulo2">Produtos parecidos</p>

    <div class="carrossel__container">
<div class="swiper">

<div class="swiper-pagination"></div>


<div class="swiper-wrapper">

<div class="swiper-slide">
    <img class="img-carrosel1" src="img/Frame 6.png" alt="">
    <div class="infos">
    <p class="titulo_anuncio">Fone de Ouvido Hazir</p>
    <p class="avaliações"><img class="img_estrela" src="img/image 9.png" alt="">(1.432)</p>
    <p class="valor_antigo">R$ 478.99</p>
    <p class="valor_pix"><b class="valor">R$ 236,99</b> no pix</p>
    </div>
</div>
<div class="swiper-slide">
    <img class="img-carrosel1" src="img/Frame 7.png" alt="">
    <div class="infos">
    <p class="titulo_anuncio">Fone de Ouvido Hazir</p>
    <p class="avaliações"><img class="img_estrela" src="img/image 9.png" alt="">(1.432)</p>
    <p class="valor_antigo">R$ 478.99</p>
    <p class="valor_pix"><b class="valor">R$ 236,99</b> no pix</p>
    </div>
</div>
<div class="swiper-slide">
    <img class="img-carrosel1" src="img/Frame 8.png" alt="">
    <div class="infos">
    <p class="titulo_anuncio">Fone de Ouvido Hazir</p>
    <p class="avaliações"><img class="img_estrela" src="img/image 9.png" alt="">(1.432)</p>
    <p class="valor_antigo">R$ 478.99</p>
    <p class="valor_pix"><b class="valor">R$ 236,99</b> no pix</p>
    </div>
</div>
<div class="swiper-slide">
    <img class="img-carrosel1" src="img/Frame 9.png" alt="">
    <div class="infos">
    <p class="titulo_anuncio">Fone de Ouvido Hazir</p>
    <p class="avaliações"><img class="img_estrela" src="img/image 9.png" alt="">(1.432)</p>
    <p class="valor_antigo">R$ 478.99</p>
    <p class="valor_pix"><b class="valor">R$ 236,99</b> no pix</p>
    </div>
</div>
<div class="swiper-slide">
    <img class="img-carrosel1" src="img/Frame 6.png" alt="">
    <div class="infos">
    <p class="titulo_anuncio">Fone de Ouvido Hazir</p>
    <p class="avaliações"><img class="img_estrela" src="img/image 9.png" alt="">(1.432)</p>
    <p class="valor_antigo">R$ 478.99</p>
    <p class="valor_pix"><b class="valor">R$ 236,99</b> no pix</p>
    </div>
</div>
<div class="swiper-slide">
    <img class="img-carrosel1" src="img/Frame 7.png" alt="">
    <div class="infos">
    <p class="titulo_anuncio">Fone de Ouvido Hazir</p>
    <p class="avaliações"><img class="img_estrela" src="img/image 9.png" alt="">(1.432)</p>
    <p class="valor_antigo">R$ 478.99</p>
    <p class="valor_pix"><b class="valor">R$ 236,99</b> no pix</p>
    </div>
</div>
<div class="swiper-slide">
    <img class="img-carrosel1" src="img/Frame 8.png" alt="">
    <div class="infos">
    <p class="titulo_anuncio">Fone de Ouvido Hazir</p>
    <p class="avaliações"><img class="img_estrela" src="img/image 9.png" alt="">(1.432)</p>
    <p class="valor_antigo">R$ 478.99</p>
    <p class="valor_pix"><b class="valor">R$ 236,99</b> no pix</p>
    </div>
</div>
<div class="swiper-slide">
    <img class="img-carrosel1" src="img/Frame 9.png" alt="">
    <div class="infos">
    <p class="titulo_anuncio">Fone de Ouvido Hazir</p>
    <p class="avaliações"><img class="img_estrela" src="img/image 9.png" alt="">(1.432)</p>
    <p class="valor_antigo">R$ 478.99</p>
    <p class="valor_pix"><b class="valor">R$ 236,99</b> no pix</p>
    </div>
</div>
</div>



<div class="swiper-button-prev"></div>
<div class="swiper-button-next"></div>


</div>

</body>

<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script><!--importação do js-->
        <script>const swiper = new Swiper('.swiper', {
            
            spaceBetween: -700,
            slidesPerView: 4,
            pagination: {
            el: '.swiper-pagination',
            type: 'bullets',
            },
          });</script>

<script src="js/js.js"></script>
</html>