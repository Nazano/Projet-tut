<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Index</title>
    <!-- css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <?php
      require_once("../Modele/user.php");
      session_start();
      $user = new user();
      $user = $_SESSION['user'];
    ?>
    <!-- Header -->
    <div class="container-fluid" style="background-color: #A9F5A9;">
      <div class="container">
        <div class="row align-items-center">
          <div class="col">
              <h1>APERO</h1>
          </div>
          <div class="col">
            <span class="float-right">
              <button type="button" class="btn btn-outline-dark" onclick="location.href='../Controleur/deconnexion.php'">Deconnexion</button>
            </span>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <h3><?php 
      $prenom = $user->getPrenom();
      $nom = $user->getNom();
      echo "$prenom " .  "$nom"?></h3>
    </div>
    <!-- Fin du header -->
    <div class="container-fluid">
      <div class="container">
        <div class="row">
        <?php 
          if ($user->getRank() == 3 ) {
            $contenu = '<div class="col-lg-4 col-md-6 jumbotron ma">
            <h1>Stock</h1>
            <p>Consulter le stock des divers produits </p>
            <button type="button" class="btn btn-primary" onclick="location.href="stock.html">Voir Stock</button>
          </div>
          <div class="col-lg-4 col-md-6 jumbotron ma ">
            <h1>Enfant</h1>
            <p>Consulter la liste de tous les enfants</p>
            <button type="button" class="btn btn-primary" onclick="location.href="enfants.html">Les enfants</button>
          </div>
          <div class="col-lg-4 col-md-6 jumbotron ma">
            <h1>Les produits</h1>
            <p>Gérez les produits disponibles pour les gouters (ajout ou suppression) </p>
            <button type="button" class="btn btn-primary" onclick="location.href="enfants.html">Les produits</button>
          </div>
          <div class="col-lg-4 col-md-6 jumbotron ma">
            <h1>Les courses</h1>
            <p>Permet de vérifier qui a acheté quoi (historique des achats) pour le ocmpte de l association </p>
            <button type="button" class="btn btn-primary" onclick="location.href="enfants.html">Les courses</button>
          </div>
          <div class="col-lg-4 col-md-6 jumbotron ma">
            <h1>Les consommations</h1>
            <p> Permet de vérifier qui a acheté quoi parmi les enfants (historique des ventes) </p>
            <button type="button" class="btn btn-primary" onclick="location.href="enfants.html">Les consommation </button>
          </div>
          <div class="col-lg-4 col-md-6 jumbotron ma">
            <h1>Les parents</h1>
            <p>Permet d afficher la liste des parents. </p>
            <button type="button" class="btn btn-primary" onclick="location.href="enfants.html">Les parents</button>
          </div>';
          } else if ($user->getRank() == 2 ) {
            $contenu = '<div class="col-lg-4 col-md-6 jumbotron ma ">
            <h1>Enfant</h1>
            <p>Consulter la liste de tous les enfants et de leur ajouter une consommation</p>
            <button type="button" class="btn btn-primary" onclick="location.href="enfants.html">Les enfants </button>
         </div>
         <div class="col-lg-4 col-md-6 jumbotron ma">
            <h1>Les produits (Stock) </h1>
            <p>Consulter les produits disponibles pour les gouters  </p>
            <button type="button" class="btn btn-primary" onclick="location.href="enfants.html">Les produits</button>
         </div>
         <div class="col-lg-4 col-md-6 jumbotron ma">
            <h1>Les courses</h1>
            <p>Permet de voir quelles courses vous avez réalisées </p>
            <button type="button" class="btn btn-primary" onclick="location.href="enfants.html">Mes courses</button>
         </div>';
          } else if ($user->getRank() == 1 ) {
            $contenu = '<div class="col-lg-4 col-md-6 jumbotron ma ">
            <h1>Mes Enfant</h1>
            <p>Consulter la liste de vos enfants et de leur ajouter du solde</p>
            <button type="button" class="btn btn-primary" onclick="location.href="enfants.html">Mes enfants</button>
         </div>
         <div class="col-lg-4 col-md-6 jumbotron ma">
            <h1>Les produits </h1>
            <p>Consulter les produits disponibles pour les gouters  </p>
            <button type="button" class="btn btn-primary" onclick="location.href="enfants.html">Les produits</button>
         </div>
         <div class="col-lg-4 col-md-6 jumbotron ma">
            <h1>Mon solde</h1>
            <p>Permet de consulter votre solde </p>
            <button type="button" class="btn btn-primary" onclick="location.href="enfants.html">Mon solde</button>
         </div>
         <div class="col-lg-4 col-md-6 jumbotron ma">
            <h1>Les consommations</h1>
            <p> Permet de vérifier qui a acheté quoi parmi vos enfants (historique des achats) </p>
            <button type="button" class="btn btn-primary" onclick="location.href="enfants.html">Les consommation </button>
          </div>';
          } else {
            $rank = $user->getRank();
            $contenu = "rip pas de contenu, rang associé : ";
          }
            echo $contenu;
          ?>
        </div>
      </div>
    </div>
  </body>
</html>
