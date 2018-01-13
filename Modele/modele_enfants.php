<?php

function selectEnfants()
{
  $cpt = func_num_args();
  switch ($cpt) {
    case 0 :
      include "connect.php";
      $result = mysqli_query($co, "SELECT idEnfant, nom, prenom, dateNaissance, solde FROM Enfant NATURAL JOIN Compte");
      return $result;
    case 1 :
      include "connect.php";
      $args = func_get_args();
      $result = mysqli_query($co, "SELECT idEnfant, nom, prenom, dateNaissance, solde FROM est_l_enfant_de NATURAL JOIN Enfant NATURAL JOIN Compte WHERE est_l_enfant_de.idParent = '$args[0]'");
      return $result;
  }
}

?>
