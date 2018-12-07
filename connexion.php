
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Connexion</title>

    <!-- Bootstrap core CSS -->
    <link href="connexion.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="connexion1.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form class="form-signin" method="post" action="connexionForm.php">
      
      <h1 class="h3 mb-3 font-weight-normal">Connectez vous dès maintenant !</h1>
      <label for="inputEmail" class="sr-only">Adresse mail</label>
      <input type="email" id="inputEmail" class="form-control" name="mail" value="aaaaaa@bbbb.ccc" placeholder="Email address" required autofocus>
      <label for="inputPassword" class="sr-only">Mot de passe</label>
      <input type="password" id="inputPassword" class="form-control" name="motDePasse" value="aaaaaa@bbbb.ccc" placeholder="Password" required>
      <div class="checkbox mb-3">
        
          <input type="checkbox" id="cookie"value="1" checked>Se souvenir de moi 
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    </form>
  </body>
</html>
