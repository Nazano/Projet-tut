<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Connection</title>
    </head>	

    <body>
        <form action='../controleurs/connexion.php' method='POST'>
            <p>
                <label for="pseudo">Pseudo : </label>
                <input type="text" name="pseudo" value="" required/>
            </p>

            <p>
                <label for="pass">Mot de passe : </label>
                <input type="password" name="pass" value="" required/>
            </p>

            <input type='submit' value='Se connecter' />
        </form>
        
        <form action='../vues/formulaire_inscription.php' method='POST'>
            <input type='submit' value="S'inscrire" />
        </form>

    </body>
</html>

