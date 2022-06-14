<?php
include 'base.php';
error_reporting(0);

if (isset($_SESSION['nom'])) {
    header("Location: home.php");
}

if (isset($_POST['submit'])) {
	$matricule = $_POST['matricule'];
	$pass = md5($_POST['pass']);

	$sql = "SELECT * FROM etudiant WHERE matricule='$matricule' AND pass='$pass'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['nom'] = $row['nom'];
		header("Location: home.php");
	} 
	else {
		echo "<script>alert('Oups! L'e-mail ou le mot de passe est incorrect.')</script>";
	}
}

?>




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
	$motdepass = md5($_POST['motddepass']);
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