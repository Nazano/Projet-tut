<?php
  session_start();
  function connexion() {
    if(isset($_SESSION["checkFormulaire"]) AND $_SESSION["checkFormulaire"] == false) {
      echo "Veuillez compléter le formulaire.";
      $_SESSION["checkFormulaire"] = true;
    }
    else if(isset($_SESSION["checkConnexion"]) AND $_SESSION["checkConnexion"] == false) {
      echo "Identifiant ou mot de passe incorrect.";
      $_SESSION["checkConnexion"] = true;
    }
  }

  function get_username() {
    if(isset($_SESSION["login"])) echo $_SESSION["login"];
    else echo '';
  }
 ?>
