<?php

function display_Enfants() {
  include '../Modele/modele_enfants.php';
  $result = selectEnfants($_SESSION['user']->getID());
  while($row = mysqli_fetch_assoc($result)) {
?>
    <tr>
      <td> <?php echo $row['nom']; ?> </td>
      <td> <?php echo $row['prenom']; ?> </td>
      <td> <?php echo $row['dateNaissance']; ?> </td>
      <td> <?php echo $row['solde'] . " €"; ?> </td>
      <td> <button type="button" class="btn btn-info" onclick= <?php $enfant = $row['idEnfant']; echo "location.href='../Vue/modifier_enfant.php?id=$enfant'";?> >Modifier</button> </td>
      <td> <button type="button" class="btn btn-info" onclick= <?php $enfant = $row['idEnfant']; echo "location.href='../Controleur/controleur_supprimer_enfant.php?id=$enfant'";?>>Supprimer</button> </td>
    </tr>
  <?php
  }
}

function display_All_Enfants() {
  include '../Modele/modele_enfants.php';
  $result = selectEnfants();
  while($row = mysqli_fetch_assoc($result)) {
?>
    <tr>
      <td> <?php echo $row['nom']; ?> </td>
      <td> <?php echo $row['prenom']; ?> </td>
      <td> <?php echo $row['dateNaissance']; ?> </td>
      <td> <?php echo $row['solde'] . " €"; ?> </td>
      <td> <button type="button" class="btn btn-info" onclick= <?php $enfant = $row['idEnfant']; echo "location.href='../Vue/modifier_enfant.php?id=$enfant'";?> >Modifier</button> </td>
      <td> <button type="button" class="btn btn-info" onclick= <?php $enfant = $row['idEnfant']; echo "location.href='../Controleur/controleur_supprimer_enfant.php?id=$enfant'";?>>Supprimer</button> </td>
    </tr>
  <?php
  }
}
  ?>
