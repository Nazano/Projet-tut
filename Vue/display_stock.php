<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Stock</title>
  </head>
  <body>
    <div class="container">
      <table class="table">
        <thead>
            <tr>
              <th scope="libelle">Libellé</th>
              <th scope="qte">Quantité</th>
              <th scope="prix">Prix</th>
              <th scope="modifier">Modifier</th>
              <th scope="supprimer">Supprimer</th>
            </tr>
        </thead>
        <tbody>
          <?php require_once("../Controleur/stock.php");
          display_stock();
          ?>
        </tbody>
      </table>
    </div>

  </body>
</html>
