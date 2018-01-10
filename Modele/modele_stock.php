<?php
  require_once("../Modele/connect.php");
  $result = mysqli_query($co, "SELECT * FROM V_Produit");
  return $result;
 ?>
