<?php
  require_once("../Modele/connect.php");
  $id = $_GET["id"];
  $query = "call supprimer_Compte_Enfant($id)";
  if(!($result = mysqli_query($co,$query))) die(mysqli_error($co));
  header("Location:../Vue/index.php");
?>
