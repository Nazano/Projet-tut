<?php
    require_once("../Modele/user.php");
    require_once("../Modele/clean.php");
    if (isset($_POST['pseudo']) && isset($_POST['pass']) && isset($_POST['email']) && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['tel']) && isset($_POST['check_pass']) && isset($_POST['check_email'])) {
        $pwd = clean_input($_POST['pass']);
        $mail = clean_input($_POST['email']);
        $check_pwd = clean_input($_POST['check_pass']);
        $check_mail = clean_input($_POST['check_email']);
        
        if ( !($pwd == $check_pwd && $mail == $check_mail) ) {
            header('Location: ../Controleur/cookieMailMdp.php');
        } else {
            $pseudo = clean_input($_POST['pseudo']);
            $nom = clean_input($_POST['nom']);
            $prenom = clean_input($_POST['prenom']);
            $tel = clean_input($_POST['tel']);
            echo "<br/> Création du membre <br/>";
            $info = new user((new bd("projet_tut"))->connexion(),$nom,$prenom,$pseudo,$pwd,$mail,$tel);
            $info->connexion();
            header('Location: ../Vue/index.php');
        }     
    } else {
        echo "Il manque des informations";
    }
?>