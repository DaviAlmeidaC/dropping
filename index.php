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
    <div class="links_header">
        <a class="liks_baixo" href="">Ofertas do dia</a>
        <a class="liks_baixo" href="">Entrar em contato</a>
        <a class="liks_baixo" href="">Comprar novamente</a>
        <a class="liks_baixo" href="">Redes sociais</a>
    </div>

    
    <section class="carrossel">
    <p class="carrosel__titulo2"></p>

    <div class="carrossel__container">
<div class="swiper">

<div class="swiper-pagination"></div>


<div class="swiper-wrapper">

<div class="swiper-slide"><img class="img-carrosel" src="img/Frame 4.png" alt=""></div>
<div class="swiper-slide"><img class="img-carrosel" src="img/frame5.png" alt=""></div>
<div class="swiper-slide"><img class="img-carrosel" src="img/frame6.png" alt=""></div>


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

<div class="swiper-slide"><img class="img-carrosel1" src="img/Frame 6.png" alt=""></div>
<div class="swiper-slide"><img class="img-carrosel1" src="img/Frame 7.png" alt=""></div>
<div class="swiper-slide"><img class="img-carrosel1" src="img/Frame 8.png" alt=""></div>
<div class="swiper-slide"><img class="img-carrosel1" src="img/Frame 9.png" alt=""></div>
<div class="swiper-slide"><img class="img-carrosel1" src="img/Frame 9.png" alt=""></div>

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

<div class="swiper-slide"><img class="img-carrosel1" src="img/Frame 6.png" alt=""></div>
<div class="swiper-slide"><img class="img-carrosel1" src="img/Frame 7.png" alt=""></div>
<div class="swiper-slide"><img class="img-carrosel1" src="img/Frame 8.png" alt=""></div>
<div class="swiper-slide"><img class="img-carrosel1" src="img/Frame 9.png" alt=""></div>
<div class="swiper-slide"><img class="img-carrosel1" src="img/Frame 9.png" alt=""></div>


</div>



<div class="swiper-button-prev"></div>
<div class="swiper-button-next"></div>


</div>


</body>

<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script><!--importação do js-->
<script>const swiper = new Swiper('.swiper', {
    
    spaceBetween: -1300,
    slidesPerView: 3,
    pagination: {
    el: '.swiper-pagination',
    type: 'bullets',
    },
  });</script>
</html>