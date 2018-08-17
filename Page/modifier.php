<?php 

	$objetPdo = new PDO('mysql:host=localhost;dbname=reservation','root','');

	$pdoStat = $objetPdo->prepare('UPDATE user set login=:login, mdp=:mdp, Nom=:Nom, isAdmin=:isAdmin, isAdherent=:isAdherent WHERE id=:num LIMIT 1 ');


	$pdoStat->bindValue(':num', $_POST['numContact'], PDO:: PARAM_INT);
	$pdoStat->bindValue(':login', $_POST['firstName'], PDO:: PARAM_INT);
	$pdoStat->bindValue(':mdp', $_POST['lastName'], PDO:: PARAM_INT);
	$pdoStat->bindValue(':Nom', $_POST['phone'], PDO:: PARAM_INT);
	$pdoStat->bindValue(':isAdmin', $_POST['mail'], PDO:: PARAM_INT);
	$pdoStat->bindValue(':isAdherent', $_POST['ad'], PDO:: PARAM_INT);

	$executeIsok = $pdoStat->execute();

	if ($executeIsok) {
		$message = 'Le contact a ete modifer';
		header ("Refresh: 1;URL=BackOffice.php");

	} else {
		$message = 'Echec de modification';
	}

?>



<!DOCTYPE html>
<html>


    <head>
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    	<!--<link rel="stylesheet" type="text/css" href="css/wing.css">-->
    	<title>Modification</title>
    </head>


    <body>

    	<h1>Modification</h1>

    	<P><?= $message ?></P>
   		
    
    </body>
</html>