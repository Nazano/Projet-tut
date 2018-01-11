<?php
    require_once("../Modele/user.php");
    include "../Modele/connect.php";
    session_start();
    $user = new user();
    $user = $_SESSION['user'];
    $co->close();
    session_unset();
    session_destroy();
    header('Location: ../Vue/connexion.php');
?>
