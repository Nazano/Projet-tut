<?php 
    require_once("../Modele/clean.php");
    require_once("../Modele/connect.php");
    require_once("../Modele/course.php");
    session_start();
    $course = new Course();
    $course = $_SESSION['modifCourse'];
    #echo "prix " . $_POST['prix'] . "<br/>" . "date" . $_POST['date'] . "<br/> ". "parent " . $_POST['parent'] . "<br/>" . "produit" . $_POST['produit'] . "<br/>" . "quantite" . $_POST['quantite'];
    if (isset($_POST['date'],$_POST['prix'],$_POST['parent'],$_POST['produit'],$_POST['quantite'])) {
        $newPrix=clean_input($_POST['prix']);
        $newDate=clean_input($_POST['date']);
        $newPar = clean_input($_POST['parent']);
        $newProd = clean_input($_POST['produit']);
        $newQte = clean_input($_POST['quantite']);
    }
    $id = $course->getIdAchat();
    echo "UPDATE achat SET qteAchete='$newQte',dateAchat='$newDate',prix='$newPrix',idParent='$newPar',idProduit='$newProd' WHERE idAchat='$id'";
    
    $result = mysqli_query($co,"UPDATE achat SET qteAchete='$newQte',dateAchat='$newDate',prix='$newPrix',idParent='$newPar',idProduit='$newProd' WHERE idAchat='$id'") or die("echec de la maj du produit");
    header('Location: ../vue/courses.php');
?>