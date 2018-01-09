<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Créer un compte</title>
  </head>
  <body>
    Veuillez remplir les champs ci-dessous pour créer votre compte. </br>
    <span style="color:red">
       <?php require_once("../Controleur/account_functions.php"); filled(); ?>
    </span> </br>

    <form action="../Controleur/account.php" method="post">
    <input type="text" name="prénom" placeholder="Prénom" value = <?php fill_prenom(); ?>>

    <input type="text" name="nom" placeholder="Nom" value = <?php fill_nom(); ?>> </br>

    <input type="text" name="username" placeholder="Nom d'utilisateur" value = <?php fill_username(); ?>>
    <span style="color:red"> <?php wrong_username();  ?> </span> </br>

    <input type="text" name="email" placeholder="Adresse e-mail" value = <?php fill_mail(); ?>>
    <span style="color:red"> <?php wrong_mail(); ?> </span> </br>

    <input type="text" name="check_email" placeholder="Confirmer l'adresse e-mail" value = <?php fill_check_mail(); ?>>
    <span style="color:red"> <?php wrong_check_email();  ?> </span> </br>

    <input type="text" name="tel" placeholder="Numéro de téléphone" value = <?php fill_tel(); ?>>
    <span style="color:red"> <?php wrong_tel(); ?> </span> </br>

    <input type="password" name="pwd" placeholder="Mot de passe" value = <?php fill_pwd(); ?>> </br>

    <input type="password" name="check_pwd" placeholder="Confirmer le mot de passe" value = <?php fill_check_pwd(); ?>>
    <span style="color:red"> <?php wrong_pwd();  ?> </span> </br>


    <input type="checkbox" name="offre" value=""> Recevoir les actualités et des offres spéciales d'Apero (optionnel) </br>
    <input type="checkbox" name="conditions" value=""> En cliquant sur créer un compte, j'accepte les conditions générales d'utilisation et la politique de confidentialité.
    <span style="color:red"> <?php not_checked(); ?> </span> </br>
    <input type="submit" name="create_account" value="Créer un compte">
    </form>
  </body>
</html>
