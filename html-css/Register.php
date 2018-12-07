<?php require "../Register.php"
?>
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
          <form class="needs-validation" novalidate>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">Prénom</label>
                <input type="text" class="form-control" id="firstName" placeholder="Patrick" value="" required>
                <div class="invalid-feedback">
                  Un prénom valide est obligatoire.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Nom</label>
                <input type="text" class="form-control" id="lastName" placeholder="Poitou" value="" required>
                <div class="invalid-feedback">
                  Un nom valide est obligatoire.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="username">Identifiant</label>
              <div class="input-group">
                
                <input type="text" class="form-control" id="username" placeholder="LeCoinBuvetteDu44" required>
                <div class="invalid-feedback" style="width: 100%;">
                  Un identifiant valide est obligatoire.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="email">Email </label>
              <input type="email" class="form-control" id="email" placeholder="toi@example.com" required>
              <div class="invalid-feedback">
                Une adresse e-mail valide est obligatoire.
              </div>
            </div>
            <div class="date">
              <label for="date">Date de naissance </label>
              <input type="date" class="form-control" id="date" placeholder="" required>
              <div class="invalid-feedback">
                Une date de naissance valide est obligatoire.
              </div>

            <div class="mb-3">
              <label for="address">Mot de passe</label>
              <input type="password" class="form-control" id="address" placeholder="8 caractères minimum !" required>
              <div class="invalid-feedback">
                Un mot de passe valide est obligatoire.
              </div>
            </div>
            <div class="mb-3">
              <label for="address"> Confirmation de mot de passe</label>
              <input type="password" class="form-control" id="address" placeholder="8 caractères minimum !" required>
              <div class="invalid-feedback">
                Les deux champs mot de passe doivent être identique.
              </div>
            </div>

            <div class="row">
              <div class="col-md-5 mb-3">
                <label for="country">Sexe</label>
                <select class="custom-select d-block w-100" id="country" required>
                  <option value="">Homme</option>
                  <option>Femme</option>
                  <option>Autre</option>
                  <option>Hamster</option>
                  <option>Poutre</option>
                </select>
              </div>
              </div>
            
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="save-info">
              <label class="custom-control-label" for="save-info">Sauvegarder les infos pour la prochaine connexion</label>
            </div>
            

            

           
            
            
            <hr class="mb-4">
            <input class="btn btn-primary btn-lg btn-block" type="submit" name="S'inscrire" value="Sinscrire"></button>
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
    

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';
        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');
          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
  </body>
</html>