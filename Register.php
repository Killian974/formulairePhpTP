<?php

require "bdd.php";

class User {
    private $_id;
    private $_sexe;
    private $_nom;
    private $_prenom;
    private $_identifiant;
    private $_email;
    private $_mdp;
    private $_vérif;

    public function identifiant() {
        $identifiant -> _identifiant ;
        $longueur = strlen($identifiant);
        $dommage = $bdd->query("SELECT id FROM 'inscription' WHERE 'identifiant' = '$identifiant'");

        if ($longueur<= 30 AND $dommage == FALSE) {
            echo "Ton identifiant est tellement chelou que personne l'a pris avant toi !";
        } else {
            echo "Ton identifiant est trop basique, EST UN PEU D'IMAGINATION QUAND MÊME !";
        }
    }

    public function mdp() {
        $hmdp = hash_password($_POST['$mdp']);
        $mdp-> _mdp;
        $vérif-> _vérif;

        if ($longueur >= 8) {
            echo "Ton mot de passe est valide, la sécurité avant tout !";
        } else {
            echo "Ton mot de passe est trop court, rallonge-le un peu pour plus de sécurité";
        }
        if ($mdp == $vérif) {
            echo "Ton mot de passe est valide, la sécurité avant tout !";
        } else {
            echo "Tes mots de passe sont différents, bah alors on devient sénile";
        }
    }
    public function email()
    {
       $email->_email;

    if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $email))
    {
        echo "L'adresse " .$email . " est valide!";
    }
    else
    {
        echo "L'adresse " . $email . " n'est pas valide, c'est chaud d'oublié son adresse mail quand même";
     
    }  
    }
    public function envoyerEMail($titre, $message)
    {
        mail($this->email, $titre, $message);

}
}
    If (isset($_POST['identifiant'])) {
    	$temps = 365*24*3600;

    	setcookie ("identifiant", $_POST['identifiant'], time() + $temps);

    	function redirection($url){
    		if (headers_sent()){
    		print('<meta http-equiv="refresh" content="0;URL='.$url.'">');
    		}
    		else {
    		header("Location: $url");
    		}
    	}
    	redirection ('index.php');
    }
?>