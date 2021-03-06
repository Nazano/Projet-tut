<?php
require_once("../Modele/modele_connexion.php");
require_once("../Modele/user.php");
require_once("../Modele/clean.php");
session_start();
  if (isset($_POST["login"]) and isset($_POST["pwd"])) {
    $result = conn_requete(clean_input($_POST["login"]), clean_input($_POST["pwd"]));
    if(mysqli_num_rows($result) >= 1) {
      $_SESSION["msg_conn"] = "";
      $_SESSION["connecte"] = true;
      //Création de notre utilisateur courant à la connexion 
      $_SESSION["user"] = new user($_POST["login"], $_POST["pwd"]);
      header("Location:../Vue/index.php");
    }
    else {
      $_SESSION["msg_conn"] = "<div class='alert alert-danger' role='alert'>Identifiant ou mot de passe incorrect</div>";
      $_SESSION["connecte"] = false;
      header("Location:../Vue/connexion.php");
    }
  }
  else {
    $_SESSION["msg_conn"] = "";
    $_SESSION["connecte"] = false;
    header("Location:../Vue/connexion.php");
  }
?>
