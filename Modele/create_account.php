<?php
  require_once("connect.php");
  require_once("user.php");
  session_start();

if(isset($_POST["prenom"]) and isset($_POST["nom"]) and isset($_POST["username"]) and isset($_POST["email"]) and isset($_POST["check_email"]) and isset($_POST["tel"]) and isset($_POST["pwd"]) and isset($_POST["check_pwd"]) and isset($_POST["conditions"])) {

        //$parent = new User($_POST["nom"], $_POST["prenom"], $_POST["username"], $_POST["email"], $_POST["check_email"], $_POST["tel"], $_POST["pwd"], $_POST["check_pwd"]);

        //Vérification de l'indentifiant
        $query = sprintf("SELECT id FROM Parent WHERE id = '%s'", $_POST["username"]);
        $result = mysqli_query($co,$query);
        if (mysqli_num_rows($result) == 1) {
          $_SESSION['msg'] = "<div class='alert alert-danger' role='alert'>Identifiant déja existant</div>";
        }

        //Vérification email
        if($_POST["email"] <> $_POST["check_email"]) {
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
          $query2 = sparintf("INSERT INTO Parent (nom,prenom,mail,telephone,id,psswd,idStatut) VALUES ('%s','%s','%s','%s','%s','%s',3)", $_POST["nom"], $_POST["prenom"], $_POST["email"], $_POST["tel"], $_POST["username"], $_POST["pwd"]);
          if ($result = mysqli_query($co,$query2))
            header("Location:../index.html");
          else
            echo "Error : " . mysqli_error ($co);

          $_SESSION['msg'] = "<div class='alert alert-success' role='alert'> This is a success alert—check it out!</div>";
          header('Location:../Vue/index.php');
        }
  }
  else {
    header('Location:../Vue/creer_compte.php');
  }
?>
