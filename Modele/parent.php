<?php

    class Adulte
    {
        private $id;
        private $nom;
        private $prenom;
        private $username;
        private $mail;
        private $tel;
        private $pwd;
        private $rank;

        public function __construct() {
            include("connect.php");
            $cpt = func_num_args();
            $args = func_get_args();
            switch ($cpt) {
                case 6 :
                    $this->nom = $args[0];
                    $this->prenom = $args[1];
                    $this->username = $args[2];
                    $this->pwd = $args[3];
                    $this->mail = $args[4];
                    $this->tel = $args[5];
                    $result2 = mysqli_query($co,"SELECT * FROM Parent WHERE id = '$this->username' AND psswd = '$this->pwd'") or die("Erreur lors de la requete de recherche du membre");
                    while ($row = mysqli_fetch_assoc($result2)) {
                        $this->id = $row["idParent"];
                        $this->rank = $row["idStatut"];
                        $this->mail = $row["mail"];
                    }
                    break;
                case 2 :
                    //Il faudrait utiliser des valeurs intermédiaires avant la requete, et initialiser l'objet membre une fois qu'on est sûr qu'il y a déjà qqun avec cet id+mdp c:
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
                    break;

                default:
                    break;
            }
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
        public function getMail() {
            return $this->mail;
        }
        public function getTel() {
            return $this->tel;
          }
    }
?>
