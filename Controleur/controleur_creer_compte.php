<?php
require_once("../Modele/modele_creer_compte.php");
require_once("../Modele/clean.php");
require_once("../Modele/user.php");
session_start();

if(isset($_POST["prenom"]) and isset($_POST["nom"]) and isset($_POST["username"]) and isset($_POST["email"]) and isset($_POST["check_email"]) and isset($_POST["tel"]) and isset($_POST["pwd"]) and isset($_POST["check_pwd"]) and isset($_POST["conditions"])) {

        //Vérification de l'indentifiant
        $result = selectID($_POST["username"]);
        if (mysqli_num_rows($result) >= 1) {
          $_SESSION['msg'] = "<div class='alert alert-danger' role='alert'>Identifiant déja existant</div>";
          header('Location:../Vue/creer_compte.php');
        }

        //Vérification email
        else if($_POST["email"] <> $_POST["check_email"]) {
          $_SESSION['msg'] = "<div class='alert alert-danger' role='alert'>Adresses email différentes</div>";
          header('Location:../Vue/creer_compte.php');
        }

        //Vérification du téléphone
        else if(!preg_match("#^[0-9]{10}$#",$_POST["tel"])) {
          $_SESSION['msg'] = "<div class='alert alert-danger' role='alert'>Mauvais format de téléphone</div>";
          header('Location:../Vue/creer_compte.php');
        }

        //Vérification du mot de passe
        else if($_POST["pwd"] != $_POST["check_pwd"]) {
          $_SESSION['msg'] = "<div class='alert alert-danger' role='alert'>Mots de passes différents</div>";
          header('Location:../Vue/creer_compte.php');
        }

        //Si tout bon insertion dans la BD
        else {
          $info = new user(clean_input($_POST['nom']),clean_input($_POST['prenom']),clean_input($_POST['pseudo']),clean_input($_POST['pwd']),clean_input($_POST['mail']),clean_input($_POST['tel']));
          $info->connexion();
          $_SESSION['msg'] = "";
          header('Location: ../Vue/index.php');

          
        }
  }
  else {
    header('Location:../Vue/creer_compte.php');
  }
?>
