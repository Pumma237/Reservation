<!DOCTYPE html>
<html lang="fr" >

<head>
  <meta charset="UTF-8">
  <title>Page de inscription</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
  <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
  <link rel="stylesheet" href="css/css/style.css">

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script  src="/js/index.js"></script>
</head>

<body>

<div class="pen-title">
  <h1>Voulez vous saisir les champs suivants !</h1>
</div>

<div class="container">
  <div class="card"></div>
  <div class="card">
    <h1 class="title">Inscription</h1>
    <form action="register.php" method="POST">
     
      <div class="input-container">
        <input type="text" name="login" required />
        <label for="#{label}">Login</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="text" name="mdp" required />
        <label for="#{label}">Mdp</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
         <input type="text" name="Nom" required />
        <label for="#{label}">Nom</label>
        <div class="bar"></div>
      </div>
       
      <div class="input-container">
         <input type="password" name="mdp2" required />
        <label for="#{label}">Retapez mot-de-passe</label>
        <div class="bar"></div>
      </div>
      <div class="button-container">
        <button><span>S'inscrire</span></button>
      </div>
      <div class="footer"><a href="#">Mot de passe oublier ?</a></div>
    </form>
  </div>
  
    </form>
  </div>
</div>

  
  </body>

</html>