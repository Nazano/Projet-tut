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
  <div class="container" style="margin-top: 100px">
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="jumbotron">
              <h2 class="display-4 text-center">Se connecter</h2><br>
              <?php if(isset($_SESSION["msg_conn"])) printf($_SESSION["msg_conn"]); ?>
              <form class="form-signin" method="POST" action="../Controleur/controleur_connexion.php">
              <input type="text" class="form-control" name="login" placeholder="Identifiant" required="" autofocus="" />
              <input type="password" class="form-control" name="pwd" placeholder="Mot de passe" required="" />
              <label class="checkbox">
              <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Se souvenir de moi
              </label>
              <p></p>
              <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <input class="btn btn-lg btn-primary btn-block" type="submit" value="Se connecter"/>
                  </div>
                  <div class="col-md-6">
                      <button class="btn btn-lg btn-link btn-block" onclick="location.href='creer_compte.html'">Créer un compte</button>
                  </div>
                </div>
              </div>
            </form>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
