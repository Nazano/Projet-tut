<?php require_once('../Controleur/controleur_stock.php');  require_once('../Controleur/controleur_menu.php'); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Stock</title>
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
        <h1 class="display-3">Stock</h1>
        <p>Consulter les informations relatives au stock</p>
      </div>
    </div>
    <div class="container">
      <table class="table">
        <thead class="thead-dark">
            <tr>
              <th scope="libelle">Libelle</th>
              <th scope="prix">Prix</th>
              <th scope="quantite">Quantite</th>
              <th scope="modifier">Modifier</th>
              <th scope="supprimer">Supprimer</th>
            </tr>
        </thead>
        <tbody>
          <?php display_stock() ?>
        </tbody>
        <button type="button" class="btn btn-default btn">
           Ajouter un produit
        </button>
      </table>
    </div>
  </body>
</html>
