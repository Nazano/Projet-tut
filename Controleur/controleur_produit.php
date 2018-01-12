<?php
#require("../Modele/connect.php");
require_once("../Modele/produit.php");
require_once("../Modele/user.php");
session_start();

function display_Produits() {
    $user = $_SESSION['user'];
    $co = mysqli_connect("localhost","root","","Projet_tut") or die("Erreur de connexion");
    $result = mysqli_query($co,"SELECT * FROM produit") or die("Echec de la requete pour récupérer les produits !");
    $cpt=0;
    $Produit = array();
    while($row = mysqli_fetch_assoc($result)) {
        $Produit[$cpt] = new Produit($row['idProduit'],$row['prix'],$row['stock'],$row['libelle']);
        $cpt = $cpt+1;
    }

    foreach ($Produit as $P) {
        
    ?>
        <p>
            <tr>
            <td> <?php echo $P->getLibelle(); ?> </td>
            <td> <?php echo $P->getPrix(); ?> </td>
            <td> <?php echo $P->getStock(); ?> </td>

            <?php if ($user->getRank() == 1) { ?>

            <td> <button type="button" class="btn btn-info" onclick="location.href=\'modifier_produit.php\'">Modifier</button> </td>
            <td> <button type="button" class="btn btn-info" onclick="location.href=\'supprimer_produit.php\'">Supprimer</button> </td>

            <?php } ?>

            </tr>
        </p>
    <?php
    }
        
        if ($user->getRank() == 1) { ?>
        <p>
            <button type="button" class="btn btn-info" onclick="location.href=\'enfants.php\'">Ajouter un produit </button>
        </p>
            <?php
        }
}
?>
