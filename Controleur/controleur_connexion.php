<?php
require_once("../Modele/modele_connexion.php");
session_start();
  if (isset($_POST["login"]) and isset($_POST["pwd"])) {
    $result = conn_requete($_POST["login"], $_POST["pwd"]);
    if(mysqli_num_rows($result) >= 1) {
      $_SESSION["msg_conn"] = "";
      $_SESSION["connecte"] = true;
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
