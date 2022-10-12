

<?php
$user='root';
$pass='';

if (isset($_POST['username'])) {$username=$_POST['username'];}
if (isset($_POST['mail'])) {$mail=$_POST['mail'];}
if (isset($_POST['mdp'])) {$mdp=$_POST['mdp'];}
if (isset($_POST['mdp2'])) {$mdp2=$_POST['mdp2'];}
require ("Inscription.php");
if ($_POST['mdp'] != $_POST['mdp2']){
    echo '<div style="text-align:center;border:red 2px solid ;border-radius:20px;margin-right:15%;margin-left:15%"><h2 style="color:red">Erreur :Les deux mot de passe ne sont pas identique </h2></div> ';

}
else{
    session_start();
    try {
        $dbh = new PDO('mysql:host=localhost;dbname=tp1_slam3', $user, $pass);
        $requete=$dbh->prepare('INSERT INTO utilisateur(identifiant, MDP, adresse_mail) VALUES (:username,:mdp ,:mail);');
        $requete->bindValue(':username', $username , PDO::PARAM_STR);
        $requete->bindValue(':mail', $mail , PDO::PARAM_STR);
        $requete->bindValue(':mdp', $mdp , PDO::PARAM_STR);
        $requete->execute();
        

        
        header('Location:index.php');

        echo '<div style="text-align:center;border:green 2px solid ;border-radius:20px;margin-right:15%;margin-left:15%"><h2 style="color:red">Compte crée avec succès ! </h2></div> ';

    

        
    
        
            
            
            
        }
        catch(PDOException $erreur)
        {
            echo'Erreur :' . $erreur->getMessage();
            die;
        }
}


   
  ?>