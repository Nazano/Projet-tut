<?php
    require_once("../Modele/user.php");
    include "../Modele/connect.php";
    session_start();
    $user = new user();
    $user = $_SESSION['user'];
    $user->getCo()->close();
    session_unset();
    session_destroy();
    header('Location: ../Vue/connexion.php');
?>
