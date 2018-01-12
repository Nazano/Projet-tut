<?php
    require_once("../Modele/clean.php");
    require_once("../Modele/connect.php");
    require_once("../Modele/produit.php");
    session_start();
    $id = clean_input($_GET['id']);
    $result = mysqli_query($co,"CALL supprimer_produit('$id')") or die("echec de la suppression du produit");
    header('Location: ../Vue/produits.php');
?>