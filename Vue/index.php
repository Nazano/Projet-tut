<?php require_once('../Controleur/controleur_menu.php') ?>
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
    <div class="container-fluid" style="background-color: #A9F5A9;">
      <div class="container">
        <div class="row align-items-center">
          <div class="col">
              <h1>APERO</h1>
          </div>
          <div class="col">
            <span class="float-right">
              <button type="button" class="btn btn-outline-dark" onclick="location.href='mon_compte.html'">Mon compte</button>
            </span>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <h3>Prénom Nom</h3>
    </div>
    <!-- Fin du header -->
    <div class="container-fluid">
      <div class="container">
        <div class="row">
          <?php afficher_menus() ?>
        </div>
      </div>
    </div>
  </body>
</html>
