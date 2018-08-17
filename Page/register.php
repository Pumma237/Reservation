<?php
//Connexion à la base de données
//echo"salut";
//print_r($_POST);
try {
	$pdo = new PDO('mysql:host=localhost;dbname=reservation;charset=utf8', 'root','');
} catch (Exception $e) {
	echo $e->getMessage();
}



if(isset($_POST["login"]) && isset($_POST["mdp"]) && isset($_POST["Nom"])){
	
	if($_POST["mdp"]){
		
		$hash = password_hash($_POST["mdp"], PASSWORD_DEFAULT);
		
		$query = $pdo->prepare('INSERT INTO user (login,mdp,Nom) VALUES(:login, :mdp, :Nom);');
		
		$query->bindParam(':login', $_POST["login"]);
		$query->bindParam(':mdp', $_POST["mdp"]);
		$query->bindParam(':Nom', $_POST["Nom"]);
		
		
		$query->bindParam(':mdp', $hash);
		try {
			$query->execute();
		} catch (Exception $e) {
			echo $e->getMessage();
		}
		
		echo "Cotre compte a ete cree. Merci !";
		//header('Location: indexmain.php');
		header( "refresh:2;url=Login.php" );
		
	}
}
?>
?>