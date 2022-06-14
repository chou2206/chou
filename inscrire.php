
<?php
include 'base.php';

error_reporting(0);

session_start();

if (isset($_SESSION['nom'])) {
    header("Location: connecter.php");
}

if (isset($_POST['submit'])) {
    $matricule = $_POST['matricule'];
    $nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$email = $_POST['email'];
	$tel = $_POST['tel'];
	$motdepass = md5($_POST['motdepass']);
	$cmotdepass = md5($_POST['cmotdepass']);

    if($motdepass == $cmotdepass){

        $sql = "SELECT * FROM etudiant WHERE matricule ='$matricule'";
		$result = mysqli_query($conn, $sql);

        if(!$result->num_rows > 0){
            $sql = "INSERT INTO etudiant (matricule,nom,prenom,email,tel,motdepass)
			VALUES ( '$matricule' , '$nom', '$prenom' , '$email', '$tel' , '$motdepass')";
			$result = mysqli_query($conn, $sql);

            if($result){
                echo "<script>alert('Enregistrement de l'utilisateur terminer.')</script>";
				$matricule = "";
                $nom = "";
				$prenom = "";
				$email = "";
				$tel = "";
				$_POST['motdepass'] = "";
				$_POST['cmotdepass'] = "";

            }else{
                echo "<script>alert('Woops! Something Wrong Went.')</script>";

            }

        }else{
            echo "<script>alert('Oups!Numero d'etudiant deja existe .')</script>";
        }
        
    }else{
        echo "<script>alert('Le mot de passe ne correspond pas.')</script>";
    }          
}              
?>




<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="Untitled.css">

	<title>S'inscrire</title>
</head>
<body>
	<div class="container">
		<form action="" method="POST" class="c" enctype="multipart/form-data">
            <p class="l-text" style="font-size: 40px; font-weight:800; font-family: 'Arial', cursive;"> S'inscrire </p>
		
            
            <div class="i">
				<input type="text" placeholder="Nom" name="nom" value="<?php echo $nom; ?>" required>
			</div>
			<div class="i">
				<input type="text" placeholder="Prenom" name="prenom" value="<?php echo $prenom; ?>" required>
			</div>
			<div class="i">
				<input type="text" placeholder="Numero carte etudiant" name="matricule" value="<?php echo $matricule; ?>" required>
			</div>
			<div class="i">
				<input type="email" placeholder="E-mail" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="i">
				<input type="text" placeholder="Numero Telephone" name="tel" value="<?php echo $tel; ?>" required>
			</div>
			<div class="i">
				<input type="password" placeholder="Mot de passe" name="motdepass" value="<?php echo $_POST['motdepass']; ?>" required>
            </div>
            <div class="i">
				<input type="password" placeholder="Confirmez le Mot de passe" name="cmotdepass" value="<?php echo $_POST['cmotdepass']; ?>" required>
			</div>

			<div class="i">
				<button name="submit" class="btn">S'inscrire</button>
			</div>
			<p class="inscrire">Avoir un compte? <a href="connecter.php">Connectez-vous ici</a>.</p>
		</form>
	</div>
</body>
</html>