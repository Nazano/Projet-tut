<?php
require_once("../Modele/connect.php");
require_once("../Modele/user.php");
session_start();
  if (!empty($_POST["login"]) and !empty($_POST["pwd"])) {
    $login = $_POST["login"];
    $pwd = $_POST["pwd"];
    $_SESSION["login"] = $login;
    $query = "SELECT id, psswd FROM Parent WHERE id = '$login' and psswd = '$pwd'";
    $result = mysqli_query($co,$query);
    if(mysqli_num_rows($result) == 1) {
     header("Location:../Vue/index.html");
    }
    else {
      $_SESSION["checkConnexion"] = false;
      header("Location:../Vue/formulaire_connexion.php");
    }
  }
  else {
    $_SESSION["checkFormulaire"] = false;
    header("Location:../Vue/formulaire_connexion.php");
  }
 ?>
