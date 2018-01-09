<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Enfants</title>
  </head>
  <body>
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
          <?php require_once("../Controleur/affichage_enfants.php");
          display_Enfants();
          ?>
        </tbody>
      </table>
    </div>

  </body>
</html>
