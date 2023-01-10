<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="static\css\stylesheet.css">
        <title>Formulaire d'inscription</title>
        <link rel="icon" type="image/png" sizes="16x16"  href="static\images\favicons\favicon-16x16.png">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="theme-color" content="#ffffff">
    </head>
    <body>
            <form action="enregistrement.php" method="post"> 
<fieldset>
                    Nom : <input type="text" class="nom" name="Nom_Utilisateur" size="20" required placeholder="Entrez votre nom"/><br/><br/>
                    Prénom : <input type="text" class="prenom" name="Prenom_Utilisateur" size="20" required placeholder="Entrez votre prénom"/><br/>
                    <br/>
                    E-mail&#9993; : <input type="email" class="email" name="Email" size="20" required placeholder="Entrez votre mail" />
                <br/><br/>
                Mot de passe : <input type="password" class="mdp" name="MDP_Utilisateur1" size="20" required placeholder="Entrez votre mot de passe"/>
               <br/><br/>
               Confirmation du Mot de passe : <input type="password" class="mdp" name="MDP_Utilisateur2" size="20" required placeholder="Entrez votre mot de passe"/>
               <br/><br/>
               Envoyer vos données &#9755; <input type="submit" class="boutonenvoi" id="BoutonEnvoi" value="Envoyer&#128231;"/><br/>
</fieldset>
            </form>
    </body>

</html>
</register>
