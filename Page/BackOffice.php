<?php 

    $objetPdo = new PDO('mysql:host=localhost;dbname=reservation','root','');


    $pdoStat = $objetPdo->prepare('SELECT * FROM user ');


    $executeIsok = $pdoStat->execute();

    $contacts = $pdoStat->fetchAll();

?>


<?php

  include '../ControllersPhp/sessions.php';
  include '../Page/Hearder.php';
?>



<!DOCTYPE html>
<html>


    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        
        <style type="text/css">
            
            body {
                color:black;
                background-color:white;
                background-image:url(img/logo.jpg);
                background-attachment:fixed;
                background-repeat:no-repeat;
                margin:0;
                }

                table 
        </style>

        <title>Utilisateurs</title>
    </head>


    <body>
        <br>
        <br>
        <br><br><br><br><br><br>
           
                <div class="container">
                    <div class="row">
                    
                    
                    
                        <div class="col-md-10 col-md-offset-1">

                            <div class="panel panel-default panel-table">
                              <div class="panel-heading">
                                <div class="row">
                                  <div class="col col-xs-6">
                                    <h3 class="panel-title">Liste des utilisateurs</h3>
                                  </div>

                                
               
              
            </div>



            </div>
              </div>
              <div class="panel-body">
                <table class="table table-striped table-bordered table-list">
                  <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th class="hidden-xs">Login</th>
                        <th>Mdp</th>
                        <th>Nom</th>
                        <th>Admin</th>
                        <th>Adherent</th>
                    </tr> 
                  </thead>
                  <tbody>
                    <?php foreach($contacts as $contact):?>

                    <?php
                        $cli_id = $contact["id"];
                        $cli_nom = $contact["login"];
                        $cli_prenom = $contact["mdp"];
                        $cli_tel = $contact["Nom"];
                        $cli_mail = $contact["isAdmin"];
                        $cli_ad = $contact["isAdherent"];
                        
                        
               echo "<tr align='center' id='".$cli_id."'>";
               echo "<td>".$cli_id."</td>";

               
               
               echo "<td>".$cli_nom."</td>";
               echo "<td>".$cli_prenom."</td>";
               echo "<td>".$cli_tel."</td>";
               echo "<td>".$cli_mail."</td>";
               echo "<td>".$cli_ad."</td>";

               echo "<td align='center'><div class='btn-group'>";
               echo "<a href='supprimer.php?numContact=".$contact['id']."'> <img src='Close-icon.png' alt='HTML tutorial' ></a>";
               echo "<a href='form_modification.php?numContact=" .$contact['id']."'><img src='write-1-icon.png' alt='HTML tutorial' ></a>";
               echo "<a href='envoyer_mail.php?numContact=" .$contact['id']."'><img src='Mail-icon (1).png' alt='HTML tutorial' ></a>";

               echo "<div id='myModal' class='modal'>

                  <!-- Modal content -->
                  <div class='modal-content'>
                    <div class='modal-header'>
                      <span class='close'>&times;</span>
                      <h2>Modal Header</h2>
                    </div>
                    <div class='modal-body'>
                      <p>Some text in the Modal Body</p>
                      <p>Some other text...</p>
                    </div>
                    <div class='modal-footer'>
                      <h3>Modal Footer</h3>
                    </div>
                  </div>

                </div>";




                echo "</div></td>";

                echo "</tr>";?><?php endforeach;?>
                        </tbody>
                </table>
            
              </div>
              
            </div>

        </div>
    </div>
</div>

    
    
    </body>
   
</html>