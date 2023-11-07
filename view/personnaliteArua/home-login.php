<?php
?>

</doctype html>
<html lang="pt-br">

<head>
<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../../css/magnific-popup.css">
        <link rel="stylesheet" href="../../css/main.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&family=Montserrat:wght@100;200;300;400;500&family=Parisienne&display=swap"
            rel="stylesheet">

    <title>Home - Personnalité Aruã Cabelo e Estética</title>
</head>

<body>

    <?php
    require_once '../../view/personnaliteArua/home-login.php';
    ?>

    <!--Navbar-->
    <nav id="navbar" class="navbar sticky-top navbar-expand-lg navbar-dark ">
        <div class="container">
            <!--Img Logo Navbar-->
            <div id="imgLogoNavbar">
                <a href="home-login.php" class="navbar-brand">
                    <img src="../../assets/Arua_logo_padrao.png" alt="logo">
                </a>
            </div>
            <!--Img Logo Navbar-->

            <!--Button-->
            <button type="button" id="canvas" class="navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#itens">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!--Button-->

            <!--Itens/Menu-->
            <div class="offcanvas offcanvas-end" id="itens" tabindex="-1">
                <!--Canvas Header-->
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title">Personnalité Aruã</h5>
                    <button type="button" class="btn-close btn-close-white text-reset" data-bs-dismiss="offcanvas" aria-label="cl"></button>
                </div>
                <!--Canvas Header-->

                <!--Canvas body-->
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1">
                        <li class="nav-item">
                            <a class="nav-link" href="home-login.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="sobre.php">Sobre</a>
                        </li>


                        <!--Dropdown-->
                        <li class="nav-item dropdown ">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#">Serviços</a>
                            <ul id="bgDropdown" class="dropdown-menu dropdown-menu-dark">
                                <li>
                                    <a href="servicoFem.php" class="dropdown-item text-white">Feminino</a>
                                </li>
                                <li>
                                    <a href="servicoMas.php" class="dropdown-item text-white">Masculino</a>
                                </li>
                            </ul>
                        </li>

                            <li class="nav-item">
                                <a class="nav-link btn btn-outline-warning" href="logout.php">Sair</a>
                            </li>

                    </ul>
                </div>
                <!--Canvas body-->
            </div>
            <!--Itens/Menu-->
        </div>
    </nav>
    <!--Navbar-->

    <!--Carousel-->
    <div id="containerCarousel" class="container-fluid">
        <div id="carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <!--Indicadores-->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active rounded-circle"></button>
                <button type="button" data-bs-target="#carousel" data-bs-slide-to="1" class=" rounded-circle"></button>
            </div>
            <!--Indicadores-->

               <!--img Carousel-->
               <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="10000">
                            <img src="../../assets/Home/ImgHomeCarousel1.jpg" alt="imgCarousel1">

                            <!--Button carousel-->
                            <div id="btnEfeito">
                                <a href="../../view/personnaliteArua/servicoFem.php">
                                <button class="btn btn-warning">Agendar Um Hórario</button>
                                </a>
                            </div>
                            <!--Button carousel-->

                            <!--Carousel-caption-->
                            <div class="carousel-caption">
                                <div class="carousel-title">
                                    Tudo o que você
                                </div>
                                <div class="carousel-title">
                                    precisa
                                </div>
                                <div class="carousel-title">
                                    em um único lugar
                                </div>
                            </div>
                            <!--Carousel-caption-->
                        </div>

                        <div class="carousel-item " data-bs-interval="10000">
                            <img src="../../assets/Home/ImgHomeCarousel2.jpg" alt="imgCarousel2">

                            <div id="btnEfeito">
                                <a href="../../view/personnaliteArua/servicoFem.php">
                                <button class="btn btn-warning">Conheça nossos serviços!</button>
                                </a>
                            </div>

                            <div class="carousel-caption">
                                <div class="carousel-title">
                                    você
                                </div>
                                <div class="carousel-title">
                                    sempre
                                </div>
                                <div class="carousel-title">
                                    linda
                                </div>
                            </div>

                        </div>

                    </div>

                    <!--img Carousel-->

                    <!--Button-->
                    <button class="carousel-control-prev" data-bs-target="#carousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>

                    <button class="carousel-control-next" data-bs-target="#carousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>
                    <!--Button-->
                </div>
            </div>
            <!--Carousel-->

            <!--Bem-Vindo-->
            <div id="containerBemVindo" class="container-fluid">
                <div class="row full-height">
                    <div class="col-md-5">
                        <div class="row full-height justify-content-center align-items-center">
                            <div class="col-11 align-items-center text-center">
                                <!--Img Logo Bem Vindo-->
                                <div id="imgLogoBemVindo">
                                    <img src="../../assets/Logos/Img_Logo_Cinza.png" alt="imgLogoBemVindo">
                                </div>
                                <!--Img Logo Bem Vindo-->

                                <!--Conteudo Bem Vindo-->
                                <h1 class="title">Bem-Vindo</h1>
                                <p>O Personnalité Aruã Boulevard, localizado no Shopping Boulevard,
                                    é um dos principais salões da região de Mogi das Cruzes,
                                    sendo referência no segmento de beleza da região.</p>
                                <a href="sobre.php" class="link-sobre">
                                    Saiba-Mais
                                </a>
                                <!--Conteudo Bem Vindo-->
                            </div>
                        </div>
                    </div>
                    <!--Img Faixada Loja-->
                    <div id="imgFachada" class="col-md-6 col-12 ">
                        <img src="../../assets/Home/ImgHomeBemVindo.jpg" alt="imgFachada">
                    </div>
                    <!--Img Faixada Loja-->
                </div>
            </div>
            <!--Bem-Vindo-->

            <!--Serviços-->
            <div id="containerServico" class="container-fluid ">
                <!--Title Serviço-->
                <h1 class="text-center title">Serviços</h1>
                <!--Title Serviço-->

                <div class="row justify-content-around">
                    <!--Card Feminino-->
                    <div class="col-lg-4">
                        <div class="card">
                            <!--img Serviço Feminino-->
                            <img src="../../assets/Home/ImgHomeServicoFem.jpg" class="card-img-top" id="imgServicoHome"
                                alt="ImgHomeServicoFem">
                            <!--img Serviço Feminino-->

                            <!--card-body-->
                            <div class="card-body">
                                <h3 class="card-title text-center">Feminino</h3>
                                <p class="card-text text-center">Todo o cuidado que você merece em um único lugar.
                                    Profissionais especializados para realização de cortes, makes, alongamentos de
                                    unhas, tratamento facial e podologia.</p>
                                <div class=" d-flex align-items-center justify-content-center">
                                    <a id="btnServico" href="servicoFem.php" class="btn btn-warning card-link">
                                        Ver Serviços
                                    </a>
                                </div>
                            </div>
                            <!--card-body-->
                        </div>
                    </div>
                    <!--Card Feminino-->

                    <!--Card Masculino-->
                    <div class="col-lg-4">
                        <div class="card">
                            <!--img Serviço Masculino-->
                            <img src="../../assets/Home/ImgHomeServicoMasc.jpg" class="card-img-top" id="imgServicoHome"
                                alt="ImgHomeServicoMasc">
                            <!--img Serviço Masculino-->

                            <!--card-body-->
                            <div class="card-body">
                                <h3 class="card-title text-center">Masculino</h3>
                                <p class="card-text text-center">Conforto e privacidade para o público masculino em um
                                    ambiente estilizado e de bom gosto para a realização de corte, tratamento facial,
                                    cuidado com as unhas e barba.</p>
                                <div class=" d-flex align-items-center justify-content-center">
                                    <a id="btnServico" href="servicoMas.php" class="btn btn-warning card-link">
                                        Ver Serviços
                                    </a>
                                </div>
                            </div>
                            <!--card-body-->
                        </div>
                    </div>
                    <!--Card Masculino-->
                </div>
            </div>
            <!--Serviços-->

            <!--Depoimentos-->
            <div id="containerDepoimentos" class="container-fluid bg-dark">
                <!--Title Depoimentos-->
                <h1 class="text-center title">Depoimentos</h1>
                <!--Title Depoimentos-->

                <!--Carousel Depoimentos-->
                <div id="carouselDepoimento" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
                    <!--Div Depoimentos-->
                    <div class="carousel-inner Depoimentos">
                        <div class="carousel-item active">
                            <p class="text-depoimento">Agradeço todo atendimento que tive, fui muito bem atendida pelas
                                meninas, em especial senão me engano a
                                Flor que deixou meu cabelo irreconhecível... e a Evelyn que fez uma make
                                incrível! Com certeza recomendo e voltarei. Obrigada</p>
                        </div>
                        <div class="carousel-item">
                            <p class=" text-depoimento">Foi minha primeira vez no salão. Fui atendida no horário. Adorei
                                o atendimento no geral, mas em especial a Flor que cortou meu cabelo. Amei! Com
                                certeza voltarei mais vezes .
                            </p>
                        </div>
                        <div class="carousel-item">
                            <p class="text-depoimento">Gostaria de Parabenizar o Personnalité Aruã pela excelente
                                qualidade
                                dos serviços e principalmente pelo atendimento que recebi. Eu saí do salão realizada,
                                meu cabelo ficou maravilhoso Apaixonada por tudo! - Voltarei e super indico!</p>
                        </div>
                    </div>
                    <!-- Div Depoimentos-->

                    <!--Indicadores-->
                    <div id="indicatorsDepoimentos" class="carousel-indicators">
                        <ul class="imgIndicators">
                            <li>
                                <img src="../../assets/Home/ImgHomeDepoimentos1.jpg" class="img-fluid active rounded-circle"
                                    data-bs-target="#carouselDepoimento" data-bs-slide-to="0" alt="ImgHomeDepoimentos1">
                            </li>
                            <li>
                                <img src="../../assets/Home/ImgHomeDepoimentos2.jpg" class="img-fluid rounded-circle"
                                    data-bs-target="#carouselDepoimento" data-bs-slide-to="1" alt="ImgHomeDepoimentos2">
                            </li>
                            <li>
                                <img src="../../assets/Home/ImgHomeDepoimentos3.jpg" class="img-fluid rounded-circle"
                                    data-bs-target="#carouselDepoimento" data-bs-slide-to="2" alt="ImgHomeDepoimentos3">
                            </li>
                        </ul>
                    </div>
                    <!--Indicadores-->
                </div>
                <!--Carousel Depoimentos-->
            </div>
            <!--Depoimentos-->

            <!--Info-->
            <div id="containerInfo" class="container-fluid bg-light">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="row justify-content-between">
                            <!--Img Info-->
                            <div id="localImg" class="col-md-5 col-12 ">
                                <img src="../../assets/Home/ImgHomeInterior.jpg" alt="ImgHomeInterior">
                            </div>
                            <!--Img Info-->

                            <!--Localização e Horários-->
                            <div id="info_text" class="col-md-6">
                                <h2>
                                    Onde Estamos
                                </h2>
                                <hr>
                                <p>
                                    Avenida Presidente General Dutra 100, (aruã Boulevard) - Mogi das Cruzes - SP
                                </p>
                                <h2>
                                    Horário de Funcionamento
                                </h2>
                                <hr>
                                <p>
                                    <span>Seg à Sex</span>- 8h às 20h
                                </p>
                                <p>
                                    <span>Sábados</span>- 9h às 18h
                                </p>
                            </div>
                            <!--Localização e Horários-->
                        </div>
                    </div>

                    <!--Contato-->
                    <div id="contato" class="col-12 border">
                        <h2 class="text-center">
                            Quer receber as nossas dicas e novidades?
                        </h2>

                        <!--form Info-->
                        <form action="" method="post">
                            <div class="d-flex align-items-center justify-content-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                                    class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
                                </svg>
                                <input type="email" name="email" class="form-control" placeholder="Insira seu E-mail">
                                <button type="button" class="btn btn-warning">Enviar</button>
                            </div>
                        </form>
                        <!--form Info-->
                    </div>
                    <!--Contato-->
                </div>
            </div>
            <!--Info-->

            <!--Galeria-->
            <div id="containerGaleria" class="container-fluid">
                <!--Title Galeria-->
                <div>
                    <h1 class="text-center title">Galeria</h1>
                </div>
                <!--Title Galeria-->

                <!--Imgs Galeria-->
                <div class="galeria">
                    <div class="row row-cols-1 row-cols-md-3 row-cols-lg-5 g-3 ">
                        <div class="col imgGaleria">
                            <a href="../../assets/Galeria/Img_Galeria1.jpg" class="popup-link">
                                <div id="hover-img">
                                    <img src="../../assets/Galeria/Img_Galeria1.jpg" class="img-fluid" alt="Img_Galeria1">
                                </div>
                            </a>
                        </div>
                        <div class="col imgGaleria">
                            <a href="../../assets/Galeria/Img_Galeria2.jpg" class="popup-link">
                                <div id="hover-img">
                                    <img src="../../assets/Galeria/Img_Galeria2.jpg" class="img-fluid" alt="Img_Galeria2">
                                </div>
                            </a>
                        </div>
                        <div class="col imgGaleria">
                            <a href="../../assets/Galeria/Img_Galeria3.jpg" class="popup-link">
                                <div id="hover-img">
                                    <img src="../../assets/Galeria/Img_Galeria3.jpg" class="img-fluid" alt="Img_Galeria3">
                                </div>
                            </a>
                        </div>
                        <div class="col imgGaleria">
                            <a href="../../assets/Galeria/Img_Galeria4.jpg" class="popup-link">
                                <div id="hover-img">
                                    <img src="../../assets/Galeria/Img_Galeria4.jpg" class="img-fluid" alt="Img_Galeria4">
                                </div>
                            </a>
                        </div>
                        <div class="col imgGaleria">
                            <a href="../../assets/Galeria/Img_Galeria5.jpg" class="popup-link">
                                <div id="hover-img">
                                    <img src="../../assets/Galeria/Img_Galeria5.jpg" class="img-fluid" alt="Img_Galeria5">
                                </div>
                            </a>
                        </div>
                        <div class="col imgGaleria">
                            <a href="../../assets/Galeria/Img_Galeria6.jpg" class="popup-link">
                                <div id="hover-img">
                                    <img src="../../assets/Galeria/Img_Galeria6.jpg" class="img-fluid" alt="Img_Galeria6">
                                </div>
                            </a>
                        </div>
                        <div class="col imgGaleria">
                            <a href="../../assets/Galeria/Img_Galeria7.jpg" class="popup-link">
                                <div id="hover-img">
                                    <img src="../../assets/Galeria/Img_Galeria7.jpg" class="img-fluid" alt="Img_Galeria7">
                                </div>
                            </a>
                        </div>
                        <div class="col imgGaleria">
                            <a href="../../assets/Galeria/Img_Galeria8.jpg" class="popup-link">
                                <div id="hover-img">
                                    <img src="../../assets/Galeria/Img_Galeria8.jpg" class="img-fluid" alt="Img_Galeria8">
                                </div>
                            </a>
                        </div>
                        <div class="col imgGaleria">
                            <a href="../../assets/Galeria/Img_Galeria9.jpg" class="popup-link">
                                <div id="hover-img">
                                    <img src="../../assets/Galeria/Img_Galeria9.jpg" class="img-fluid" alt="Img_Galeria9">
                                </div>
                            </a>
                        </div>
                        <div class="col imgGaleria">
                            <a href="../../assets/Galeria/Img_Galeria10.jpg" class="popup-link">
                                <div id="hover-img">
                                    <img src="../../assets/Galeria/Img_Galeria10.jpg" class="img-fluid" alt="Img_Galeria10">
                                </div>
                            </a>
                        </div>
                        <div class="col imgGaleria">
                            <a href="../../assets/Galeria/Img_Galeria11.jpg" class="popup-link">
                                <div id="hover-img">
                                    <img src="../../assets/Galeria/Img_Galeria11.jpg" class="img-fluid" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col imgGaleria">
                            <a href="../../assets/Galeria/Img_Galeria12.jpg" class="popup-link">
                                <div id="hover-img">
                                    <img src="../../assets/Galeria/Img_Galeria12.jpg" class="img-fluid" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col imgGaleria">
                            <a href="../../assets/Galeria/Img_Galeria13.jpg" class="popup-link">
                                <div id="hover-img">
                                    <img src="../../assets/Galeria/Img_Galeria13.jpg" class="img-fluid" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col imgGaleria">
                            <a href="../../assets/Galeria/Img_Galeria14.jpg" class="popup-link">
                                <div id="hover-img">
                                    <img src="../../assets/Galeria/Img_Galeria14.jpg" class="img-fluid" alt="">
                                </div>

                            </a>
                        </div>
                        <div class="col imgGaleria">
                            <a href="../../assets/Galeria/Img_Galeria15.jpg" class="popup-link">
                                <div id="hover-img">
                                    <img src="../../assets/Galeria/Img_Galeria15.jpg" class="img-fluid" alt="">
                                </div>

                            </a>
                        </div>
                    </div>
                </div>
                <!--Imgs Galeria-->
            </div>
            <!--Galeria-->

            <!--Rodapé-->
            <footer>
                <div id="containerRodape" class="container-fluid bg-dark">
                    <div class="row justify-content-center">
                        <div class="col-12 col-sm-4 col-md-3 col-lg-2">
                            <!--Img Logo Rodapé-->
                            <div id="imgLogoRodape">
                                <img src="../../assets/Logos/Img_Logo_Padrao.png" alt="Img_Logo_Padrao">
                            </div>
                            <!--Img Logo Rodapé-->

                            <!--Icons Rede Socias-->
                            <div id="redeSocias" class="d-flex align-items-center justify-content-center">
                                <!--Insta-->
                                <a href="https://www.instagram.com/personnalite_arua/" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                                        class="bi bi-instagram" viewBox="0 0 16 16">
                                        <path
                                            d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                                    </svg>
                                </a>
                                <!--Insta-->
                                <!--Facebook-->
                                <div class="bi-facebook">
                                    <a href="https://www.facebook.com/personnalitearua/?ref=page_internal"
                                        target="_blank">
                                        <img src="../../assets/Icons/icons8-facebook.svg" alt="">
                                    </a>
                                </div>
                                <!--Facebook-->
                            </div>
                            <!--Icons Rede Socias-->
                        </div>

                        <!--Informações Rodapé-->
                        <div class=" col-12 col-lg-8 info-rodape">
                            <div class="row row-cols-1 row-cols-md-3 ">
                                <div class="col">
                                    <!--Telefones-->
                                    <h5 class="text-secondary">Contato</h5>
                                    <ul id="telefones">
                                        <!--Number Whats-->
                                        <li class="whats">
                                            <a href="">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                                    <path
                                                        d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                                                </svg>
                                                (11)94084-6892
                                            </a>
                                        </li>
                                        <!--Number Whats-->
                                    </ul>
                                </div>
                                <!--Telefones-->

                                <!--Horário de Funcionamento-->
                                <div class="col">
                                    <h5>Horário de Funcionamento</h5>
                                    <p>
                                        Seg à Sex - 8h às 20h
                                    </p>
                                    <p>
                                        Sábados - 9h às 18h
                                    </p>
                                </div>
                                <!--Horário de Funcionamento-->

                                <!--Localização-->
                                <div class="col">
                                    <h5>Localização</h5>
                                    <p>
                                        Avenida Presidente General Dutra 100, (aruã Boulevard) - Mogi das Cruzes - SP
                                    </p>
                                </div>
                                <!--Localização-->
                            </div>
                        </div>
                        <!--Informações Rodapé-->

                        <!--Google Maps-->
                        <div class=" col-12 col-sm-4 col-md-3 col-lg-2">
                            <div class="maps">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3659.798454984732!2d-46.25309188502406!3d-23.467733384729446!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce792137c49bb3%3A0x938854e55d40c5a6!2sShopping%20Boulevard!5e0!3m2!1spt-BR!2sbr!4v1634185428405!5m2!1spt-BR!2sbr"
                                    width="150" height="150" style="border:0;" allowfullscreen="" loading="lazy">
                                </iframe>
                            </div>
                        </div>
                        <!--Google Maps-->
                    </div>
                </div>
            </footer>
            <!--Rodapé-->

            <!--whats-link-->
            <div id="whatsapp-link">
                <a href="https://web.whatsapp.com/send?phone=5511937645654" target="_blank">
                    <img src="../../assets/Icons/icons8-whatsapp.svg" alt="">
                </a>
            </div>
            <!--whats-link-->
        </div>
        <!--Content-->

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
            integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous">

        </script>
        <script src="../../js/bootstrap.min.js"></script>
        <script src="../../js/jquery-3.6.0.min.js"></script>
        <script src="../../js/jquery.magnific-popup.min.js"></script>
        <script src="../../js/script.js"></script>

    </body>

    </html>