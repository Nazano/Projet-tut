<?php

    class Produit
    {
        private $idProduit;
        private $prix;
        private $stock;
        private $libelle;

        public function __construct() {
            include "connect.php";
            $cpt = func_num_args();
            $args = func_get_args();
            switch ($cpt) {
                case 4 :
                    $this->idProduit = $args[0];
                    $this->prix = $args[1];
                    $this->stock = $args[2];
                    $this->libelle = $args[3];
                    break;
                case 3 :
                    //Il faudrait utiliser des valeurs intermédiaires avant la requete, et initialiser l'objet membre une fois qu'on est sûr qu'il y a déjà qqun avec cet id+mdp c:
                    $this->prix = $args[0];
                    $this->stock = $args[1];
                    $this->libelle = $args[2];
                    $result = mysqli_query($co,"call ajouter_produit($this->prix,0,$this->libelle") or die("Erreur lors de la requete de recherche du membre");
                    $result2 = mysqli_query($co,"SELECT * FROM Produit where libelle = '$this->libelle' and prix = '$this->prix' and stock = 0 ") or die("Echec pour trouver l'id du produit créé");
                    while ($row = mysqli_fetch_assoc($result)) {
                        $this->idProduit = $row["idProduit"];
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
        
        public function getID() {
            return $this->idProduit;
        }
        public function getlibelle() {
            return $this->libelle;
        }
        public function getPrix() {
            return $this->prix;
        }
        public function getStock() {
            return $this->stock;
        }
        public function getCo() {
            return $this->co;
        }
    }
?>
