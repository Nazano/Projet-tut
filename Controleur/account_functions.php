<?php
  require_once("../Modele/user.php");
  session_start();

function filled() {
  if (isset($_SESSION["form"]) and $_SESSION["form"] == false)
  echo "Veuillez remplir tous les champs.";
  $_SESSION["form"] = true;
}

function fill_prenom() {
  if(isset($_SESSION["prenom"])) echo $_SESSION["prenom"] ;
  else echo "";
}

function fill_nom() {
  if(isset($_SESSION["nom"])) echo $_SESSION["nom"] ;
  else echo "";
}

function fill_mail() {
  if(isset($_SESSION["email"])) echo $_SESSION["email"] ;
  else echo "";
}

function fill_check_mail() {
  if(isset($_SESSION["check_email"])) echo $_SESSION["check_email"];
  else echo "";
}

function wrong_mail() {
  if (isset($_SESSION["form_email"]) and $_SESSION["form_email"] == false) echo "Adresse e-mail invalide."; $_SESSION["form_email"] = true;
}

function wrong_check_email() {
  if (isset($_SESSION["form_check_email"]) and $_SESSION["form_check_email"] == false) echo "Les deux adresses ne correspondent pas."; $_SESSION["form_check_email"] = true;
}

function fill_username() {
  if(isset($_SESSION["username"])) echo $_SESSION["username"] ;
  else echo "";
}

function wrong_username() {
  if (isset($_SESSION["form_id"]) and $_SESSION["form_id"] == false)
  echo "Nom d'utilisateur déjà utilisé."; $_SESSION["form_id"] = true;
}

function fill_tel() {
  if(isset($_SESSION["tel"])) echo $_SESSION["tel"] ;
  else echo "";
}

function wrong_tel() {
  if (isset($_SESSION["form_tel"]) and $_SESSION["form_tel"] == false) echo "Numéro de téléphone invalide."; $_SESSION["form_tel"] = true;
}

function fill_pwd() {
  if(isset($_SESSION["pwd"])) echo $_SESSION["pwd"];
  else echo "";
}

function fill_check_pwd() {
  if(isset($_SESSION["check_pwd"])) echo $_SESSION["check_pwd"] ;
  else echo "";
}

function wrong_pwd() {
  if (isset($_SESSION["form_check_pwd"]) and $_SESSION["form_check_pwd"] == false) echo "Les deux mots de passe ne correspondent pas."; $_SESSION["form_check_pwd"] = true;
}

function not_checked() {
  if (isset($_SESSION["conditions"]) and $_SESSION["conditions"] == false) echo "Veuillez accepter les conditions générales d'utilisation et la politique de confidentialité."; $_SESSION["conditions"] = true;
}
?>
