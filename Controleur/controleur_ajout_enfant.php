<?php
require_once("../Modele/connect.php");
require_once("../Modele/user.php");
require_once("../Modele/clean.php");
session_start();

$prenom = clean_input($_POST["prenom"]);
$nom = clean_input($_POST["nom"]);
$date = clean_input($_POST["birthday"]);
$user = $_SESSION['user'];
$id = $user->getID();

$query = "SELECT idCompte FROM est_l_enfant_de NATURAL JOIN Enfant WHERE idParent = '$id'";
$result = mysqli_query($co,$query);
if(mysqli_num_rows($result) == 0) {
  $nomCompte = "Compte de" . $prenom;
  $query2 = "INSERT INTO Compte(nomCompte,solde) VALUES ('$nomCompte',0.00)";
  $result2 = mysqli_query($co,$query2);
  if(!$result2) die (mysqli_error($co));
  $var = mysqli_fetch_assoc(mysqli_query($co,"SELECT MAX(idCompte) FROM Compte"));
  $compte = $var['MAX(idCompte)'];
}
else {
  $var = mysqli_fetch_assoc($result);
  $compte = $var['idCompte'];
}
$query3 = "call creer_Compte_Enfant('$nom','$prenom','$date','$compte')";
$result3 = mysqli_query($co,$query3);

?>
