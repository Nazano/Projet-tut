<?php
  require_once("../Modele/connect.php");
  require_once("../Modele/user.php");
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

      $_SESSION["prenom"] = $prenom;
      $_SESSION["nom"] = $nom;
      $_SESSION["username"] = $username;
      $_SESSION["email"] = $email;
      $_SESSION["check_email"] = $check_email;
      $_SESSION["tel"] = $tel;
      $_SESSION["pwd"] = $pwd;
      $_SESSION["check_pwd"] = $check_pwd;

      $query = "SELECT id FROM Parent WHERE id = '$username'";
      $result = mysqli_query($co,$query);
      if (mysqli_num_rows($result) == 1) {
        $_SESSION["form_id"] = false;
        header("Location:../Vue/formulaire_compte.php");
      }
      if(!preg_match("#^.+@[a-z]+\.[a-z]{2,3}$#",$email)) {
        $_SESSION["form_email"] = false;
        header("Location:../Vue/formulaire_compte.php");
      }
      if($email != $check_email) {
        $_SESSION["form_check_email"] = false;
        header("Location:../Vue/formulaire_compte.php");
      }
      if(!preg_match("#^[0-9]{10}$#",$tel)) {
        $_SESSION["form_tel"] = false;
        header("Location../Vue/:formulaire_compte.php");
      }
      if($pwd != $check_pwd) {
        $_SESSION["form_check_pwd"] = false;
        header("Location:../Vue/formulaire_compte.php");
      }
      else {
        $query2 = "INSERT INTO Parent (nom,prenom,mail,telephone,id,psswd,idStatut) VALUES ('$nom','$prenom','$email','$tel','$username','$pwd',3)";
        if ($result = mysqli_query($co,$query2))
          header("Location:../Vue/index.html");
        else
          echo "Error : " . mysqli_error ($co);
      }
    }
    else {
      $_SESSION["form"] = false;
      header("Location:../Vue/formulaire_compte.php");
    }
  }
  else {
    $_SESSION["form"] = false;
    header("Location:../Vue/formulaire_compte.php");
  }
?>
