<?php
  function getPrenom($var) {
    include("../Modele/connect.php");
    $query = "SELECT prenom FROM Parent WHERE idParent = $var";
    $result = mysqli_query($co,$query);
    $array = mysqli_fetch_assoc($result);
    return $array["prenom"];
  }

  function getNom($var) {
    include("../Modele/connect.php");
    $query = "SELECT nom FROM Parent WHERE idParent = $var";
    $result = mysqli_query($co,$query);
    $array = mysqli_fetch_assoc($result);
    return $array["nom"];
  }

  function getTel($var) {
    include("../Modele/connect.php");
    $query = "SELECT telephone FROM Parent WHERE idParent = $var";
    $result = mysqli_query($co,$query);
    $array = mysqli_fetch_assoc($result);
    return $array["telephone"] ;
  }

  function getMail($var) {
    include("../Modele/connect.php");
    $query = "SELECT mail FROM Parent WHERE idParent = $var";
    $result = mysqli_query($co,$query);
    $array = mysqli_fetch_assoc($result);
    return $array["mail"];
  }

  if(isset(($_POST["prenom"])) and isset($_POST["nom"]) and isset($_POST["tel"]) and isset($_POST["mail"])) {
    require_once("../Modele/connect.php");
    $prenom = $_POST["prenom"];
    $nom = $_POST["nom"];
    $tel = $_POST["tel"];
    $mail = $_POST["mail"];
    $id = $_GET["id"];
    $query2 = "UPDATE Parent SET nom = '$nom', prenom = '$prenom', telephone = '$tel', mail = '$mail' WHERE idParent ='$id'";
    $result2 = mysqli_query($co,$query2);
    header("Location:../Vue/index.php");
  }

?>
