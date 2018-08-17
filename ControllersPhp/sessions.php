<?php
 include 'ConnexionBDD.php';
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $sql = "select `Nom` from user where `login` = '$user_check'  ";
   $reponse =  $bdd->query($sql);
   $row = $reponse->fetch();
   
   $login_session = $row['Nom'];
   $reponse->closeCursor();
   if(!isset($_SESSION['login_user'])){
      header("location:page/Login.php");
   }
?>