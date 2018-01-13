<?php require_once('../Controleur/controleur_enfants.php'); include "../Controleur/controleur_menu.php"; include "../Controleur/controleur_affichage_commun.php";?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Mes Enfants</title>
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
        <h1 class="display-3">Mes Enfants</h1>
        <p>Consulter la liste de vos enfants.</p>
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
      <button type="button" name="button" class="btn btn-primary" onclick="location.href='ajout_enfant.php'">Ajouter un enfant</button>
      <button type="button" name="button" class="btn btn-primary" onclick="location.href='ajout_argent.php'">Ajouter de l'argent</button>
    </div>
  </body>
</html>
