<?php

    $novaSenha = $_POST['novaSenha'];
    $emailRecuperar = $_POST['emailRecuperar'];

    $conexao = mysqli_connect("localhost", "root", "", "personalite_aruan");
    
    $query = mysqli_query($conexao,"UPDATE `tb_usuario` SET `senha` = '$novaSenha' WHERE `loginUsuario` = '$emailRecuperar'");

    header("Location: login.php");

    ?>

