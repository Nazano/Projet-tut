<?php 
    require_once("../Modele/clean.php");
    require_once("../Modele/connect.php");
    require_once("../Modele/produit.php");
    session_start();
    $produit = new Produit();
    $produit = $_SESSION['modifProduit'];
    if (isset($_POST['libelle'],$_POST['prix'])) {
        $newPrix=clean_input($_POST['prix']);
        $newNom=clean_input($_POST['libelle']);
    }
    $id = $produit->getID();
    $stock = $produit->getStock();
    $result = mysqli_query($co,"CALL modifier_Produit('$id','$newPrix','$stock','$newNom')") or die("echec de la maj du produit");
    header('Location: ../vue/produits.php');
?>