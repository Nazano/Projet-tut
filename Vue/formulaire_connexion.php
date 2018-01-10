<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Connexion</title>
    </head>	

    <body>
        <form action='../controleur/connexion.php' method='POST'>
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
        

    </body>
</html>

