<?php require_once('../Controleur/controleur_menu.php'); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Index</title>
    <!-- css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <!-- Header -->
    <?php afficher_header(); ?>
    <!-- Fin du header -->
    <div class="container-fluid">
      <div class="container">
        <div class="row">
        <?php afficher_menus(); ?>
        </div>
      </div>
    </div>
  </body>
</html>
