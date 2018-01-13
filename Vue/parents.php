<?php include "../Controleur/controleur_menu.php"; ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Parents</title>
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
              <button type="button" class="btn btn-outline-dark" onclick="location.href='../Controleur/deconnexion.php'">Deconnexion</button>
            </span>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <h3><?php afficher_nom(); ?></h3>
    </div>
    <!-- fin header -->
    <div class="container">
      <div class="jumbotron">
        <h1 class="display-3">Parents</h1>
        <p>Consulter la liste des parents</p>
      </div>
    </div>
    <div class="container">
      <table class="table">
        <thead>
            <tr>
              <th scope="nom">Nom</th>
              <th scope="prenom">Prénom</th>
              <th scope="email">Email</th>
              <th scope="tel">Téléphone</th>
              <th scope="login">Modifier</th>
              <th scope="password">Supprimer</th>
            </tr>
        </thead>
        <tbody>
          <?php require_once("../Controleur/controleur_parents.php"); display_Parents(); ?>
        </tbody>
      </table>
    </div>
  </body>
</html>
