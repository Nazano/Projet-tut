<?php require_once('../Controleur/controleur_enfants.php'); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Enfants</title>
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
      <h3>Nom prénom</h3>
    </div>
    <!-- fin header -->
    <div class="container">
      <div class="jumbotron">
        <h1 class="display-3">Enfants</h1>
        <p>Consulter la liste des enfants</p>
      </div>
    </div>
    <div class="container">
      <table class="table">
        <thead>
            <tr>
              <th scope="nom">Nom</th>
              <th scope="prenom">Prénom</th>
              <th scope="dateNaiss">Naissance</th>
              <th scope="solde">Son solde</th>
              <th scope="modifier">Modifier</th>
              <th scope="supprimer">Supprimer</th>
            </tr>
        </thead>
        <tbody>
          <?php display_Enfants(); ?>
        </tbody>
      </table>
    </div>
  </body>
</html>
