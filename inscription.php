
<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Bellour Killian">
    <link rel="stylesheet" type="text/css" href="Register2.css">

    <title>Inscription</title>

  </head>

  <body class="bg-light">

    <div class="container">
      <div class="py-5">
        <h1>On s'inscrit !</h1>
        <p class="lead">Veuillez rentrez vos informations ci-dessous</p>
      </div>

     

       
       
        <div class="col-md-8 order-md-1" >
          <h4 class="mb-3">HEY LISTEN !</h4>
          <form class="needs-validation" novalidate method="POST" action="inscriptionForm.php"> 
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">Prénom</label>
                <input type="text" class="form-control" id="firstName" placeholder="Patrick" name="prenom" required>
                <div class="invalid-feedback">
                  Un prénom valide est obligatoire.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Nom</label>
                <input type="text" class="form-control" id="lastName" placeholder="Poitou" name="nom" required>
                <div class="invalid-feedback">
                  Un nom valide est obligatoire.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="identifiant">Identifiant</label>
              <div class="input-group">
                
                <input type="text" class="form-control" id="identifiant" placeholder="LeCoinBuvetteDu44" name="identifiant" required>
                <div class="invalid-feedback" style="width: 100%;">
                  Un identifiant valide est obligatoire.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="email">Email </label>
              <input type="email" class="form-control" id="email" placeholder="toi@example.com"  name="email" required>
              <div class="invalid-feedback">
                Une adresse e-mail valide est obligatoire.
              </div>
            </div>
            <div class="date">
              <label for="date">Date de naissance </label>
              <input type="date" class="form-control" id="date" placeholder="" name="date_de_naissance" required>
              <div class="invalid-feedback">
                Une date de naissance valide est obligatoire.
              </div>

            <div class="mb-3">
              <label for="mdp">Mot de passe</label>
              <input type="password" class="form-control" id="mdp" placeholder="8 caractères minimum !" name="mot_de_passe" required>
              <div class="invalid-feedback">
                Un mot de passe valide est obligatoire.
              </div>
            </div>
            <div class="mb-3">
              <label for="mdp"> Confirmation de mot de passe</label>
              <input type="password" class="form-control" id="mdp2" placeholder="8 caractères minimum !" name="password2" required>
              <div class="invalid-feedback">
                Les deux champs mot de passe doivent être identique.
              </div>
            </div>

            <div class="row">
              <div class="col-md-5 mb-3">
                <label for="country">Sexe</label>
                <select class="custom-select d-block w-100" id="country" name="sexe" required>
                  <option value="1">Homme</option>
                  <option value="2">Femme</option>
                  <option value="3">Autre</option>
                  <option value="4">Hamster</option>
                  <option value="5">Poutre</option>
                </select>
              </div>
              </div>
            
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="save-info">
              <label class="custom-control-label" for="save-info">Sauvegarder les infos pour la prochaine connexion</label>
            </div>
            

            

           
            
            
            <hr class="mb-4">
            <input class="btn btn-primary btn-lg btn-block" type="submit" name="inscription" value="Sinscrire"></button>
          </form>
        </div>
      </div>

      <footer class="my-5 pt-5 text-muted text-center text-small">
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Privacy</a></li>
          <li class="list-inline-item"><a href="#">Terms</a></li>
          <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
      </footer>
    </div>
  </body>
</html>