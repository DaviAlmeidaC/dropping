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
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <title>Home</title>
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
        <a class="liks_baixo" href="">Ofertas do dia</a>
        <a class="liks_baixo" href="">Entrar em contato</a>
        <a class="liks_baixo" href="">Comprar novamente</a>
        <a class="liks_baixo1" href="">Redes sociais</a>
    </div>

    
    <section class="carrossel">
    <p class="carrosel__titulo2"></p>

    <div class="carrossel__container">
<div class="swiper">

<div class="swiper-pagination"></div>


<div class="swiper-wrapper">

<div class="swiper-slide"><img class="img-carrosel12" src="img/Frame 4.png" alt=""></div>
<div class="swiper-slide"><img class="img-carrosel12" src="img/frame5.png" alt=""></div>
<div class="swiper-slide"><img class="img-carrosel12" src="img/frame6.png" alt=""></div>
<div class="swiper-slide"><img class="img-carrosel12" src="img/Frame 4.png" alt=""></div>
<div class="swiper-slide"><img class="img-carrosel12" src="img/frame5.png" alt=""></div>
<div class="swiper-slide"><img class="img-carrosel12" src="img/frame6.png" alt=""></div>

</div>



<div class="swiper-button-prev"></div>
<div class="swiper-button-next"></div>


</div>


<div class="categorias">
    <a class="inf_bolinha" href=""><div class="bolinha_cad">
        <img class="img_bolinha" src="img_categorias/Ellipse 1.png" alt="">
        <p class="inf_bolinha">Fone de Ouvido</p>
    </div></a>

    <a class="inf_bolinha" href=""><div class="bolinha_cad">
        <img class="img_bolinha" src="img_categorias/Ellipse 2.png" alt="">
        <p class="inf_bolinha">Smart Watch</p>
    </div></a>

    <a class="inf_bolinha" href=""><div class="bolinha_cad">
        <img class="img_bolinha" src="img_categorias/Ellipse 3.png" alt="">
        <p class="inf_bolinha">PC gamer</p>
    </div></a>

    <a class="inf_bolinha" href=""><div class="bolinha_cad">
        <img class="img_bolinha" src="img_categorias/Ellipse 4.png" alt="">
        <p class="inf_bolinha">Video Game</p>
    </div></a>

    <a class="inf_bolinha" href=""><div class="bolinha_cad">
        <img class="img_bolinha" src="img_categorias/Ellipse 5.png" alt="">
        <p class="inf_bolinha">Monitores</p>
    </div></a>

    <a class="inf_bolinha" href=""><div class="bolinha_cad">
        <img class="img_bolinha" src="img_categorias/Ellipse 6.png" alt="">
        <p class="inf_bolinha">Acessórios</p>
    </div></a>

    <a class="inf_bolinha" href=""><div class="bolinha_cad">
        <img class="img_bolinha" src="img_categorias/Ellipse 7.png" alt="">
        <p class="inf_bolinha">Cadeira Gamer</p>
    </div></a>

</div>


<section class="carrossel">
    <p class="carrosel__titulo2">Promoções do dia</p>

    <div class="carrossel__container">
<div class="swiper">

<div class="swiper-pagination"></div>


<div class="swiper-wrapper">

<div class="swiper-slide">
    <a href="venda copy.php"><img class="img-carrosel1" src="img/Frame 6.png" alt=""></a>
    <div class="infos">
    <a href="venda copy.php"><p class="titulo_anuncio">Fone de Ouvido Hazir</p></a>
    <p class="avaliações"><img class="img_estrela" src="img/image 9.png" alt="">(1.432)</p>
    <p class="valor_antigo">R$ 478.99</p>
    <p class="valor_pix"><b class="valor">R$ 156,99</b> no pix</p>
    </div>
</div>
<div class="swiper-slide">
<a href="venda.php"><img class="img-carrosel1" src="img/Frame 7.png" alt=""></a>
    <div class="infos">
    <a href="venda.php"><p class="titulo_anuncio">Cadeira Gamer Skir</p></a>
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
    <p class="titulo_anuncio">Fone de ouvido</p>
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


<section class="carrossel">
    <p class="carrosel__titulo2">Minha lista</p>

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
</html>