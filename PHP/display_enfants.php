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
          <?php
            require_once("connect.php");
            $result = mysqli_query ($co, "SELECT nom, prenom, dateNaissance, solde FROM Enfant NATURAL JOIN Compte");
            while($row = mysqli_fetch_assoc($result)) {
          ?>
              <tr>
                <td> <?php echo $row['nom']; ?> </td>
                <td> <?php echo $row['prenom']; ?> </td>
                <td> <?php echo $row['dateNaissance']; ?> </td>
                <td> <?php echo $row['solde'] . "€"; ?> </td>
                <td> <input type="submit" name="modify" value="Modifier"> </td>
                <td> <input type="submit" name="remove" value="Supprimer"> </td>
              </tr>
            <?php
            }
            ?>
        </tbody>
      </table>
    </div>

  </body>
</html>
