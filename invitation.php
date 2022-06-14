<?php
include 'base.php';

error_reporting(0);

session_start();

?>

<!DOCTYPE html>
<head>
    <title>Les invitations</title>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <div class="profil">
            <a href="pub.php"><img class="image" src="user.png"></a>
            <p class="nom">Utilisateur</p>
        </div>

        <div class="menu">
            <ul class="r">
                    <li><a href="home.php">Accueil</a></li>
                    <li class="active"><a href="#">Invitation</a></li>
                    <li><a href="notification.php">Notification</a></li>
            </ul>
        </div>

        <div class="nn">
            <input class="ch" type="search" name="" placeholder="Rechercher">
            <a href="#"><button class="btn">Rechercher</button></a>
        </div>
    </nav>  
    <div class="f">
        <div class="gg">
            <ul class="rr">
                <li><a href="publier.php"> Publier</a></li>
                <li><a href="ami.php"> Amis</a></li>
                <li><a href="#"> Paramètres </a></li>
                <li><a href="connecter.php"> Déconnecter</a></li>
            </ul>
        </div>
        <div class="ff">
           <p><h2>La liste des invitations</h2></p> 
        </div>
        
    </div> 
</body>