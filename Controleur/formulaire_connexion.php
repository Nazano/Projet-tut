<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Se connecter</title>
  </head>
  <body>
    <span style="color:red">
    <?php
      session_start();
      if($_SESSION["checkFormulaire"] == false) {
        echo "Veuillez compléter le formulaire..";
        $_SESSION["checkFormulaire"] = true;
      }
      else if(isset($_SESSION["checkConnexion"]) AND $_SESSION["checkConnexion"] == false) {
        echo "Identifiant ou mot de passe incorrect.";
        $_SESSION["checkConnexion"] = true;
      }
    ?>
    </span>
    <form action="connexion.php" method="post">
      Identifiant : <input type="text" name="login"> </br>
      Mot de passe : <input type="password" name="pwd"> </br>
      <input type="submit" name="connect" value="Se connecter" formaction="connexion.php">
      <input type="submit" name="create_account" value="Créer un compte" formaction="formulaire_compte.php">
    </form>
  </body>
</html>
