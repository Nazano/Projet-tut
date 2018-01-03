<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Connexion</title>
  </head>
  <body>
    <span style="color:red">
    <?php
      session_start();
      if(isset($_SESSION["checkConnexion"]) AND $_SESSION["checkConnexion"] == false) {
        echo "Identifiant ou mot de passe incorrect.";
        $_SESSION["checkConnexion"] = true;
      }
      if(isset($_SESSION["checkFormulaire"]) AND $_SESSION["checkFormulaire"] == false) {
        echo "Veuillez compléter le formulaire entièrement pour accéder à votre compte";
        $_SESSION["checkFormulaire"] = true;
      }
    ?>
    </span>
    <form action="connexion.php" method="post">
      Identifiant : <input type="text" name="login"> </br>
      Mot de passe : <input type="password" name="pwd"> </br>
      <input type="submit" name="connect" value="Se connecter">
    </form>
  </body>
</html>
