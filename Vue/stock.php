<?php require_once('../Controleur/controleur_stock.php') ?>
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
        <h1>Stock</h1>
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
