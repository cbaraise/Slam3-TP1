

<?php


$user='root';
$pass='';
if (isset($_POST['username'])) {$username=$_POST['username'];}
if (isset($_POST['motpasse'])) {$password=$_POST['motpasse'];}
session_start();


require ("index.php");
try {
    $dbh = new PDO('mysql:host=localhost;dbname=tp1_slam3', $user, $pass);
    $requete=$dbh->prepare('SELECT identifiant,MDP  FROM utilisateur WHERE identifiant = :username ;');
    $requete->bindValue(':username', $username , PDO::PARAM_STR);
    $requete->execute();
    $count=$requete->fetch();
    if(!isset($count['identifiant'])){
        
        header('Location:Inscription.php');
       
    }
    else{
      
       
        
        if((($count['MDP'] == $password ))){
        
        
        $_SESSION['identifiant']= $username;
        header('Location:accueil.php');
        
        
        
        }
        else{

            echo '<div style="text-align:center;border:red 2px solid ;border-radius:20px;margin-right:15%;margin-left:15%"><h2 style="color:red">mot de passe incorrect</h2></div> ';
        }
        
    }
    }
    catch(PDOException $erreur)
    {
        echo'Erreur :' . $erreur->getMessage();
        die;
    }
   
  ?>