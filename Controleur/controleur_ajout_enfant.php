<?php
require_once("../Modele/connect.php");
session_start();
$prenom = $_POST["prenom"];
$nom = $_POST["nom"];
$date = $_POST["birthday"];
$id = $_SESSION["user"]->id;

$query = "SELECT idCompte FROM est_l_enfant_de NATURAL JOIN Enfant WHERE idParent = '$id'";
$result = mysqli_query($co,$query);
if(mysqli_row_num($result) == 0) {
  $query = "INSERT INTO Compte(nomCompte,solde) VALUES ('Compte de ' . $prenom,0.00)";
  $result = mysqli_query($co,$query);
}
$query2 = "call creer_Compte_Enfant('$nom','$prenom','$date','$compte')";

?>
