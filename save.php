

<?php 
	$serveur="localhost";
	$login="root";
	$pass="";
	$db="my_app";

$nom=$_POST['nom'];
$email=$_POST['email'];
$pwd=$_POST['pass'];

	
	$sql1=("INSERT INTO user(name,email,pass) values(:name,:email,:pwd)");
			$requete = $conn -> prepare($sql1);
			$requete -> bindParam(':name', $name);
			$requete -> bindParam(':email', $email);
			$requete -> bindParam(':pwd', $pwd);

			$requete -> execute();

			echo "<a href='index.php'>POURSUIVRE LA CONNECTION</a>";

	
 ?>