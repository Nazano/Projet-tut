<?php
#require("../Modele/connect.php");
require_once("../Modele/consommation.php");
require_once("../Modele/user.php");
require_once("../Modele/parent.php");
session_start();

function display_Consommations() {
    $user = $_SESSION['user'];
    $co = mysqli_connect("localhost","root","","Projet_tut") or die("Erreur de connexion");
    if ($user->getRank()==1 || $user->getRank()==2) {
        $requete = "SELECT * FROM Consommation";
        $result = mysqli_query($co,"select * from Consommation") or die("Echec de la requete pour récupérer les course !");

        $cpt=0;
        $consommations = array();
        while($row = mysqli_fetch_assoc($result)) {
            $consommations[$cpt] = new consommation($row['idConso'],$row['qteConso'],$row['dateConso'],$row['idEnfant'],$row['idProduit']);
            $cpt = $cpt+1;
        }

        foreach ($consommations as $C) {

        ?>
            <p>
                <tr>
                <td> <?php echo $C->getNomEnfant(); ?> </td>
                <td> <?php echo $C->getPrenomEnfant(); ?> </td>
                <td> <?php echo $C->getDateConso(); ?> </td>
                <td> <?php echo $C->getNomProduit(); ?> </td>

                <?php
                $idProd = $C->getIdProduit();
                $result = mysqli_query($co, "select * from Produit where idProduit = '$idProd'") or die("echec de la recherche du produit");
                while ($row = mysqli_fetch_assoc($result)) {
                    $prix = $row['prix'];
                }
                $valeur = $prix * $C->getQteConso();
                ?>

                <td> <?php echo $C->getQteConso(); ?> </td>
                <td> <?php echo $valeur; ?> </td>

                <?php } ?>

                </tr>
            </p>
        <?php
    }
    else {
        $id =$user->getID();
        $requete = "Select * from Achat where idParent = '$id'";
        $result = mysqli_query($co,"select * from est_l_enfant_de where idParent='$id'") or die("Echec de la requete pour récupérer les enfants !");
        $cpt=0;
        $enfant = array();
        while($row = mysqli_fetch_assoc($result)) {
            $enfant[$cpt] = $row['idEnfant'];
            $cpt = $cpt+1;
        }
        $consommations = array();
        foreach($enfant as $idEnfant) {
            $cpt2=0;

            $result = mysqli_query($co,"select * from Consommation where idEnfant='$idEnfant'") or die("Echec de la requete pour récupérer les consommations !");
            while($row = mysqli_fetch_assoc($result)) {
                $consommations[$cpt] = new consommation($row['idConso'],$row['qteConso'],$row['dateConso'],$row['idEnfant'],$row['idProduit']);
                $cpt2 = $cpt2+1;
            }
        }

        foreach ($consommations as $C) {

            ?>
                <p>
                    <tr>
                    <td> <?php echo $C->getNomEnfant(); ?> </td>
                    <td> <?php echo $C->getPrenomEnfant(); ?> </td>
                    <td> <?php echo $C->getDateConso(); ?> </td>
                    <td> <?php echo $C->getNomProduit(); ?> </td>
                    <?php
                    $idProd = $C->getIdProduit();
                    $result = mysqli_query($co, "select * from Produit where idProduit = '$idProd'") or die("echec de la recherche du produit");
                    while ($row = mysqli_fetch_assoc($result)) {
                        $prix = $row['prix'];
                    }
                    $valeur = $prix * $C->getQteConso();
                    ?>

                    <td> <?php echo $C->getQteConso(); ?> </td>
                    <td> <?php echo $valeur; ?> </td>

                    <?php } ?>

                    </tr>
                </p>
            <?php
            }
        }

?>
