<?php
    require_once("../Modele/clean.php");
    require_once("../Modele/connect.php");
    require_once("../Modele/produit.php");
    session_start();
    if (isset($_POST['libelle'],$_POST['prix'])) {
        $prix=clean_input($_POST['prix']);
        $nom=clean_input($_POST['libelle']);
    }
    $result = mysqli_query($co,"CALL ajouter_produit('$prix',0,'$nom')") or die("echec de l'ajout du produit");
    header('Location: ../Vue/produits.php');
?>