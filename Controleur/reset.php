<?php
  require_once("../Modele/connect.php");
  $query = "call reset_BD()";
  $result = mysqli_query($co,$query);

  if(!$result){
    die("Erreur dans la requête" . mysql_error());
  }

 ?>
