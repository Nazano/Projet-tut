<?php
  require_once('../Modele/connect.php');
  require_once('../Modele/modele_enfants.php');

  function choix_Enfant() {
      $user = $_SESSION['user'];
      $id = $user->getID();
      $enfants = selectEnfants($id);
      echo "<select name = 'enfant' form = 'argent'>";
      while($row = mysqli_fetch_assoc($enfants)) {
        $value = $row['prenom'] . ' ' . $row['nom'];
        echo "<option value=' $value'>$value</option>";
      }
      echo "</select>";
    }
    function choix_All_Enfant() {
        $enfants = selectEnfants();
        echo "<select name = 'enfant' form = 'argent'>";
        while($row = mysqli_fetch_assoc($enfants)) {
          $value = $row['prenom'] . ' ' . $row['nom'];
          echo "<option value=' $value'>$value</option>";
        }
        echo "</select>";
      }

    if(isset(($_POST["numCarte"])) and isset($_POST["nomCarte"]) and isset($_POST["expiration"]) and isset($_POST["year"]) and isset($_POST["cvv"]) and isset($_POST["enfant"]) and isset($_POST["montant"])) {
      $name = explode(" ", $_POST["enfant"]);
      $prenom = $name[1];
      $nom = $name[2];
      $montant = $_POST["montant"];
      $query = "UPDATE Enfant NATURAL JOIN Compte SET solde = solde + '$montant' WHERE nom = '$nom' AND prenom = '$prenom'";
      $result = mysqli_query($co,$query);
      header("Location:../Vue/index.php");
    }
?>
