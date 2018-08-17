
<?php 

	
	$objetPdo = new PDO('mysql:host=localhost;dbname=reservation','root','');
	 $objetPdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);





	$pdoStat = $objetPdo->prepare('DELETE FROM user WHERE id=:num LIMIT 1 ');


	$pdoStat->bindValue(':num', $_GET['numContact'], PDO:: PARAM_INT);

	$executeIsok = $pdoStat->execute();

	
	if ($executeIsok) {
		$message = 'Le contact a ete supprimer';
		header ("Refresh: 1;URL=BackOffice.php");

	} 
		else {
			$message = 'Echec de suppression';
	}

?>




<!DOCTYPE html>
<html>


    <head>
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    	<!--<link rel="stylesheet" type="text/css" href="css/wing.css">-->
    	<title>Document</title>
    </head>


    <body>

    	<h1>Suppression</h1>

    	<P><?= $message ?></P>
   		
    
    </body>
</html>