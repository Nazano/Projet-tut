<?php
  require_once('../Controleur/controleur_produit.php');
  require_once("../Controleur/controleur_affichage_commun.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Produits</title>
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
        <h1 class="display-3">Produits</h1>
        <p>Consulter la liste des produits</p>
      </div>
    </div>
    <div class="container">
      <table class="table">
        <thead>
            <tr>
              <th scope="nom">Libelle</th>
              <th scope="prenom">Prix</th>
              <th scope="dateNaiss">Stock</th>
              <th scope="modifier">modifier</th>
              <th scope="supprimer">Supprimer</th>
            </tr>
        </thead>
        <tbody>
          <?php  display_Produits(); ?>
        </tbody>
      </table>
      <?php
      if ($_SESSION["user"]->getRank() == 1) { ?>
      <p>
          <button type="button" class="btn btn-info" onclick="location.href='modifier_produit.php'">Ajouter un produit </button>
      </p>
          <?php
      }
      ?>
    </div>
  </body>
</html>
