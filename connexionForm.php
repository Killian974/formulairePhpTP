<?php
var_dump($_POST);
/*
Page: connexion.php
*/
session_start(); // à mettre tout en haut du fichier .php, cette fonction propre à PHP servira à maintenir la $_SESSION
$submit = ($_POST['submit']) ;
$motDePasse = $_POST['motDePasse'];
$adresseMail = $_POST['mail'] ;
if(isset($submit)) { 
    // si le bouton "Connexion" est appuyé
    // on vérifie que le champ "Pseudo" n'est pas vide
    // empty vérifie à la fois si le champ est vide et si le champ existe belle et bien (is set)
    if((empty($adresseMail)) ) {
        echo "Le champ adresse mail est vide.";
    } else {
        // on vérifie maintenant si le champ "Mot de passe" n'est pas vide"
        if((empty($motDePasse)) ){
            echo "Le champ Mot de passe est vide.";
        } else {
            // les champs sont bien posté et pas vide, on sécurise les données entrées par le membre:
            $adresseMail = htmlentities($adresseMail, ENT_QUOTES, "ISO-8859-1"); // le htmlentities() passera les guillemets en entités HTML, ce qui empêchera les injections SQL
            $motDePasse = htmlentities($motDePasse, ENT_QUOTES, "ISO-8859-1");
            //on se connecte à la base de données:
            $mysqli = mysqli_connect("localhost","root","","lessonscreen");
            //on vérifie que la connexion s'effectue correctement:
            if(!$mysqli){
                echo "Erreur de connexion à la base de données.";
            } else {
                // on fait maintenant la requête dans la base de données pour rechercher si ces données existe et correspondent:
                $Requete = mysqli_query($mysqli,"SELECT * FROM utilisateurs  WHERE adresseMail = '".$adresseMail."' AND motDePasse = '".hash('sha256', $motDePasse)."'");//si vous avez enregistré le mot de passe en md5() il vous suffira de faire la vérification en mettant mdp = '".md5($MotDePasse)."' au lieu de mdp = '".$MotDePasse."'
                // si il y a un résultat, mysqli_num_rows() nous donnera alors 1
                // si mysqli_num_rows() retourne 0 c'est qu'il a trouvé aucun résultat
                if(mysqli_num_rows($Requete) == 0) {
                    echo "Le pseudo ou le mot de passe est incorrect, le compte n'a pas été trouvé.";
                } else {
                    // on ouvre la session avec $_SESSION:
                    $_SESSION['adresseMail'] = $adresseMail; // la session peut être appelée différemment et son contenu aussi peut être autre chose que le pseudo
                    echo "Vous êtes à présent connecté !";
                    $host  = $_SERVER['HTTP_HOST'];
                    $uri   = "/Projet/html";//rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
                    $extra = 'monEspace.php';
                    setcookie('adresseMail', $adresseMail, time() + 3600, "/", "localhost", false, true); 
                    header("Location: http://$host$uri/$extra");
                    exit;
                    
                }
            }
        }
    }
}
?>