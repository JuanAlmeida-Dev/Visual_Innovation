<?php
session_start();

    $loginUsuario = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);
    
    $conexao = mysqli_connect("localhost", "root", "", "personalite_aruan");
    $query = "SELECT * FROM tb_usuario WHERE loginUsuario='$loginUsuario' and senha='$senha'";

    
    if($result=mysqli_query($conexao, $query)){

        $linha = mysqli_fetch_array($result);
        if (!empty($linha)){
            $_SESSION['loginUsuario'] = $linha['loginUsuario'];
            $_SESSION['senha'] = $linha['senha'];
            header('Location: ../view/personnaliteArua/home-login.php');
        }else {
            unset($_SESSION['loginUsuario']);
            unset($_SESSION['senha']);
            echo "<script>alert('Aqui erro linha 22>Erro: Usuario ou senha inválida!');
            self.location.href=' ../view/personnaliteArua/login.php'</script>";  
            
        }
        
    } else {
        echo "<script>alert('Aqui linha 28>Erro: Usuario ou senha inválida!');
        self.location.href='../view/personnaliteArua/login.php'</script>";  
    }
    
?>