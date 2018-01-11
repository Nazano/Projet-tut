<?php
require_once("../Modele/user.php");
require_once("../Modele/produit.php");
session_start();
function afficher_header()
{
  printf('<div class="container-fluid" style="background-color: #A9F5A9;">
    <div class="container" ">
      <div class="row align-items-center">
        <div class="col" onclick="document.location.href=\'../Vue/\'">
            <h1>APERO</h1>
        </div>
        <div class="col">
          <span class="float-right">
            <button type="button" class="btn btn-outline-dark" onclick="location.href=\'../Controleur/deconnexion.php\'">Deconnexion</button>
          </span>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <h3>'. $_SESSION['user']->getPrenom() . " " . $_SESSION['user']->getNom() . '</h3>
  </div>');
}
?>
