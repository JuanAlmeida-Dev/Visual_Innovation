<?
session_start();
require_once('../conexao/conexao.php');
?>

<doctype html>
    <html lang="pt-br">


    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../../css/main.css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&family=Montserrat:wght@100;200;300;400;500&family=Parisienne&display=swap" rel="stylesheet">

        <title>Login - Personnalité Aruã Cabelo e Estética</title>
    </head>

    <body onload="loading()">
        <!--PreLoader-->
        <div class="box-load">
            <div class="preload"></div>
        </div>
        <!--PreLoader-->

        <!--Content-->
        <div class="content">
            <!--Navbar-->
            <nav id="navbar" class="navbar sticky-top navbar-expand-lg navbar-dark ">
                <div class="container">
                    <!--Img Logo Navbar-->
                    <div id="imgLogoNavbar">
                        <a href="home.php" class="navbar-brand">
                            <img src="../../assets/Logos/Img_Logo_Padrao.png" alt="Img_Logo_Padrao">
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
                                    <a class="nav-link" href="home.php">Home</a>
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
                                <!--Dropdown-->

                                <li class="nav-item">
                                    <a class="nav-link" href="login.php">Login</a>
                                </li>
                            </ul>
                        </div>
                        <!--Canvas body-->
                    </div>
                    <!--Itens/Menu-->
                </div>
            </nav>
            <!--Navbar-->

            <!--Login-->
            <div id="containerLogin" class="container-fluid">
                <!--Img Logo-->
                <div class="imgLogoLogin">
                    <img src="../../assets/Logos/Img_Logo.png" alt="Img_Logo_png">
                </div>
                <!--Img Logo-->

                <div class="formLogin">
                    <!--Form Login-->
                    <form action="../../model/logar.php" method="post">
                        <!--Titles-->
                        <h2 class="display-5 text-center mt-4">Login</h2>
                        <p class="lead mb-2 text-center">Faça o login para continuar</p>
                        <!--Titles-->

                        <!--Label/Input-->
                        <label for="labelEmail" class="form-label">
                            Usuário
                        </label>
                        <p>
                            <input type="email" name="email" id="labelEmail" placeholder="Digite seu E-mail" class="input p-2">
                        </p>
                        <label for="labelPassword" class="form-label">
                            Senha
                        </label>
                        <p>
                            <input type="password" name="senha" id="labelPassword" placeholder="Digite sua Senha" class="input p-2">
                        </p>
                        <!--Label/Input-->

                        <!--Checkbox/Esqueceu a senha-->
                        <div class="mt-4 mb-4 d-flex align-items-center">
                            <div class="form-check">
                                <input type="checkbox" name="lembrar" id="labelCheck" class="form-check-input">
                                <label for="labelCheck" class="form-check-label">Lembre-me</label>
                            </div>
                            <a href="../personnaliteArua/recuperarSenha.php" class="text-secondary ms-auto link-senha">Esqueceu a senha</a>
                        </div>
                        <!--Checkbox/Esqueceu a senha-->

                        <!--Button Logar-->
                        <div class="d-flex justify-content-center">
                            <button type="submit" id="btnLogar" class="btn btn-dark text-center">Logar</button>
                        </div>
                        <!--Button Logar-->

                    </form>
                    <!--Form Login-->

                    <!--Create conta-->
                    <div id="createConta" class="d-flex align-items-center justify-content-end">
                        <h6 class="text-center m-0 me-2 text-secondary">Ainda não tem conta?</h6>
                        <a href="cadastro.php" class="btn btn-light border me-3">Cadastre-se</a>
                    </div>
                    <!--Create conta-->
                </div>
            </div>
            <!--Login-->
        </div>
        <!--Content-->


        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous">
        </script>
        <script src="../../js/bootstrap.min.js"></script>
        <script src="../../js/script.js"></script>
    </body>

    </html>