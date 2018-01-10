<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Ptut</title>
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
      </div>
    </div>
  </div>
  <!-- Fin du header -->
  <div class="container " style="margin-top: 100px">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <div class="jumbotron container-fluid">
          <h1 class="display-4 text-center">Créer un compte</h1><br>
          <p>Veuillez remplir les champs ci-dessous pour créer votre compte</p>
          <?php if(isset($_SESSION['msg'])) printf($_SESSION['msg']);?>
          <!-- Formualire -->
          <form class="" action="../Controleur/controleur_creer_compte.php" method="post">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">Prénom</span>
              </div>
              <input type="text" class="form-control" name="prenom" required="">

              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1" required="">Nom</span>
              </div>
              <input type="text" class="form-control" name='nom' required="">
            </div>

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Identifiant</span>
              </div>
              <input type="text" class="form-control" name="username" required="">
            </div>

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Email</span>
              </div>
              <input type="email" class="form-control" name="email" required="">
            </div>

            <div class="input-group mb-3">
              <input type="email" class="form-control" name="check_email" placeholder="Confirmer adresse-email">
            </div>

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Téléphone</span>
              </div>
              <input type="tel" class="form-control" name="tel" onkeypress="return event.charCode >= 48 && event.charCode <= 57" required="">
            </div>


            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Mot de passe</span>
              </div>
              <input type="text" class="form-control" name="pwd" required="">
            </div>

            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Confirmer le mot de passe" name="check_pwd" required="">
            </div>

            <div class="input-group mb-3">
              <span> <input type="checkbox"> Recevoir les actualités et des offres sépciales d'APERO</span>
            </div>

            <div class="input-group mb-3">
              <span> <input type="checkbox" name="conditions" required=""> En cliquant sur ce bouton j'accepte les conditions générales d'utilisation et la politique de confidentialité</span>
            </div>

            <input type="submit" name="" value="Créer un compte" class="btn btn-primary">
            <span>ou <a href="login.html">se connecter</a> </span>

          </form>

        </div>

      </div>
    </div>

</body>

</html>
