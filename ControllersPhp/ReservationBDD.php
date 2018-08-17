<?php
include 'ConnexionBDD.php';
$Depart = "";
$Arrivee = '';
$DateDepart = '';
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);

  $Depart = $request->Depart;
  $Arrivee = $request->Arrive;
  //$DateDepart = $request->Date;
 

$reponse = $bdd->query("SELECT dep.lb_Adresse as dep ,arr.lb_Adresse as arr,depart, arrivee,DATE_FORMAT(heure_depart,'%H:%i') AS 'heure_depart', DATE_FORMAT(heure_arrive,'%H:%i') AS 'heure_arrive', prix 
                        FROM trajet t 
                        JOIN lieux as dep ON dep.id = t.link_lieux_depart AND dep.lb_Adresse ='$Depart'  
                        JOIN lieux as arr ON arr.id = t.link_lieux_arrivee AND arr.lb_Adresse = '$Arrivee'"  
                        );


while ($donnees = $reponse->fetch())
{
?>
 <?php
   $data[] = array("Lieuxdepart"=>$donnees['dep'],"Lieuxarrive"=>$donnees['arr'],"Depart"=>$donnees['depart'],"Arrivee"=>$donnees['arrivee'],"Heure_depart"=>$donnees['heure_depart'],"Heure_arrive"=>$donnees['heure_arrive'],"Prix"=>$donnees['prix']);

   ?>
<?php
}
echo json_encode($data);
$reponse->closeCursor();
?>