<?php
    require_once("../Modele/clean.php");
    require_once("../Modele/connect.php");
    require_once("../Modele/course.php");
    session_start();
    $id = clean_input($_GET['id']);
    $result = mysqli_query($co,"DELETE FROM achat WHERE idAchat='$id'") or die("echec de la suppression du produit");
    header('Location: ../Vue/courses.php');
?>