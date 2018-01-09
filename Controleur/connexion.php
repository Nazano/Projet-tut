<?php
     require_once("../Modele/membre.php");
     if (isset($_POST['pseudo']) && isset($_POST['pass'])) {
                $pseudo = $_POST['pseudo'];
                //echo "ok1";
                $pwd = $_POST['pass'];
                //echo "ok2";
                $co = (new bd("espace_membres"))->connexion();
                //echo "ok3";
                $stmt = $co->prepare("SELECT * FROM membres WHERE pseudo = '$pseudo' and mdpasse='$pwd'") or die("Erreur lors de la recherche du membre");
                $stmt->execute();
                $nbLigne = $stmt->rowCount();
                echo "pseudo : " . $pseudo . "mdp : " . $pwd ."nbLigne : " . $nbLigne;
                var_dump($pseudo);
                var_dump($pwd);
                var_dump($nbLigne);
                //echo "ok4";
                if ($nbLigne==1) {
                        $m = new membre($co,$pseudo,$pwd);
                        //echo "ok5";
                        header('Location: ../Vue/espace_membre.php');
                } else {
                        echo "<br/>" . "Erreur lors de la connexion";
                }
                
     } else {
         echo "Veuillez remplir tous les champs";
     }
?>