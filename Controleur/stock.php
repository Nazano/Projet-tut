<?php
  function display_stock() {
  require_once("../Modele/connect.php");
  $result = mysqli_query ($co, "SELECT * FROM v_produit");
  while($row = mysqli_fetch_assoc($result)) {
?>
    <tr>
      <td> <?php echo $row['libelle']; ?> </td>
      <td> <?php echo $row['stock']; ?> </td>
      <td> <?php echo $row['prix']; ?> </td>
      <td> <input type="submit" name="modify" value="Modifier"> </td>
      <td> <input type="submit" name="remove" value="Supprimer"> </td>
    </tr>
  <?php
  }
}
  ?>
