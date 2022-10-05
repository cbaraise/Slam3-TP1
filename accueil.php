


<body>
    <h1>Vous êtes connecté </h1>
    <?php 
    session_start();
     ("Connexion.php");

    echo 'Bonjour'.' '.'bienvenue'.' '.$_SESSION['identifiant'];
?>

</body>