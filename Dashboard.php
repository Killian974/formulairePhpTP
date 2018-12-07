<?php
class listeContact {
  
      private $prenomContact;
      private $nomContact;
      private $emailContact;
  
      public function __construct(string $prenomContact, string $nomContact, string $emailContact) {
          $this->prenomContact = $prenomContact;
          $this->nomContact = $nomContact;
          $this->emailContact = $emailContact;
      }

      public function setPrenomContact($pPrenomContact){
        $this->prenomContact = $pPrenomContact;
    }
    
    public function getPrenomContact() {
        return $this->prenomContact;
    }

    public function setNomContact($pNomContact){
      $this->nomContact = $pnomContact;
  }
  
  public function getNomContact() {
      return $this->nomContact;
  }

  public function setEmailContact($pEmailContact){
    $this->emailContact = $pEmailContact;
}

public function getEmailContact() {
    return $this->emailContact;
}
  }
// 1 Créer une connnexion à la bdd
try{
  $host='localhost';
  $port='3306';
  $database='coursPhpObjet';
  $listeContact = array();
  
  $pdo = new PDO ("mysql:host=$host;port=$port;dbname=$database",'root','' ) ;
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
$pdo->exec("INSERT INTO ajoutContact(prenomContact,nomContact, emailAdresse) VALUES ($prenomContact, $nomContact, $emailContact)");
  // var_dump("Le dernier ID est :".$pdo->lastInsertId() );
// $stmt = $pdo ->query("SELECT * FROM clients;"); 
  
  // var_dump($stmt->fetchObject);
  
// 3 Extraire les données (fetch())
while(($row = $stmt->fetch(PDO::FETCH_ASSOC)) !== false){
  $client = new contact(
      $row['prenomContact'],
      $row['nomContact'],
      $row['emailContact']
  );
// 4 Créer une instance d'une classe de type Contact



// 5 Mettre l'objet contact dans une variable de liste de contacts ($listContacts)

$listeContact[] = $contact;
}

?><html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Contact</title>

    <!-- Bootstrap core CSS -->
    <link href="dashboard.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>

  <body class="bg-light">

    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
      <a class="navbar-brand mr-auto mr-lg-0" href="#">Contact&Co</a>
      <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Dashboard<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Insciption</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Connexion</a>
          </li>
                  </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Rechercher" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Recherche</button>
        </form>
      </div>
    </nav>
    

    

    <main role="main" class="container">
      <div class="d-flex align-items-center p-3 my-3 text-white-50 bg-purple rounded shadow-sm">
        <img class="mr-3" src="../../assets/brand/bootstrap-outline.svg" alt="" width="48" height="48">
        <div class="lh-100">
          <h6 class="mb-0 text-white lh-100">Bootstrap</h6>
          <small>Since 2018</small>
        </div>
      </div>

      <div class="my-3 p-3 bg-white rounded shadow-sm">
        <h6 class="border-bottom border-gray pb-2 mb-0" style="texte-align:center;">Salut "identifiant" ! Voici tous tes contacts ci-dessous :</h6>
        
        <?php foreach($listContacts as $contact): ?>
        <div class="media text-muted pt-3">
          <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <strong class="d-block text-gray-dark"><?php echo $contact->getPrenomContact() ?> <?php echo $contact->getNomContact() ?></strong>
            <?php echo $contact->getEmailContacts() ?>
          </p>
        </div>
        <?php endforeach ?>
     
        <small class="d-block text-right mt-3">
          <a href="#">Voir tous nos contacts</a>
        </small>
      </div>

      <form action="formDashboard.php" method="POST">

              <div class="col-md-6 mb-3">
                <label for="firstName">Prénom</label>
                <input type="text" class="form-control" name="prenomContact" id="prenomContact" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Prénom valide requis 
                </div>
                </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Nom</label>
                <input type="text" class="form-control" name="nomContact" id="lastName" required>
                <div class="invalid-feedback">
                  Nom valide requis 
                </div>
              </div>
            </div>
            <div class="mb-2 ">
              <label for="address">E-mail du contact</label>
              <input type="text" class="form-control" name="emailContact" id="address" value="sdfghjk@dfghjkl.fg" placeholder="azertyuiop@gmail.com" required>
              <div class="invalid-feedback">
               Veuillez entrez une adresse email valide svp
              </div>
            </div>

            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Ajoutez le contact !</button>
      </form>


  </body>
</html>