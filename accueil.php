


<body>
    <h1>Vous êtes connecté </h1>
    <?php 
    session_start();
     require("Connexion.php");

    echo 'Bonjour'.' '.'bienvenue'.' '.$_SESSION['identifiant'];
?>

</body>