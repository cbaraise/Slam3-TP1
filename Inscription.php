<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="CSS/style.css" media="screen" type="text/css" />

    </head> 
    
    
       <a href='Inscription.php' class='inscription'>Inscription</a>
        <br>
        <a href='index.php' class='connexion'>Connexion</a>
    
   
   
    <body>
    <p style="color:orange">Bonjour, Logguer vous avec vos informations</P>
   

        <div id="container" class="formulaire">
            <!-- zone de connexion -->
            
            <form action="ConnecInscription.php" method="POST">
                <h1>Inscription</h1>
                
                <label><b>Nom d'utilisateur :</b></label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>
                <label><b>Adresse mail :</b></label>
                <input type="email" placeholder="Entrer votre adresse mail" name="mail" required>

                <label><b>Mot de passe :</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="mdp" required>
                <br>
                <label><b>Confirmer le Mot de passe :</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="mdp2" required>
                <br>
                <input type="submit" id='submit' value='Inscription' >
                

        
                <?php
             
                // Code de vérification du login mdp
                ?>
            </form>
        </div>
    </body>
</html>
