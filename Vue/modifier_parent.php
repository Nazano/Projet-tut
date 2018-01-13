<?php require_once('../Controleur/controleur_affichage_commun.php'); session_start();?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Modifier un Parent</title>
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
              <h1 class="display-3 text-center">Modifier un Parent</h1>
              <br>
              <form class="" action=<?php $id = $_GET["id"]; echo "../Controleur/controleur_modifier_parent.php?id=$id" ?> method="post">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Prenom</span>
                  </div>
                  <input type="text" name="prenom" class="form-control" value = <?php require_once("../Controleur/controleur_modifier_parent.php"); echo getPrenom($_GET["id"]); ?>>
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1" required="">Nom</span>
                  </div>
                  <input type="text" name="nom" value = <?php echo getNom($_GET["id"]); ?> class="form-control">
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1" required="">Téléphone</span>
                  </div>
                   <input type="tel" name="tel" value = <?php echo getTel($_GET["id"]); ?>>
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1" required="">E-mail</span>
                  </div>
                   <input type="email" name="mail" value = <?php echo getMail($_GET["id"]); ?>>
                </div>
                <p><input type="submit" name="valider" value="Valider" class="btn btn-primary"> </p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

  </body>
</html>
