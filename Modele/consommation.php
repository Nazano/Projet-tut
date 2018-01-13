<?php

    class Consommation
    {
        private $idConso;
        private $qteConso;
        private $dateConso;
        private $idEnfant;
        private $idProduit;
        private $nomEnfant;
        private $prenomEnfant;
        private $nomProduit;

        public function __construct() {
            include("connect.php");
            $cpt = func_num_args();
            $args = func_get_args();
            switch ($cpt) {
                case 5 :
                    $this->idConso = $args[0];
                    $this->qteConso = $args[1];
                    $this->dateConso = $args[2];
                    $this->idEnfant = $args[3];
                    $this->idProduit = $args[4];
                    $result2 = mysqli_query($co,"SELECT * FROM Enfant WHERE idEnfant = '$this->idEnfant'") or die("Erreur lors de la requete de recherche de l'enfant");
                    while ($row = mysqli_fetch_assoc($result2)) {
                        $this->prenomEnfant = $row['prenom'];
                        $this->nomEnfant = $row['nom'];
                    }
                    $result2 = mysqli_query($co,"SELECT * FROM Produit WHERE idProduit = '$this->idProduit'") or die("Erreur lors de la requete de recherche du produit");
                    while ($row = mysqli_fetch_assoc($result2)) {
                        $this->nomProduit = $row['libelle'];
                    }
                    break;
                case 2 :
                    //Il faudrait utiliser des valeurs intermédiaires avant la requete, et initialiser l'objet membre une fois qu'on est sûr qu'il y a déjà qqun avec cet id+mdp c:
                    $this->qteConso = $args[0];
                    $this->dateConso = $args[1];
                    $this->idEnfant = $args[2];
                    $this->idProduit = $args[3];
                    $result2 = mysqli_query($co,"SELECT * FROM Enfant WHERE idEnfant = '$this->idEnfant'") or die("Erreur lors de la requete de recherche du membre");
                    while ($row = mysqli_fetch_assoc($result2)) {
                        $this->prenomEnfant = $row['prenom'];
                        $this->nomEnfant = $row['nom'];
                    }
                    break;
                    $result2 = mysqli_query($co,"SELECT * FROM Produit WHERE idProduit = '$this->idProduit'") or die("Erreur lors de la requete de recherche du produit");
                    while ($row = mysqli_fetch_assoc($result2)) {
                        $this->nomProduit = $row['libelle'];
                    }
                    $result = mysqli_query($co, "call ajouter_consommation('$nomP','$this->idEnfant','$this->qteConso')") or die("echec de l'ajout de la conso");
                    break;

                default:
                    break;
            }
        }
        public function getIdConso() {
            return $this->idConso;
        }
        public function getQteConso() {
            return $this->qteConso;
        }
        public function getDateConso() {
            return $this->dateConso;
        }
        public function getIdEnfant() {
            return $this->idEnfant;
        }
        public function getIdProduit() {
          return $this->idProduit;
        }
        public function getNomEnfant() {
            return $this->nomEnfant;
        }
        public function getPrenomEnfant() {
            return $this->prenomEnfant;
        }
        public function getNomProduit() {
            return $this->nomProduit;
        }
    }
?>
