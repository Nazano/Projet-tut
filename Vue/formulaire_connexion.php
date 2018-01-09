<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Se connecter</title>
  </head>
  <body>
      <span style="color:red">
    <?php
      require_once("../Controleur/connexion_functions.php");
      connexion();
    ?>
      </span>
    <form action="../Controleur/connexion.php" method="post">
      Identifiant : <input type="text" name="login" value = <?php get_username(); ?> > </br>
      Mot de passe : <input type="password" name="pwd"> </br>
      <input type="submit" name="connect" value="Se connecter" formaction="../Controleur/connexion.php">
      <input type="submit" name="create_account" value="Créer un compte" formaction="formulaire_compte.php">
    </form>
  </body>
</html>
