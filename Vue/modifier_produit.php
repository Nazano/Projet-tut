<?php 
    require_once("../Controleur/Controleur_affichage_commun.php");
    require_once("../Modele/connect.php");
    require_once("../Modele/produit.php");
    session_start();
    afficher_header();
    $id = $_GET['id'];
    $result = mysqli_query($co,"SELECT * from produit where idProduit = $id ") or die("erreur lors de la requete de recherche du produit à modifier");
    while ($row = mysqli_fetch_assoc($result)){
        $produit = new Produit($id,$row['prix'],$row['stock'],$row['libelle']);
    }
    
    ?>
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
    <div class="container" style="margin-top: 100px">
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="jumbotron">
              <h2 class="display-4 text-center">Modifier un produit : <?php $produit->getLibelle() ?></h2><br>
              <form class="form" method="POST" action="../Controleur/controleur_modifier_produit.php">
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Prix :</span>
                </div>
                <input type="text" class="form-control" name="prix"  required="" value="<?php echo $produit->getPrix() ?>" />
            </div>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Libelle :</span>
              </div>
              <input type="text" class="form-control" name="libelle"  required="" value="<?php echo $produit->getLibelle() ?>" />
            </div>
              <p></p>
              <div class="container">
                <div class="row">
                  <div class="col-md-6 offset-md-3">
                    <input class="btn btn-lg btn-primary btn-block" type="submit" value="Modifier"/>
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
