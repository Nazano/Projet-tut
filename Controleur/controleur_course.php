<?php
#require("../Modele/connect.php");
require_once("../Modele/course.php");
require_once("../Modele/user.php");
require_once("../Modele/parent.php");
session_start();

function display_Courses() {
    include("../Modele/connect.php");
    $user = $_SESSION['user'];
    if ($user->getRank()==1) {
        $requete = "SELECT * FROM Achat";
    }
    else {
        $id =$user->getID();
        $requete = "Select * from Achat where idParent = '$id'";
    }
    $result = mysqli_query($co,$requete) or die("Echec de la requete pour récupérer les course !");

    $cpt=0;
    $course = array();
    while($row = mysqli_fetch_assoc($result)) {
        $course[$cpt] = new Course($row['idAchat'],$row['qteAchete'],$row['dateAchat'],$row['prix'],$row['idParent'],$row['idProduit']);
        $cpt = $cpt+1;
    }

    foreach ($course as $C) {

    ?>
        <p>
            <tr>
            <td> <?php echo $C->getNomProduit(); ?> </td>
            <td> <?php echo $C->getNomParent(); ?> </td>
            <td> <?php echo $C->getPrenomParent(); ?> </td>
            <td> <?php echo $C->getDateAchat(); ?> </td>
            <td> <?php echo $C->getPrix(); ?> </td>

            <?php if ($user->getRank() == 1) {
                $modifier = '\'modifier_course.php' . "?id=" . $C->getIdAchat() .'\'' ;
                $supprimer = '\'../Controleur/supprimer_course.php' . "?id=" . $C->getIdAchat() . '\'' ;

            ?>

            <td> <button type="button" class="btn btn-info" onclick="location.href=<?php echo "$modifier" ?>">Modifier</button> </td>
            <td> <button type="button" class="btn btn-info" onclick="location.href=<?php echo "$supprimer" ?>">Supprimer</button> </td>

            <?php } ?>

            </tr>
        </p>
    <?php
    }
}
?>
