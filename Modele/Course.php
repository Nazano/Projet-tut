<?php
       
    class Course
    {
        private $idAchat;
        private	$qteAchete;
        private $dateAchat;
        private $prix;
        private $idParent;
        private $idProduit;
        private $nomProduit;
        private $nomParent;
        private $prenomParent;


        public function __construct() {
            include("connect.php");
            $cpt = func_num_args();
            $args = func_get_args();
            switch ($cpt) {
                case 6 :
                    $this->idAchat = $args[0];
                    $this->qteAchete = $args[1];
                    $this->dateAchat = $args[2];
                    $this->prix = $args[3];
                    $this->idParent = $args[4];
                    $this->idProduit = $args[5];
                    $result = mysqli_query($co,"Select * from produit where idProduit = '$this->idProduit'");
                    while ($row = mysqli_fetch_assoc($result)) {
                        $this->nomProduit = $row["libelle"];
                    }
                    $result = mysqli_query($co,"Select * from parent where idParent='$this->idParent'") or die("echec de la recherche des infos des parents");
                    while ($row = mysqli_fetch_assoc($result)){
                        $this->nomParent = $row['nom'];
                        $this->prenomParent = $row['prenom'];
                    }

                    break;
                    case 5 :
                    $this->qteAchete = $args[0];
                    $this->dateAchat = $args[1];
                    $this->prix = $args[2];
                    $this->idParent = $args[3];
                    $this->nomProduit = $args[4];
                    $result = mysqli_query($co,"call creer_course('$this->nomProduit','$this->qteAchete','$this->dateAchat','$this->prix'");
                    $result2 = mysqli_query($co,"SELECT * FROM achat WHERE qteAchete='$this->qteAchete' and dateAchat='$this->dateAchat' and prix = '$this->prix' and idParent ='$this->idParent' and idProduit='$this->idProduit'") or die("Erreur lors de la requete de recherche du membre");
                    while ($row = mysqli_fetch_assoc($result2)) {
                        $this->id = $row["idAchat"];
                    }
                    $result = mysqli_query($co,"Select * from parent where idParent='$this->idParent'") or die("echec de la recherche des infos des parents");
                    while ($row = mysqli_fetch_assoc($result)){
                        $this->nomParent = $row['nom'];
                        $this->prenomParent = $row['prenom'];
                    }
                    break;
                default:
                    break;
            }
        }
        public function getIdAchat() {
            return $this->idAchat;
        }
        public function getQteAchete() {
            return $this->qteAchete;
        }
        public function getDateAchat() {
            return $this->dateAchat;
        }
        public function GetPrix() {
            return $this->prix;
        }
        public function GetIdParent() {
          return $this->idParent;
        }
        public function getIdProduit() {
            return $this->idProduit;
        }
        public function getNomProduit() {
            return $this->nomProduit;
        }
        public function getNomParent() {
            return $this->nomParent;
        }
        public function getPrenomParent() {
            return $this->prenomParent;
        }
          
    }
?>