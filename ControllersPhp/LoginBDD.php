<?php
include 'ConnexionBDD.php';
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 

      $myusername = $_POST['username'];
      $mypassword = $_POST['password'];
    //   $postdata = file_get_contents("php://input");
    //   $request = json_decode($postdata);
    //   $myusername = mysqli_real_escape_string($db,$request->username);
    //   $mypassword = mysqli_real_escape_string($db,$request->password); 
      
      $sql = "SELECT isAdmin, isAdherent FROM user WHERE login = '$myusername' and mdp = '$mypassword'";
      $reponse =  $bdd->query($sql);
      $count =$reponse->rowCount();
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         $_SESSION['login_user'] = $myusername;
         while($donnees = $reponse->fetch()) {
          if($donnees['isAdmin'] == 1){
            header("location: ../Page/BackOffice.php");
          }


          elseif($donnees['isAdherent'] == 2){
            header("location: ../Page/Adherent.php");
          }



          else{
            header("location: ../index.php");
          }
         }


      }else {
         $error = "Your Login Name or Password is invalid";
         echo $error;
      }
   }
?>