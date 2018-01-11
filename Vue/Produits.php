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
            </tr>
        </thead>
        <tbody>
          <?php  ?>
        </tbody>
      </table>
    </div>
  </body>
</html>
