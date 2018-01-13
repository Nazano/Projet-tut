<!--
Génère suivant le type de parent les menus auquels il peut y accéder

DES LA CONNEXION IL FAUT STOCKER DANS UNE VARIABLE DE SESSION LE TYPE DE PARENT(Admin, (président, parent accompagnateur), parent)
-->

<?php
require_once("../Modele/user.php");
session_start();

function afficher_nom()
{
  $prenom = $_SESSION['user']->getPrenom();
  $nom = $_SESSION['user']->getNom();
  echo "$prenom " .  "$nom";
}

function afficher_menus()
{
  if($_SESSION['user']->getRank() == 1)
    afficher_admin();
  elseif ($_SESSION['user']->getRank() == 2)
    afficher_benevole();
  elseif ($_SESSION['user']->getRank() == 3)
    afficher_parent();
  else //Si personne ou bug
    echo "rip pas de contenu, rang associé : " . $_SESSION['user']->getRank();
}

function afficher_admin()
{
  printf('<div class="col-lg-4 col-md-6 jumbotron ma ">
  <h1>Mes Enfants</h1>
  <p>Consulter la liste de vos enfants.</p>
  <button type="button" class="btn btn-primary" onclick="location.href=\'enfants.php\'">Voir mes enfants</button>
</div>
<div class="col-lg-4 col-md-6 jumbotron ma ">
<h1>Enfants</h1>
<p>Consulter la liste des enfants.</p>
<button type="button" class="btn btn-primary" onclick="location.href=\'all_enfants.php\'">Voir enfants</button>
</div>
<div class="col-lg-4 col-md-6 jumbotron ma">
  <h1>Produits</h1>
  <p>Consulter la liste des produits.</p>
  <button type="button" class="btn btn-primary" onclick="location.href=\'produits.php\'">Voir produits</button>
</div>
<div class="col-lg-4 col-md-6 jumbotron ma">
  <h1>Courses</h1>
  <p>Courses faites par les parents pour l\'association.</p>
  <button type="button" class="btn btn-primary" onclick="location.href=\'Courses.php\'">Voir courses</button>
</div>
<div class="col-lg-4 col-md-6 jumbotron ma">
  <h1>Consommations</h1>
  <p>Consulter la liste des consommations.</p>
  <button type="button" class="btn btn-primary" onclick="location.href=\'consommation.php\'">Voir consommations </button>
</div>
<div class="col-lg-4 col-md-6 jumbotron ma">
  <h1>Parents</h1>
  <p>Consulter la liste des parents.</p>
  <button type="button" class="btn btn-primary" onclick="location.href=\'parents.php\'">Voir parents</button>
</div>
<div class="col-lg-4 col-md-6 jumbotron ma">
 <h1>Réinitialiser</h1>
 <p>Réinitialiser la base de données.</p>
 <button type="button" class="btn btn-primary" onclick="if(confirm(\'Êtes-vous sûr de vouloir réinitialiser la base de données ?\')) document.location.href=\'../Controleur/reset.php\'">Réinitialiser</button>
 </div>');
}

function afficher_benevole()
{
  printf('<div class="col-lg-4 col-md-6 jumbotron ma ">
  <h1>Mes Enfants</h1>
  <p>Consulter la liste de vos enfants.</p>
  <button type="button" class="btn btn-primary" onclick="location.href=\'enfants.php\'">Voir mes enfants</button>
</div>
<div class="col-lg-4 col-md-6 jumbotron ma ">
<h1>Enfants</h1>
<p>Consulter la liste des enfants.</p>
<button type="button" class="btn btn-primary" onclick="location.href=\'all_enfants.php\'">Voir enfants</button>
</div>
<div class="col-lg-4 col-md-6 jumbotron ma">
  <h1>Produits</h1>
  <p>Consulter la liste des produits.</p>
  <button type="button" class="btn btn-primary" onclick="location.href=\'produits.php\'">Voir produits</button>
</div>
<div class="col-lg-4 col-md-6 jumbotron ma">
  <h1>Courses</h1>
  <p>Courses faites par les parents pour l\'association.</p>
  <button type="button" class="btn btn-primary" onclick="location.href=\'courses.php\'">Voir courses</button>
</div>
<div class="col-lg-4 col-md-6 jumbotron ma">
  <h1>Consommations</h1>
  <p>Consulter la liste des consommations.</p>
  <button type="button" class="btn btn-primary" onclick="location.href=\'consommation.php\'">Voir consommations </button>
</div>
  <div class="col-lg-4 col-md-6 jumbotron ma">
  <h1>Parents</h1>
  <p>Consulter la liste des parents.</p>
  <button type="button" class="btn btn-primary" onclick="location.href=\'parents.php\'">Voir parents</button>
</div>');
}

function afficher_parent(){
  printf('<div class="col-lg-4 col-md-6 jumbotron ma ">
  <h1>Mes Enfants</h1>
  <p>Consulter la liste de vos enfants.</p>
  <button type="button" class="btn btn-primary" onclick="location.href=\'enfants.php\'">Voir mes enfants</button>
</div>
<div class="col-lg-4 col-md-6 jumbotron ma">
  <h1>Produits </h1>
  <p>Consulter la liste des produits.</p>
  <button type="button" class="btn btn-primary" onclick="location.href=\'produits.php\'">Voir produits</button>
</div>
<div class="col-lg-4 col-md-6 jumbotron ma">
  <h1>Solde</h1>
  <p>Permet de consulter votre solde.</p>
  <button type="button" class="btn btn-primary" onclick="location.href=\'solde.php\'">Voir solde</button>
</div>
<div class="col-lg-4 col-md-6 jumbotron ma">
  <h1>Consommations</h1>
  <p>Consulter la liste des consommations.</p>
  <button type="button" class="btn btn-primary" onclick="location.href=\'consommation.php\'">Voir consommations</button>
</div>');
}
 ?>
