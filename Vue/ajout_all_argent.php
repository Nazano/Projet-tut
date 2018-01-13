<?php require_once('../Controleur/controleur_affichage_commun.php'); session_start();?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ajouter de l'argent</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <?php afficher_header(); ?>
    <div class="container-fluid">
      <div class="container">
        <div class="row">
          <div class="col-md-6 offset-md-3">
            <div class="jumbotron">
              <h1 class="display-3 text-center">Ajouter de l'argent</h1>
              <br>
              <form class="" action="../Controleur/controleur_ajout_argent.php" method="post" id ="argent">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Numéro de la carte</span>
                  </div>
                  <input type="text" name="numCarte" class="form-control" required="">
                </div>
                <div class="input-group mb-3">
                  <input type="text" name="nomCarte" placeholder="Nom du détenteur de la carte" class="form-control" required="">
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1" required="">Expiration</span>
                  </div>
                  <select class="" name="expiration">
                    <option value='01'>01</option>
                    <option value='02'>02</option>
                    <option value='03'>03</option>
                    <option value='04'>04</option>
                    <option value='05'>05</option>
                    <option value='06'>06</option>
                    <option value='07'>07</option>
                    <option value='08'>08</option>
                    <option value='09'>09</option>
                    <option value='10'>10</option>
                    <option value='11'>11</option>
                    <option value='12'>12</option>
                  </select>
                  <select class="" name="year">
                    <option value='2018'>2018</option>
                    <option value='2019'>2019</option>
                    <option value='2020'>2020</option>
                    <option value='2021'>2021</option>
                    <option value='2022'>2022</option>
                    <option value='2023'>2023</option>
                    <option value='2024'>2024</option>
                    <option value='2025'>2025</option>
                    <option value='2026'>2026</option>
                    <option value='2027'>2027</option>
                    <option value='2028'>2028</option>
                    <option value='2029'>2029</option>
                    <option value='2030'>2030</option>
                  </select>
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1" required="">CVV</span>
                  </div>
                   <input type="text" name="cvv">
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1" required="">Montant (en euros)</span>
                  </div>
                   <input type="number" name="montant" min="1" max="100" step="1" value="1">
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1" required="">Enfant</span>
                  </div>
                   <?php require_once('../Controleur/controleur_ajout_argent.php'); choix_All_Enfant(); ?>
                </div>
                <p><input type="submit" name="Ajouter" value="Ajouter de l'argent" class="btn btn-primary"> </p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

  </body>
</html>
