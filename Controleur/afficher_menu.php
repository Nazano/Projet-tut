<!--
Génère suivant le type de parent les menus auquels il peut y accéder

DES LA CONNEXION IL FAUT STOCKER DANS UNE VARIABLE DE SESSION LE TYPE DE PARENT(Admin, (président, parent accompagnateur), parent)
-->

<?php
function afficher_menus()
{
  if(true/*Admin*/)
    afficher_admin();
  elseif (false/*Président ou parent accompagnateur*/)
    afficher_parent_AC();
  elseif (false/*Parent*/)
    afficher_parent();
  else //Si personne ou bug
    echo "";
}

function afficher_admin()
{
  printf('
  <div class="col-lg-4 col-md-6 jumbotron ma">
    <h1>Stock</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    <button type="button" class="btn btn-primary" onclick="location.href=\'stock.html\'">Voir Stock</button>
  </div>
  <div class="col-lg-4 col-md-6 jumbotron ma ">
    <h1>Parents</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    <button type="button" class="btn btn-primary" onclick="location.href=\'parents.html\'">Voir parents</button>
  </div>
  <div class="col-lg-4 col-md-6 jumbotron ma ">
    <h1>Consommations</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    <button type="button" class="btn btn-primary">Voir consommations</button>
  </div>
  <div class="col-lg-4 col-md-6 jumbotron ma">
    <h1>Enfants</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    <button type="button" class="btn btn-primary" onclick="location.href=\'enfants.html\'">Voir enfants</button>
  </div>
  <div class="col-lg-4 col-md-6 jumbotron ma ">
    <h1>Comptes</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    <button type="button" class="btn btn-primary">Voir comptes</button>
  </div>');
}

function afficher_parent_AC()
{
  printf('<h1 class="display-4">Affichage du parent accompagnateur ou de la président(e)</h1>');
}

function afficher_parent(){
  printf('<h1 class="display-4">Affichage du parent normal</h1>');
}
 ?>
