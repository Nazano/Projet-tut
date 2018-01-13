<?php
    require_once("../Controleur/Controleur_affichage_commun.php");
    require_once("../Modele/connect.php");
    require_once("../Modele/Course.php");
    session_start();
    afficher_header();
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $result = mysqli_query($co,"SELECT * from achat where idAchat = '$id' ") or die("erreur lors de la requete de recherche dela course à modifier");
        while ($row = mysqli_fetch_assoc($result)){
            $course = new Course($row['idAchat'],$row['qteAchete'],$row['dateAchat'],$row['prix'],$row['idParent'],$row['idProduit']);
        }
        $_SESSION['modifCourse']=$course;
    }
    $user = $_SESSION['user'];
    $idParent = $user->getID();
    $rank = $user->getRank();

    ?>
    <!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Modifier course</title>
        <!-- css -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
    <div class="container" style="margin-top: 100px">
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="jumbotron">
              <h2 class="display-4 text-center"> <?php if (isset($_GET['id'])) {echo "Modifier une course : " . $course->getIdAchat();} else {echo "Ajouter une course";} ?></h2><br>
              <form class="form" method="POST" action="<?php if (isset($_GET['id'])) { echo "../Controleur/controleur_modifier_course.php"; } else {echo "../Controleur/controleur_ajouter_course.php";} ?>">
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Prix :</span>
                </div>
                <input type="text" class="form-control" name="prix"  required="" value="<?php if (isset($_GET['id'])) {echo $course->getPrix(); } else { echo "";}?>" />
            </div>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Produit :</span>
              </div>
              <select class="form-control" name="produit">
                        <option value="">Choisissez un produit : </option>
                        <?php
                            $result = mysqli_query($co, "Select * from produit ") or die("echec de la recherche des produit");
                            while ($row = mysqli_fetch_assoc($result)) {
                                $value = $row['libelle'];
                                $id= $row['idProduit'];
                                $option = '<option value = ' .$id . '>' . $value . '</option>';
                                echo $option;
                            }
                        ?>
                </select>
            </div>

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Parent :</span>
              </div>
              <select class="form-control" name="parent">
                        <option value="">Choisissez un parent : </option>
                        <?php
                            if ($user->getRank() == 1 ) {
                                $requete = "Select * from parent where idStatut = 1 OR idStatut = 2 ";
                            } else if ($user->getRank() == 2 ){
                                $requete = "Select * from parent where idParent = '$idParent' ";
                            }
                            $result = mysqli_query($co, $requete) or die("echec de la recherche des parent");
                            while ($row = mysqli_fetch_assoc($result)) {
                                $value = $row['prenom'] . " " . $row['nom'];
                                $id = $row['idParent'];
                                $option = '<option value = ' . $id . '>' . $value . '</option>';
                                echo $option;
                            }
                        ?>
                </select>
            </div>


              <p></p>

              <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Date :</span>
                </div>
                <input type="date" class="form-control" name="date"  required="" value="<?php if (isset($_GET['id'])) {echo $course->getDAteAchat(); } else { echo "";}?>" />
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Quantite :</span>
                </div>
                <input type="text" class="form-control" name="quantite"  required="" value="<?php if (isset($_GET['id'])) {echo $course->getQteAchete(); } else { echo "";}?>" />
            </div>
            </div>

            </div>
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
