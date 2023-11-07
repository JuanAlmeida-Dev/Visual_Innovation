<?php
require_once '../../model/Servicos.php';
$s = new Servico;

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&family=Montserrat:wght@100;200;300;400;500&family=Parisienne&display=swap" rel="stylesheet">

    <title>Dashboard - Novo Serviço</title>

</head>

<body>
    <?php
    if (isset($_GET['codServico'])) { //SE O USUÁRIO CLICOU NO BOTÃO EDITAR
        $id_update  = addslashes($_GET['codServico']);
        $res = $s->buscarDadosServico($id_update);
    }
    ?>

    <!--Dashboard-->
    <div id="containerDashboard" class="container-fluid">
        <div class="row">
            <!--Navbar left-->

            <div id="navbarDash" class="col-12  col-md-2 col-lg-2 col-xl-2 sticky-top bg-dark d-flex justify-content-center">
                <ul class="nav">
                    <!--imgLogoDash-->
                    <li id="imgLogoHome" class="nav-item">
                        <a href="../../view/personnaliteArua/home.php" class="text-decoration-none fs-3">
                            <img src="../../assets/Logos/Img_Logo_Padrao.png" alt="Img_Logo_Padrao" class="img-fluid">
                            <span class=" text-center d-none d-xl-block">Home</span>
                        </a>
                    </li>
                    <!--imgLogoDash-->

                    <!--Agenda-item-->
                    <li class="nav-item ">
                        <a href="dashboard-agenda.php" class="text-decoration-none fs-3">

                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-fill" viewBox="0 0 16 16">
                                <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V5h16V4H0V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5z" />
                            </svg>
                            <span class="d-none d-xl-inline-block">Agenda</span>
                        </a>
                    </li>
                    <!--Agenda-item-->

                    <!--Serviço-item-->

                    <li class="nav-item">
                        <a href="dashboard-servico.php" class="text-decoration-none fs-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-scissors" viewBox="0 0 16 16">
                                <path d="M3.5 3.5c-.614-.884-.074-1.962.858-2.5L8 7.226 11.642 1c.932.538 1.472 1.616.858 2.5L8.81 8.61l1.556 2.661a2.5 2.5 0 1 1-.794.637L8 9.73l-1.572 2.177a2.5 2.5 0 1 1-.794-.637L7.19 8.61 3.5 3.5zm2.5 10a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0zm7 0a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0z" />
                            </svg>
                            <span class="d-none d-xl-inline-block">Serviços</span>
                        </a>
                    </li>
                    <!--Serviço-item-->


                </ul>
            </div>
            <!--Navbar left-->

            <div class="col-12 col-md-10 col-lg-10 col-xl-10">
                <div class="row pt-5 px-5">
                    <h1>Novo Serviço</h1>
                </div>

                <div class="imgLogoNewServico">
                    <img src="../../assets/Logos/logo_png.png" alt="Logo">
                </div>

                <div id="formServico">
                    <form action="" method="post" class="border border-dark">
                        <label for="labelNome" class="form-label">Nome</label>
                        <p><input type="text" name="nome" id="labelNome" class="input" value="<?php if (isset($res)) {
                                                                                                    echo $res['nomeServico'];
                                                                                                } ?>"></p>

                        <label for="labelTempo" class="form-label">Tempo Estimado</label>
                        <p><input type="text" name="tempoEstimado" id="labelTempo" class="input" value="<?php if (isset($res)) {
                                                                                                            echo $res['tempoEstimado'];
                                                                                                        } ?>"></p>

                        <label for="labelValor" class="form-label">Valor</label>
                        <p><input type="text" name="valor" id="labelValor" class="input" value="<?php if (isset($res)) {
                                                                                                    echo $res['valorServico'];

                                                                                                } ?>"></p>

                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-dark" id="btnCadastar"><?php if (isset($res)) {
                                                                                            echo "Atualizar";
                                                                                        } else {
                                                                                            echo "Cadastrar";
                                                                                        } ?></button>
                        </div>

                        <?php
                        if (isset($_POST['nome'])) //CLICOU NO BOTÃO CADASTRAR OU EDITAR
                        {
                            //---------------------EDITAR-----------------------------//
                            if (isset($_GET['codServico']) && !empty($_GET['codServico'])) {
                                $id_upd = addslashes($_GET['codServico']);
                                $nome = addslashes($_POST['nome']);
                                $tempoEstimado = addslashes($_POST['tempoEstimado']);
                                $valor = addslashes($_POST['valor']);
                                $data = date('d/m/y');
                                if (!empty($nome) && !empty($tempoEstimado) && !empty($valor)) {
                                    //EDITAR
                                    $s->atualizarDados($id_upd, $nome, $tempoEstimado, $valor, $data);

                                    echo "<script>alert('Atualizado Com Sucesso!');
                                    self.location.href='dashboard-servico.php';</script>";
                                } else {
                        ?>
                                    <div class="aviso">
                                        <h4>Preencha todos os campos</h4>
                                    </div>
                                <?php
                                }
                            } else {
                                $nome = addslashes($_POST['nome']);
                                $tempoEstimado = addslashes($_POST['tempoEstimado']);
                                $valor = addslashes($_POST['valor']);
                                $data = date('d/m/y');
                                if (!empty($nome) && !empty($tempoEstimado) && !empty($valor)) {
                                    if ($s->cadastrarServico($nome, $tempoEstimado, $valor, $data)) {

                                        echo "<script>alert('Cadastrado Com Sucesso!');
                                        self.location.href='dashboard-servico.php';</script>";
                                    }
                                } else {
                                ?>
                                    <div class="alert alert-danger text-center mt-2" role="alert">
                                        Preencha Todos os campos!!!
                                    </div>
                        <?php
                                }
                            }
                        }
                        ?>

                    </form>
                </div>
            </div>

        </div>
    </div>
    <!--Dashboard-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="../../js/bootstrap.min.js"></script>

</body>

</html>