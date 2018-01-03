<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Créer un compte</title>
  </head>
  <body>
    Veuillez remplir les champs ci-dessous pour créer votre compte. </br>
    <span style="color:red"> <?php require_once("user.php"); session_start(); if (isset($_SESSION["form"]) and $_SESSION["form"] == false) echo "Veuillez remplir tous les champs."; $_SESSION["form"] = true; ?> </span> </br>

    <form action="account.php" method="post">
    <input type="text" name="prénom" placeholder="Prénom" value = <?php if(isset($_SESSION["parent"])) echo $_SESSION["parent"]->prenom ; else echo ""; ?>>

    <input type="text" name="nom" placeholder="Nom" value = <?php if(isset($_SESSION["parent"])) echo $_SESSION["parent"]->nom ; else echo ""; ?>> </br>

    <input type="text" name="username" placeholder="Nom d'utilisateur" value = <?php if(isset($_SESSION["parent"])) echo $_SESSION["parent"]->username ; else echo ""; ?>>
    <span style="color:red"> <?php if (isset($_SESSION["id"]) and $_SESSION["id"] == false) echo "Nom d'utilisateur déjà utilisé."; $_SESSION["id"] = true;  ?> </span> </br>

    <input type="text" name="email" placeholder="Adresse e-mail" value = <?php if(isset($_SESSION["parent"])) echo $_SESSION["parent"]->mail ; else echo ""; ?>>
    <span style="color:red"> <?php if (isset($_SESSION["email"]) and $_SESSION["email"] == false) echo "Adresse e-mail invalide."; $_SESSION["email"] = true; ?> </span> </br>

    <input type="text" name="check_email" placeholder="Confirmer l'adresse e-mail" value = <?php if(isset($_SESSION["parent"])) echo $_SESSION["parent"]->check_mail ; else echo ""; ?>>
    <span style="color:red"> <?php if (isset($_SESSION["check_email"]) and $_SESSION["check_email"] == false) echo "Les deux adresses ne correspondent pas."; $_SESSION["check_email"] = true;  ?> </span> </br>

    <input type="text" name="tel" placeholder="Numéro de téléphone" value = <?php if(isset($_SESSION["parent"])) echo $_SESSION["parent"]->tel ; else echo ""; ?>>
    <span style="color:red"> <?php if (isset($_SESSION["tel"]) and $_SESSION["tel"] == false) echo "Numéro de téléphone invalide."; $_SESSION["tel"] = true; ?> </span> </br>

    <input type="password" name="pwd" placeholder="Mot de passe" value = <?php if(isset($_SESSION["parent"])) echo $_SESSION["parent"]->pwd ; else echo ""; ?>> </br>

    <input type="password" name="check_pwd" placeholder="Confirmer le mot de passe" value = <?php if(isset($_SESSION["parent"])) echo $_SESSION["parent"]->check_pwd ; else echo ""; ?>>
    <span style="color:red"> <?php if (isset($_SESSION["check_pwd"]) and $_SESSION["check_pwd"] == false) echo "Les deux mots de passe ne correspondent pas."; $_SESSION["check_pwd"] = true;  ?> </span> </br>


    <input type="checkbox" name="offre" value=""> Recevoir les actualités et des offres spéciales d'Apero (optionnel) </br>
    <input type="checkbox" name="conditions" value=""> En cliquant sur créer un compte, j'accepte les conditions générales d'utilisation et la politique de confidentialité.
    <span style="color:red"> <?php if (isset($_SESSION["conditions"]) and $_SESSION["conditions"] == false) echo "Veuillez accepter les conditions générales d'utilisation et la politique de confidentialité."; $_SESSION["conditions"] = true; ?> </span> </br>
    <input type="submit" name="create_account" value="Créer un compte">
    </form>
  </body>
</html>
