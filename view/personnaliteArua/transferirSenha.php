<?php

    $emailRecuperar = $_POST['emailRecuperar'];

    $conexao = mysqli_connect("localhost", "root", "", "personalite_aruan");

    $sql = "SELECT `loginUsuario` FROM `tb_usuario` WHERE loginUsuario = '$emailRecuperar' ";

    mysqli_query($conexao, 'SET NAMES utf8');

    $cadastros = mysqli_query($conexao, $sql);
   
    $emailExiste = false;

    while($cadastro = mysqli_fetch_array($cadastros)){
        if($cadastro['loginUsuario'] == $emailRecuperar){
            $emailExiste = true;
        }
    }

    if ($emailExiste){
        header("Location: novaSenha.php");
    }else {
        header("Location: login.php");
        "<script>alert('Erro: E-mail não cadastrado no banco de dados')</script>";  
    }

?>


