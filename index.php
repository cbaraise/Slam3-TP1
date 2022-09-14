<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="CSS/style.css" media="screen" type="text/css" />

    </head> 
    

    <a href='Inscription.php' class='inscription'>Inscription</a>
   
    <body>
    <p style="color:orange">Bonjour, Logguer vous avec vos informations</P>
   

        <div id="container" class="formulaire">
            <!-- zone de connexion -->
            
            <form action="verification.php" method="POST">
                <h1>Connexion</h1>
                
                <label><b>Nom d'utilisateur</b></label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" required>
                <br>
                <input type="submit" id='submit' value='Login' >
                
                <?php
                
                // Code de vérification 
                ?>
            </form>
        </div>
    </body>
</html>
