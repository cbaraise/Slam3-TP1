


<body>
    <h1>Vous êtes connecté </h1>
    <?php 
    session_start();

    echo 'Bonjour'.' '.'bienvenue'.' '.$_SESSION['identifiant'];
?>

</body>