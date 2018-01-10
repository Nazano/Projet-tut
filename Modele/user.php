<?php
    require_once("bd.php");
    class User
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
            $cpt = func_num_args();
            $args = func_get_args();
            switch ($cpt) {
                case 7 : 
                    $this->co = $args[0];
                    $this->nom = $args[1];
                    $this->prenom = $args[2];
                    $this->username = $args[3];
                    $this->pwd = $args[4];
                    $this->mail = $args[5];
                    $this->tel = $args[6];
                    $result= mysqli_query($this->co,"call creer_Compte_Parent( '$this->nom', '$this->prenom', '$this->mail', '$this->tel', 1, '$this->username', '$this->pwd' )") or die ("mdr le call marche pas");
                    $result2 = mysqli_query($this->co,"SELECT * FROM parent WHERE id = '$this->username' AND psswd = '$this->pwd'") or die("Erreur lors de la requete de recherche du membre");
                    while ($row = mysqli_fetch_assoc($result2)) {
                        $this->id = $row["id"];
                        $this->rank = $row["rank"];
                        $this->mail = $row["mail"];
                    }
                    $this->connexion();
                    break;      
                case 3 :
                    //cradouk, il faudrait utiliser des valeurs intermédiaires avant la requete, et initialiser l'objet membre une fois qu'on est sûr qu'il y a déjà qqun avec cet id+mdp c:
                    $this->co = $args[0];
                    $this->username = $args[1];
                    $this->pwd = $args[2];

                    $result = mysqli_query($this->co,"SELECT * FROM parent WHERE id = '$this->username' AND psswd = '$this->pwd'") or die("Erreur lors de la requete de recherche du membre");
                    while ($row = mysqli_fetch_assoc($result)) {
                        $this->id = $row["id"];
                        $this->rank = $row["rank"];
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
    }
?>
