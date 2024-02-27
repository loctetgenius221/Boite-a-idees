<?php 
@include 'config.php';

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrateur - La boite à idées</title>
    <!-- lien du style.css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <div class="container">
        <div class="content">
            <h3>Hello, <span>admin</span> </h3>
            <h1>Bienvenue <span></span></h1>
            <p>Ceci est une page d'administrateur</p>
            <a href="connexion.php" class="btn">Connexion</a>
            <a href="inscription.php" class="btn">Inscription</a>
            <a href="deconnexion.php" class="btn">Déconnexion</a>
        </div>
    </div>
</body>
</html>