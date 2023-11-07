<?php
require_once '../../model/Agendamento.php';
$a = new Agendamento;

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

    <title>Dashboard - Agenda</title>
</head>

<body>

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

            <!--Agenda-->
            <div class="col-12 col-md-10 col-lg-10 col-xl-10">
                <!--Title-->
                <div class="row pt-5 px-5">
                    <h1 class="title-dash">Agenda</h1>
                </div>
                <!--Title-->

                <!--Conteudo Agenda-->
                <div class="row pt-5 px-5 justify-content-center">
                    <!--CardTotal-->
                    <div class="col-12 col-lg-4">
                        <div id="cardTotal" class="card bg-warning">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-4 d-flex justify-content-center align-items-center ">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-week-fill icons" viewBox="0 0 16
                                            16">
                                            <path d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zM9.5 7h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5zm3 0h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5zM2 10.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3.5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5z" />
                                        </svg>
                                    </div>
                                    <div id="conteudo" class="col-8">
                                        <?php
                                        $link = mysqli_connect("localhost", "root", "", "personalite_aruan");

                                        $result = mysqli_query($link, "SELECT * FROM agendamento");
                                        $num_rows = mysqli_num_rows($result);

                                        ?>
                                        <h2 class="text-center text-white"><?php echo $num_rows; ?></h2>
                                        <h5 class="text-center text-white">Agendados</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--CardTotal-->

                    <!--CardCheck-->
                    <div class="col-12 col-lg-4">
                        <div id="cardCheck" class="card bg-success">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-4 d-flex justify-content-center align-items-center ">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-check-fill icons" viewBox="0 0 16
                                            16">
                                            <path d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zm-5.146-5.146-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708.708z" />
                                        </svg>
                                    </div>
                                    <div id="conteudo" class="col-8">
                                      
                                            <h2 class="text-center text-white"><?php
                                                                          
                                                                             echo $num_rows;
                                                                                ?></h2>
                                            <h5 class="text-center text-white">Finalizados</h5>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--CardCheck-->
                </div>
                <!--Conteudo Agenda-->

                <!--Table-->
                <div class=" border border-dark mt-5">
                    <div class=" d-flex justify-content-end align-items-center">
                    </div>
                    <table class="table table-responsive">
                        <thead>
                            <tr>
                                <th scope="col">Cliente</th>
                                <th scope="col">Serviço</th>
                                <th scope="col">Data</th>
                                <th scope="col">Hora</th>
                                <th scope="col">Ação</th>
                            </tr>
                        </thead>
                        <?php
                        $dados = $a->buscarDados();
                        $numeroDeLinhas = count($dados);
                        if ($numeroDeLinhas > 0) { // Tem Pessoas cadastradas no banco 
                            for ($i = 0; $i <  $numeroDeLinhas; $i++) {
                                echo "<tr>";
                                foreach ($dados[$i] as $k => $v) {
                                    if ($k != 'codAgendamento') {
                                        echo "<td>" . $v . "</td>";
                                    }
                                }

                        ?>
                                <td>
                                    <a href="dashboard-agenda.php?codAgendamento="class="btn btn-warning text-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                        </svg>
                                    Editar</a>
                                    <a href="dashboard-agenda.php?codAgendamento=<?php echo $dados[$i]['codAgendamento']; ?>"class="btn btn-success text-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                        </svg>
                                    Confirmar</a>
                                </td>
                            <?php
                                echo "</tr>";
                            }
                        } else {
                            ?>
                    </table>
                    <div class="aviso">
                        <h4>Ainda não há Clientes Agendados!</h4>
                    </div>
                <?php
                        }
                ?>
                </table>
                </div>

            </div>
            <!--Agenda-->
        </div>
    </div>
    <!--Dashboard-->




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="../../js/bootstrap.min.js"></script>
</body>

</html>

<?php
if (isset($_GET['codAgendamento'])) {
    $id_agendamento = addslashes($_GET['codAgendamento']);
    $a->confirmarServico($id_agendamento);
    echo "<script>self.location.href='dashboard-agenda.php'</script>";
}
?>