<?php include "../Controleur/controleur_menu.php"; ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Mon compte</title>
    <!-- css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <!-- Header -->
    <?php afficher_header();?>
    <!-- fin header -->
    <div class="container">
      <div class="jumbotron">
        <h1>Mon compte</h1>
        <p>Consulter les informations relatives à mon compte</p>
      </div>
    </div>
    <div class="container">
      <div class="col">
        <p>Nom: </p>
        <p>Prénom: </p>
        <p>E-mail: </p>
        <p>Téléphone: </p>
        <p>Login: </p>
        <p>Mot de Passe:  <button type="button" class="btn btn-link">Modifier le mot de passe</button> </p>
        <button type="button" class="btn btn-secondary">Modifier informations</button>
      </div>
    </div>
  </body>
</html>
