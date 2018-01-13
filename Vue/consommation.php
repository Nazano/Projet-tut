<?php
  require_once('../Controleur/controleur_consommation.php');
  require_once("../Controleur/controleur_affichage_commun.php");
  $user = $_SESSION['user'];
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Consommations</title>
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
        <h1 class="display-3">Consommations</h1>
        <p>Consulter la liste des consommations</p>
      </div>
    </div>
    <div class="container">
      <table class="table">
        <thead>
            <tr>
              <th scope="prenom">Prenom Enfant</th>
              <th scope="nom">Nom Enfant</th>
              <th scope="dateConso">Date de la consommation</th>
              <th scope="Produit">Produit</th>
              <th scope="qteConso">Quantite consommee</th>
              <th scope="prix">Prix</th>

            </tr>
        </thead>
        <tbody>
          <?php  display_Consommations(); ?>
        </tbody>
      </table>
      <?php
      if( $user->getRank() == 1 ||$user->getRank() == 2) {
          ?>
          <button type="button" class="btn btn-info" onclick="location.href='ajouter_consommation.php'">Ajouter une consommation </button>
          <?php

      }
      ?>
          
    </div>
  </body>
</html>
