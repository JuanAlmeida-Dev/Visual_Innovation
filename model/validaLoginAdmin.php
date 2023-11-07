<?php
session_start();
require '../model/logar.php';

if ($_SESSION['loginUsuario'] == 'adminpersonalite@gmail.com') {
    header("Location: ../view/personnaliteArua-Adm/dashboard-agenda.php");
}
