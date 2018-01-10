<?php

function selectID($username)
{
  include "connect.php";
  $query = sprintf("SELECT id FROM Parent WHERE id = '%s'", $username);
  $result = mysqli_query($co,$query);
  return $result;
}

function insertParent($nom, $prenom, $email, $tel, $username, $pwd)
{
  include "connect.php";
  $query2 = sprintf("INSERT INTO Parent (nom,prenom,mail,telephone,id,psswd,idStatut) VALUES ('%s','%s','%s','%s','%s','%s',3)", $nom, $prenom, $email, $tel, $username, $pwd);
  $result = mysqli_query($co,$query2);
  return $result;
}
?>
