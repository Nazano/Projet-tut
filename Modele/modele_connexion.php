<?php
  function conn_requete($login, $pwd){
    include "connect.php";
    $query = sprintf("SELECT id FROM Parent WHERE id = '%s' and psswd = '%s'", $login, $pwd);
    $result = mysqli_query($co, $query);
    return $result;
  }
 ?>
