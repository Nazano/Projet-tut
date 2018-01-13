<?php
    require_once("../Modele/clean.php");
    require_once("../Modele/connect.php");
    require_once("../Modele/course.php");
    session_start();
    if (isset($_POST['date'],$_POST['prix'],$_POST['parent'],$_POST['produit'],$_POST['quantite'])) {
        $newPrix=clean_input($_POST['prix']);
        $newDate=clean_input($_POST['date']);
        $newPar = clean_input($_POST['parent']);
        $newProd = clean_input($_POST['produit']);
        $newQte = clean_input($_POST['quantite']);
    }
    $result = mysqli_query($co,"select * from produit where idProduit= '$newProd'") or die("Eche de la requete pour trouver le nom du produit");
    while ($row=mysqli_fetch_assoc($result)) {
        $nom = $row['libelle'];
    }
    $result = mysqli_query($co,"CALL creer_course('$nom','$newQte','$newDate','$newPrix','$newPar')") or die("echec de l'ajout du produit");
    header('Location: ../Vue/courses.php');
?>