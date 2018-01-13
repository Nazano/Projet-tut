<?php require_once('../Controleur/controleur_menu.php'); require_once('../Controleur/controleur_affichage_commun.php');?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Menu</title>
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
