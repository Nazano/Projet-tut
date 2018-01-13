<?php
  require_once('../Controleur/controleur_course.php');
  require_once("../Controleur/controleur_affichage_commun.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Courses</title>
    <!-- css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <!-- Header -->
    <?php afficher_header(); ?>
    <!-- fin header -->
    <div class="container">
      <div class="jumbotron">
        <h1 class="display-3">Courses</h1>
        <p>Courses faites par les parents pour l'association.</p>
      </div>
    </div>
    <div class="container">
      <table class="table">
        <thead>
            <tr>
              <th scope="nom">Produit</th>
              <th scope="prenom">Prenom Parent</th>
              <th scope="prenom">Nom Parent</th>
              <th scope="dateNaiss">Date d'achat</th>
              <th scope="dateNaiss">Prix d'achat</th>
            </tr>
        </thead>
        <tbody>
          <?php  display_Courses(); ?>
        </tbody>
      </table>
      <?php
      if ($_SESSION["user"]->getRank() == 1 ||$_SESSION["user"]->getRank() == 2) { ?>
      <p>
          <button type="button" class="btn btn-info" onclick="location.href='modifier_course.php'">Ajouter une course </button>
      </p>
          <?php
      }
      ?>
    </div>
  </body>
</html>
