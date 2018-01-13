<?php
  function display_Parents() {
    include("../Modele/connect.php");
    $query = "SELECT idParent, nom, prenom, mail, telephone FROM Parent";
    $result = mysqli_query($co,$query);
    while($row = mysqli_fetch_assoc($result)) {
  ?>
      <tr>
        <td> <?php echo $row['nom']; ?> </td>
        <td> <?php echo $row['prenom']; ?> </td>
        <td> <?php echo $row['mail']; ?> </td>
        <td> <?php echo $row['telephone']; ?> </td>
        <td> <button type="button" class="btn btn-info" onclick= <?php $parent = $row['idParent']; echo "location.href='../Vue/modifier_parent.php?id=$parent'";?> >Modifier</button> </td>
        <td> <button type="button" class="btn btn-info" onclick= <?php $parent = $row['idParent']; echo "location.href='../Controleur/controleur_supprimer_parent.php?id=$parent'";?>>Supprimer</button> </td>
      </tr>
    <?php
    }
  }
 ?>
