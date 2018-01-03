<?php
  require_once("connect.php");
  require_once("user.php");
  session_start();
  if(isset($_POST["prénom"]) and isset($_POST["nom"])and isset($_POST["username"]) and isset($_POST["email"]) and isset($_POST["check_email"]) and isset($_POST["tel"])) {
    if(isset($_POST["pwd"]) and isset($_POST["check_pwd"]) and isset($_POST["conditions"])) {
      $prenom = $_POST["prénom"];
      $nom = $_POST["nom"];
      $username = $_POST["username"];
      $email = $_POST["email"];
      $check_email = $_POST["check_email"];
      $tel = $_POST["tel"];
      $pwd = $_POST["pwd"];
      $check_pwd = $_POST["check_pwd"];

      $parent = new User($nom, $prenom, $username, $email, $check_email, $tel, $pwd, $check_pwd);
      $_SESSION["parent"] = $parent;

      $query = "SELECT id FROM Parent WHERE id = '$username'";
      $result = mysqli_query($co,$query);
      if (mysqli_num_rows($result) == 1) {
        $_SESSION["id"] = false;
        header("Location:formulaire_compte.php");
      }
      if(!preg_match("#^.+@[a-z]+\.[a-z]{2,3}$#",$email)) {
        $_SESSION["email"] = false;
        header("Location:formulaire_compte.php");
      }
      if($email != $check_email) {
        $_SESSION["check_email"] = false;
        header("Location:formulaire_compte.php");
      }
      if(!preg_match("#^[0-9]{10}$#",$tel)) {
        $_SESSION["tel"] = false;
        header("Location:formulaire_compte.php");
      }
      if($pwd != $check_pwd) {
        $_SESSION["check_pwd"] = false;
        header("Location:formulaire_compte.php");
      }
      else {
        $query2 = "INSERT INTO Parent (nom,prenom,mail,telephone,id,psswd,idStatut) VALUES ('$nom','$prenom','$email','$tel','$username','$pwd',3)";
        if ($result = mysqli_query($co,$query2))
          header("Location:../index.html");
        else
          echo "Error : " . mysqli_error ($co);
      }
    }
    else {
      $_SESSION["form"] = false;
      header("Location:formulaire_compte.php");
    }
  }
  else {
    $_SESSION["form"] = false;
    header("Location:formulaire_compte.php");
  }
?>
