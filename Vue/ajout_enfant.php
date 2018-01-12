<?php require_once('../Controleur/controleur_affichage_commun.php'); session_start();?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ajouter un enfant</title>
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
              <h1 class="display-3 text-center">Ajouter un enfant</h1>
              <br>
              <form class="" action="../Controleur/controleur_ajout_enfant.php" method="post">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Prénom</span>
                  </div>
                  <input type="text" name="prenom" class="form-control" required="">
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1" required="">Nom</span>
                  </div>
                  <input type="text" class="form-control" name='nom' required="">
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1" required="">Date de naissance</span>
                  </div>
                   <input type="date" name="birthday">
                </div>
                <p><input type="submit" name="Ajouter" value="Ajouter un enfant" class="btn btn-primary"> </p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

  </body>
</html>
