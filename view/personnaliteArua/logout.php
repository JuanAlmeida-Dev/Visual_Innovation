<?php
session_start();
if(isset($_SESSION['loginUsuario'])){
    session_destroy();
}
header("Location:login.php");
?>