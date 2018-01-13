<?php
  function getPrenom($var) {
    include("../Modele/connect.php");
    $query = "SELECT prenom FROM Enfant WHERE idEnfant = $var";
    $result = mysqli_query($co,$query);
    $array = mysqli_fetch_assoc($result);
    return $array["prenom"];
  }

  function getNom($var) {
    include("../Modele/connect.php");
    $query = "SELECT nom FROM Enfant WHERE idEnfant = $var";
    $result = mysqli_query($co,$query);
    $array = mysqli_fetch_assoc($result);
    return $array["nom"];
  }

  function getDateNaissance($var) {
    include("../Modele/connect.php");
    $query = "SELECT dateNaissance FROM Enfant WHERE idEnfant = $var";
    $result = mysqli_query($co,$query);
    $array = mysqli_fetch_assoc($result);
    return $array["dateNaissance"];
  }

  if(isset(($_POST["prenom"])) and isset($_POST["nom"]) and isset($_POST["date"])) {
    require_once("../Modele/connect.php");
    $prenom = $_POST["prenom"];
    $nom = $_POST["nom"];
    $date = $_POST["date"];
    $id = $_GET["id"];
    $query2 = "UPDATE ENFANT SET nom = '$nom', prenom = '$prenom', dateNaissance = '$date' WHERE idEnfant ='$id'";
    $result2 = mysqli_query($co,$query2);
    header("Location:../Vue/index.php");
  }

?>
