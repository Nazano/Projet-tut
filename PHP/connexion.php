<?php
require_once("connect.php");
session_start();
  if (!empty($_POST["login"]) and !empty($_POST["pwd"])) {
    $login = $_POST["login"];
    $pwd = $_POST["pwd"];
    $query = "SELECT id, psswd FROM Parent WHERE id = '$login' and psswd = '$pwd'";
    $result = mysqli_query($co,$query);
    if(mysqli_num_rows($result) == 1) {
      header("Location:../index.html");
    }
    else {
      $_SESSION["checkConnexion"] = false;
      header("Location:formulaire_connexion.php");
    }
  }
  else {
    $_SESSION["checkFormulaire"] = false;
    header("Location:formulaire_connexion.php");
  }
 ?>
