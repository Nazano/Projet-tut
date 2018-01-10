<?php
  function display_stock() {
    $result = include('../Modele/modele_stock.php');
    while($row = mysqli_fetch_assoc($result)) {
?>
      <tr>
        <td> <?php echo $row['libelle']; ?> </td>
        <td> <?php echo $row['stock']; ?> </td>
        <td> <?php echo $row['prix']; ?> </td>
        <td> <button type="button" class="btn btn-info">Modifier</button> </td>
        <td> <button type="button" class="btn btn-info">Supprimer</button> </td>
      </tr>
<?php
    }
}
?>
