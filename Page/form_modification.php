<?php 

	$objetPdo = new PDO('mysql:host=localhost;dbname=reservation','root','');

	$pdoStat = $objetPdo->prepare('SELECT * FROM user WHERE id=:num ');


	$pdoStat->bindValue(':num', $_GET['numContact'], PDO:: PARAM_INT);

	$executeIsok = $pdoStat->execute();

	$contact = $pdoStat->fetch();

?>



<!DOCTYPE html>
<html>


    <head>
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    	<!--<link rel="stylesheet" type="text/css" href="css/wing.css">-->
    	<title>Form modification</title>
    </head>


    <body>

    	<h1>Modifier un contact</h1>

    	<form action="modifier.php" method="post">

    		<input type="text" name="numContact" value="<?= $contact['id'] ?>">
        <p>
                <label for="nom">Login</label>
                <input id="nom" type="text" name="firstName" value="<?= $contact['login']; ?>">
        </p>

        <p>
                 <label for="prenom">Mot de passe</label>
                 <input id="prenom" type="text" name="lastName" value="<?= $contact['mdp']; ?>">

         </p>  

         <p>
                <label for="tel">Nom Presnom</label>
                <input id="tel" type="text" name="phone" value="<?= $contact['Nom']; ?>">  
        </p>
           
        <p>
               <label for="mel">Admin</label>
               <input id="mel" type="text" name="mail" value="<?= $contact['isAdmin']; ?>">

        </p>


        <p>
               <label for="mel">Adherent</label>
               <input id="mel" type="" name="ad" value="<?= $contact['isAdherent']; ?>">

        </p>

        <p>
                <input type="submit" value="Enregistrer les modification">

        </p>


    </form>
   		
    
    </body>
</html>