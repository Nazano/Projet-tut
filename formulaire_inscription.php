<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Inscription</title>
    </head>	

    <body>
        <?php
            if( isset($_COOKIE["bad_input_mdp_or_email"])) {
                $bad = $_COOKIE["bad_input_mdp_or_email"];
                var_dump($bad);
                if ($bad == 1) {
                    echo("Votre mot de pass ou email ne correspond pas (ou les 2)");
                } else {
                    echo "wtf ?";
                }
            } else {
                echo"pas de cookie ?";
            }
        ?>
        
        <form action='../Controleur/inscription.php' method='POST'>
            <p>
                <label for="pseudo">Pseudo : </label>
                <input type="text" name="pseudo" id="pseudo" value="" required/>
            </p>

            <p>
                <label for="pass">Mot de passe : </label>
                <input type="password" name="pass" id="pass" value="" required/>
            </p>

            <p>
                <label for="pass">Vérification du Mot de passe : </label>
                <input type="password" name="check_pass" id="check_pass" value="" required/>
            </p>

            <p>
                <label for="nom">Nom : </label>
                <input type="text" name="nom" id="nom" value="" required/>
            </p>

            <p>
                <label for="prenom">Prenom : </label>
                <input type="text" name="prenom" id="prenom" value="" required/>
            </p>

            <p>
                <label for="tel">Telephone : </label>
                <input type="text" name="tel" id="tel" value="" required/>
            </p>

            <p>
                <label for="email">Email : </label>
                <input type="text" name="email" id="email" value="" required/>
            </p>

            <p>
                <label for="email">Verification Email : </label>
                <input type="text" name="check_email" id="check_email" value="" required/>
            </p>

            <input type='submit' value='Créer un compte' />
        </form>

    </body>
</html>

