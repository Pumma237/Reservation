<html>
<head>
	<!-- Js -->
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.2/angular.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

	<!-- Css -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
	<link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<section  id="loginform" class="col-md-12" ng-controller="userCtrl" class="outer-wrapper">
      <p><strong>Page de login</strong></p>
      
      <form method="post" action="../ControllersPhp/LoginBDD.php" class="form">
        <div class="col-md-4">
          <div class="form-group">
          <label for="login">Login</label>
            <input type="text" class="form-control" name="username" ng-model="username" placeholder="Exemple:Ivan" required=""/>
          </div> 
 
          <div class="form-group">
          <label for="Mdp">Mot de passe</label>
            <input type="password" class="form-control" name="password" ng-model="password" placeholder="Mot de passe" required=""/>
          </div>
 
          <div class="form-group">
            <button type="submit" class="btn btn-success" >Suivant</button><br>
          
            <!-- <span class="text-danger" style="color:red">{{ error }}</span> -->
          </div>
            <a href="inscription.php">Cree votre compte</a>
<br><br>
            <p>Pour etre inscrit sur espace Adherent il faut contacter l'administrateur vie ce formulaire !</p>
 
        </div>
      </form>
</section>
</body>
</html>