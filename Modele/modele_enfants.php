<?php

function selectEnfants($value='')
{
  include "connect.php";
  $result = mysqli_query($co, "SELECT nom, prenom, dateNaissance, solde FROM Enfant NATURAL JOIN Compte");
  return $result;
}

?>
