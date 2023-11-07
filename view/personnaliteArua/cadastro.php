<?php
require_once '../../model/Usuario.php';
$u = new Usuario;
?>

<doctype html>
    <html lang="pt-br">

    <head>
        <!-- Required meta tags-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../../css/main.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&family=Montserrat:wght@100;200;300;400;500&family=Parisienne&display=swap" rel="stylesheet">

        <title>Cadastro - Personnalité Aruã Cabelo e Estética</title>
    </head>

    <body id="bg-body" onload="loading()">
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
                        <a href="home.html" class="navbar-brand">
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

            <!--cadastro-->
            <div id="Cadastro" class="container-fluid ">
                <!--Return Login-->
                <div class="align-items-center">
                    <a href="login.php" class="text-decoration-none">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                        </svg>
                    </a>
                    <a href="login.php" class="text-secondary text-center a-item">Login</a>
                </div>
                <!--Return Login-->

                <!--tilte-->
                <div class="title-cadastro">
                    <h1 class="text-center">Complete sua Conta Pessoal</h1>
                </div>
                <!--tilte-->

                <!--Form Cadastro-->
                <div class="formCadastro">
                    <form action="" method="post">
                        <p>
                            <input type="text" name="nome" placeholder="Nome">
                        </p>
                        <p>
                            <input type="email" name="email" placeholder="E-mail">
                        </p>
                        <p class="mt-3">
                            <input type="date" name="date">
                        </p>
                        <div class="row mb-3">
                            <div class="col-sm-12 col-md-6">
                                <input type="password" name="senha" placeholder="Senha">
                            </div>
                            <div class=" col-md-6 col-sm-12 valid-senha">
                                <input type="password" name="validacaoSenha" placeholder="Digite Novamente a Senha">
                            </div>
                        </div>

                        <!--Button-->
                        <div class="d-flex align-items-center justify-content-center">
                            <button type="submit" id="btnCreate" class="btn btn-dark">Criar Conta</button>
                            <?php

                            if (isset($_POST['email'])) {
                                $nomeUsuario = addslashes($_POST['nome']);
                                $dataNascimento = addslashes($_POST['date']);
                                $loginUsuario = addslashes($_POST['email']);
                                $senha = addslashes($_POST['senha']);
                                $validarSenha = addslashes($_POST['validacaoSenha']);

                                if (!empty($nomeUsuario) && !empty($dataNascimento) && !empty($loginUsuario) && !empty($senha)) {
                                    $con =  new PDO("mysql:dbname=personalite_aruan; host=localhost", 'root', '');
                                    if ($u->cadastrar($nomeUsuario, $loginUsuario, $dataNascimento, $senha)) {
                                        echo "<script>alert('Cadastrado com sucesso!');
                                        self.location.href='login.php'</script>";
                                    }
                                } else {
                            ?>
                                    <div class="alert alert-danger text-center ml-100" role="alert">
                                        Preencha Todos os campos!!!
                                    </div>
                            <?php
                                }
                            }
                            ?>
                        </div>
                        <!--Button-->
                    </form>
                    <!--Form Cadastro-->
                </div>
            </div>
            <!--cadastro-->
        </div>
        <!--Content-->

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous">
        </script>
        <script src="../../js/bootstrap.min.js"></script>
        <script src="../../js/script.js"></script>

    </body>

    </html>