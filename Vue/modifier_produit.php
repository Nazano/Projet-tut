<?php
    require_once("../Controleur/Controleur_affichage_commun.php");
    require_once("../Modele/connect.php");
    require_once("../Modele/produit.php");
    session_start();
    afficher_header();
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $result = mysqli_query($co,"SELECT * from produit where idProduit = $id ") or die("erreur lors de la requete de recherche du produit à modifier");
        while ($row = mysqli_fetch_assoc($result)){
            $produit = new Produit($id,$row['prix'],$row['stock'],$row['libelle']);
        }
        $_SESSION['modifProduit']=$produit;
    }


    ?>
    <!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Modifier produit</title>
        <!-- css -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
    <div class="container" style="margin-top: 100px">
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="jumbotron">
              <h2 class="display-4 text-center"> <?php if (isset($_GET['id'])) {echo "Modifier un produit :" . $produit->getLibelle();} else {echo "Ajouter un produit";} ?></h2><br>
              <form class="form" method="POST" action="<?php if (isset($_GET['id'])) { echo "../Controleur/controleur_modifier_produit.php"; } else {echo "../Controleur/controleur_ajouter_produit.php";} ?>">
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Prix :</span>
                </div>
                <input type="text" class="form-control" name="prix"  required="" value="<?php if (isset($_GET['id'])) {echo $produit->getPrix(); } else { echo "";}?>" />
            </div>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Libelle :</span>
              </div>
              <input type="text" class="form-control" name="libelle"  required="" value="<?php if (isset($_GET['id'])) { echo $produit->getLibelle(); } else {echo "";} ?>" />
            </div>
              <p></p>
              <div class="container">
                <div class="row">
                  <div class="col-md-6 offset-md-3">
                    <input class="btn btn-lg btn-primary btn-block" type="submit" value="<?php if (isset($_GET['id'])) { echo "Modifier"; } else {echo "Ajouter";} ?>"/>
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
