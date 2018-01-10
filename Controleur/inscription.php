<?php
    require_once("../Modele/user.php");
    if (isset($_POST['pseudo']) && isset($_POST['pass']) && isset($_POST['email']) && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['tel']) && isset($_POST['check_pass']) && isset($_POST['check_email'])) {
        $pwd = $_POST['pass'];
        $mail = $_POST['email'];
        $check_pwd = $_POST['check_pass'];
        $check_mail = $_POST['check_email'];
        
        if ( !($pwd == $check_pwd && $mail == $check_mail) ) {
            header('Location: ../Controleur/cookieMailMdp.php');
        } else {
            $pseudo = $_POST['pseudo'];
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $tel = $_POST['tel'];
            echo "<br/> Création du membre <br/>";
            $info = new user((new bd("projet_tut"))->connexion(),$nom,$prenom,$pseudo,$pwd,$mail,$tel);
            $info->connexion();
            header('Location: ../Vue/index.php');
        }     
    } else {
        echo "Il manque des informations";
    }
?>