<?php
include 'ConnexionBDD.php';
// Si tout va bien, on peut continuer

// On récupère tout le contenu de la table jeux_video
$reponse = $bdd->query('SELECT * FROM Lieux');

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
?>
 <?php
   $data[] = array("fAdresse"=>$donnees['lb_Adresse'],"public"=>$donnees['Is_public']);

   ?>
<?php
}
echo json_encode($data);
$reponse->closeCursor(); // Termine le traitement de la requête

?>