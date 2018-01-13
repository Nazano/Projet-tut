<?php
require_once("../Modele/connect.php");
require_once("../Modele/user.php");
require_once("../Modele/clean.php");
session_start();

if(isset(($_POST["prenom"])) and isset($_POST["nom"]) and isset($_POST["birthday"])) {
  $prenom = clean_input($_POST["prenom"]);
  $nom = clean_input($_POST["nom"]);
  $date = clean_input($_POST["birthday"]);
  $user = $_SESSION['user'];
  $id = $user->getID();

  $query = "SELECT idCompte FROM est_l_enfant_de NATURAL JOIN Enfant WHERE idParent = '$id'";
  $result = mysqli_query($co,$query);
  if(mysqli_num_rows($result) == 0) {
    $nomCompte = "Compte de " . $prenom;
    $query2 = "INSERT INTO Compte(nomCompte,solde) VALUES ('$nomCompte',0.00)";
    $result2 = mysqli_query($co,$query2);
    $var = mysqli_fetch_assoc(mysqli_query($co,"SELECT MAX(idCompte) FROM Compte"));
    $compte = $var['MAX(idCompte)'];
  }
  else {
    $var = mysqli_fetch_assoc($result);
    $compte = $var['idCompte'];
  }
  $query3 = "call creer_Compte_Enfant('$prenom','$nom','$date','$compte')";
  $result3 = mysqli_query($co,$query3);

  $query4 = "SELECT idEnfant FROM Enfant WHERE nom = '$nom' and prenom = '$prenom' and idCompte = $compte";
  echo  "SELECT idEnfant FROM Enfant WHERE nom = '$nom' and prenom = '$prenom' and idCompte = $compte" . "</br>";
  $result4 = mysqli_query($co,$query4);
  $var = mysqli_fetch_assoc($result4);
  $idEnfant = $var['idEnfant'];

  $query5 = "INSERT INTO est_l_enfant_de VALUES ('$id','$idEnfant')";
  echo $id . ' ' . $idEnfant . "</br>";
  $result5 = mysqli_query($co,$query5);

  header("Location:../Vue/index.php");
}
?>
