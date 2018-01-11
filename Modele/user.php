<?php

    class User
    {
        private $co;
        private $id;
        private $nom;
        private $prenom;
        private $username;
        private $mail;
        private $tel;
        private $pwd;
        private $rank;

        public function __construct() {
            include "connect.php";
            $cpt = func_num_args();
            $args = func_get_args();
            switch ($cpt) {
                case 6 :
                    $this->co = $co;
                    $this->nom = $args[0];
                    $this->prenom = $args[1];
                    $this->username = $args[2];
                    $this->pwd = $args[3];
                    $this->mail = $args[4];
                    $this->tel = $args[5];
                    $result= mysqli_query($this->co,"call creer_Compte_Parent( '$this->nom', '$this->prenom', '$this->mail', '$this->tel', 3, '$this->username', '$this->pwd' )") or die ("Erreur lors de l'appel de la fonction.");
                    $result2 = mysqli_query($this->co,"SELECT * FROM parent WHERE id = '$this->username' AND psswd = '$this->pwd'") or die("Erreur lors de la requete de recherche du membre");
                    while ($row = mysqli_fetch_assoc($result2)) {
                        $this->id = $row["idParent"];
                        $this->rank = $row["idStatut"];
                        $this->mail = $row["mail"];
                    }
                    $this->connexion();
                    break;
                case 2 :
                    //Il faudrait utiliser des valeurs intermédiaires avant la requete, et initialiser l'objet membre une fois qu'on est sûr qu'il y a déjà qqun avec cet id+mdp c:
                    $this->co = $co;
                    $this->username = $args[0];
                    $this->pwd = $args[1];
                    $result = mysqli_query($co,"SELECT * FROM Parent WHERE id = '$this->username' AND psswd = '$this->pwd'") or die("Erreur lors de la requete de recherche du membre");
                    while ($row = mysqli_fetch_assoc($result)) {
                        $this->id = $row["idParent"];
                        $this->rank = $row["idStatut"];
                        $this->mail = $row["mail"];
                        $this->nom = $row["nom"];
                        $this->prenom = $row["prenom"];
                        $this->tel = $row["telephone"];
                    }
                    $this->connexion();
                    break;

                default:
                    break;
            }
        }
        public function connexion() {
            session_start();
            $_SESSION['user']=$this;
            setcookie("ID",$this->id,time()+86400);
        }

        public function modif_mdp($mdp) {
            $result = mysqli_querry($this->co,"UPDATE membres set mdpasse=$mdp where id='$this->id'; ") or die("Erreur lors du changement de mdp");
            $this->psswd = $mdp;
            $_SESSION['user']=$this;
        }
        public function getID() {
            return $this->id;
        }
        public function getNom() {
            return $this->nom;
        }
        public function getPrenom() {
            return $this->prenom;
        }
        public function getRank() {
            return $this->rank;
        }
        public function getCo() {
          return $this->co;
        }
    }
?>
