<?php 
    require_once("../Modele/clean.php");
    require_once("../Modele/connect.php");
    require_once("../Modele/consommation.php");
    session_start();
    #echo "prix " . $_POST['prix'] . "<br/>" . "date" . $_POST['date'] . "<br/> ". "parent " . $_POST['parent'] . "<br/>" . "produit" . $_POST['produit'] . "<br/>" . "quantite" . $_POST['quantite'];
    if (isset($_POST['enfant'],$_POST['produit'],$_POST['quantite'])) {
        $Enfant = clean_input($_POST['enfant']);
        $Prod = clean_input($_POST['produit']);
        $Qte = clean_input($_POST['quantite']);
    }
    echo "call ajouter_consommation('$Prod','$Enfant','$Qte)". "<br/>";
    $result = mysqli_query($co,"call ajouter_consommation('$Prod','$Enfant','$Qte')") or die("echec de l'ajout de la consommation (faire attention à bien remplir chaque champs ! )");
    
    header('Location: ../vue/consommation.php');
?>