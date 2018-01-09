<?php
  function display_Enfants() {
  require_once("connect.php");
  $result = mysqli_query ($co, "SELECT nom, prenom, dateNaissance, solde FROM Enfant NATURAL JOIN Compte");
  while($row = mysqli_fetch_assoc($result)) {
?>
    <tr>
      <td> <?php echo $row['nom']; ?> </td>
      <td> <?php echo $row['prenom']; ?> </td>
      <td> <?php echo $row['dateNaissance']; ?> </td>
      <td> <?php echo $row['solde'] . "€"; ?> </td>
      <td> <input type="submit" name="modify" value="Modifier"> </td>
      <td> <input type="submit" name="remove" value="Supprimer"> </td>
    </tr>
  <?php
  }
}
  ?>
