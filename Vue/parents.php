<?php include "../Controleur/controleur_menu.php"; include "../Controleur/controleur_affichage_commun.php";?>
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
    <?php afficher_header(); ?>
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
