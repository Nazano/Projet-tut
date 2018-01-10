<?php
     require_once("../Modele/user.php");
     require_once("../Modele/clean.php");
     if (isset($_POST['pseudo']) && isset($_POST['pass'])) {
                $pseudo = clean_input($_POST['pseudo']);
                //echo "ok1";
                $pwd = clean_input($_POST['pass']);
                //echo "ok2";
                $co = (new bd("projet_tut"))->connexion();
                //echo "ok3";
                $result = mysqli_query($co,"SELECT * FROM parent WHERE id = '$pseudo' AND psswd = '$pwd'") or die ("On trouve pas le membre");
                $nbLigne= mysqli_num_rows($result);
                #echo "pseudo : " . $pseudo . "mdp : " . $pwd ."nbLigne : " . $nbLigne;
                
                var_dump($nbLigne);
                //echo "ok4";
                if ($nbLigne==1) {
                        $m = new user($co,$pseudo,$pwd);
                        //echo "ok5";
                        header('Location: ../Vue/index.php');
                } else {
                        echo "<br/>" . "Erreur lors de la connexion";
                }
                
     } else {
         echo "Veuillez remplir tous les champs";
     }
?>