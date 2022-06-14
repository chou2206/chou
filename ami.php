<!DOCTYPE html>
<head>
    <title>Mon Profile</title>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="all.css">
</head>
<body>
    <nav>
        <div class="profil">
            <a  class="activve"  href="#"><img class="image" src="user.png"></a>
            <p class="nom">Utilisateur</p>
                
        </div>

        <div class="menu">
            <ul class="r">
                <li><a href="home.php">Accueil</a></li>
                <li><a href="invitation.php">Invitation</a></li>
                <li><a href="notification.php">Notification</a></li>
            </ul>
        </div>

        <div class="nn">
            <input class="ch" type="search" name="" placeholder="Rechercher">
            <a href="#"> <button class="btn">Rechercher</button></a>
        </div>
    </nav> 
    
    <div class="container">
        <div class="informations-bar">
          <ul class="jjj">
            <li ><a href="pub.php">Publication</a></li>
            <li ><a href="photo.php" >Photo</a></li>
            <li class="activee"><a href="#" >Amis</a></li>
            <li ><a href="about.php" >A propos </a></li>
          </ul>
        </div>  
        <div class="profile">
            <div class="bb">
                <img src="user.png">  
                <a href="#">Change photo</a> 
            </div>
            <div class="b">
                <p class="name">Utilisateur</p>
                <a class="o" href="#" >Modifier mon profil</a>
            </div>
            <div class="invt">
                <button class="it">Ajouter un ami</button>
              </div>
              <div class="point">
                <button class="in"> ... </button>
              </div>
        </div>
    </div>

    <div class="t">
        <p>La liste est vide </p>
    </div>
</body>
</html>