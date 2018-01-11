<?php
    
    require_once("../Modele/user.php");
    session_start();
    $user = new user();
    $user = $_SESSION['user'];
    $user->getCo()->close();
    session_unset();
    session_destroy();
    header('Location: ../Vue/formulaire_connexion.php');
?>