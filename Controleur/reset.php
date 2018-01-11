<?php
  require_once("../Modele/connect.php");
  $query = "call reset_BD()";
  $result = mysqli_query($co,$query);
  header('Location:../Vue/index.php');


  if(!$result){
    die("Erreur dans la requête" . mysqli_error($co));
  }

 ?>
