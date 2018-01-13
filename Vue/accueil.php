<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Accueil</title>
    <!-- css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="css/style.css"> -->

  </head>
  <body>
    <!-- Header -->
    <div class="container-fluid" style="background-color: #A9F5A9;">
      <div class="container">
        <div class="row align-items-center">
          <div class="col">
              <h1>APERO</h1>
          </div>
          <div class="col-md-6">
            <span class="float-right">
              <button type="button" class="btn btn-outline-dark" onclick="location.href='./connexion.php'">Se Connecter</button>
              <button type="button" class="btn btn-outline-dark" onclick="location.href='./creer_compte.php'">S'inscrire</button>
            </span>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <h3>Bienvenue</h3>
    </div>
    <!-- Fin du header -->
    <div class="container">

      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="Images/logo_apero.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="Images/reu1.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="Images/enfants.jpg" alt="Third slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="Images/reu2.jpg" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>


    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
  </body>
</html>
