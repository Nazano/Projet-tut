<?php include "../Controleur/controleur_menu.php"; ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Solde et consommations</title>
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
        <h1 class="display-3">Solde de</em> </h1>
        <p>Consulter le solde et les dépenses</p>
      </div>
    </div>
    <div class="container">
      <h3>Solde actuel <mark>0€<mark></h3>
      <button type="button" class="btn btn-success">
        <span class="glyphicon glyphicon-plus"></span> Recharger solde
      </button><p></p>
      <h3>Ses consommations</h3>
      <table class="table">
        <thead class="thead-dark">
            <tr>
              <th scope="id">#</th>
              <th scope="libelle">Produit</th>
              <th scope="prix">Prix</th>
              <th scope="quantite">Quantite</th>
              <th scope="date">Date</th>
            </tr>
        </thead>
        <tbody>
          <!-- Contenu du tableau -->
        </tbody>
      </table>
    </div>
  </body>
</html>
