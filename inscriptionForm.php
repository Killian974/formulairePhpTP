<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>traitement</title>
</head>
<body>
<?php

require "bdd.php";

if(isset($_POST["inscription"])) 
{
    $sexe = htmlspecialchars($_POST["sexe"]);
    $nom = htmlspecialchars($_POST["nom"]);   
    $prenom = htmlspecialchars($_POST["prenom"]);
    $identifiant = htmlspecialchars($_POST["identifiant"]);
    $email = htmlspecialchars($_POST["email"]);
    $date_de_naissance = htmlspecialchars($_POST["date_de_naissance"]);
    $mot_de_passe = password_hash($_POST["mot_de_passe"], PASSWORD_DEFAULT);
    $password2 = password_hash($_POST["password2"], PASSWORD_DEFAULT);

}

    if(empty($sexe) || empty($nom) || empty($prenom) || empty($identifiant) || empty($email) || empty($date_de_naissance) || empty($mot_de_passe) || empty($password2))
    {
        header("Location: formulairePhpTp/Dashboard.php?error=emptyfields&pseudo" .$pseudo. "&email=".$email);
        exit();
    }
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $identifiant))
    {
        header("Location: formulairePhpTp/Dashboard.phperror=invalidmail&identifiant");
        exit();
    }
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
    {
        header("Location: formulairePhpTp/Dashboard.php?error=invalidmail&identifiant=" .$identifiant);
        exit();
    }
    elseif (!preg_match("/^[a-zA-Z0-9]*$/", $identifiant)) 
    {
        header("Location: formulairePhpTp/Dashboard.php?error=invalididentifiant&email=" .$email);
        exit();
    }
    elseif ($_POST["mot_de_passe"] != $_POST["password2"]) 
    {
        header("Location: formulairePhpTp/Dashboard.php?error=motdepassecheck&identifiant=" .$identifiant. "&email=" .$email);
        exit();
    }
    else 
    {
        $sql = "SELECT identifiant FROM inscription WHERE identifiant='$identifiant' OR email='$email'";
        echo "$sql";
    
        
       // if ($resultCheck > 0) 
        {
            header("Location: formulairePhpTp/Dashboard.php?error=pseudotaken&mail=".$email);
            exit();
        }
     //   else 
        {
            $sql= $bdd->prepare("INSERT INTO inscription (sexe, nom, prenom, identifiant, email, date_de_naissance, mot_de_passe) VALUES ($sexe,$nom,$prenom,$identifiant,$date_de_naissance,$email,$mot_de_passe)");
           // echo $sql;
            $req->execute(array($_GET['identifiant'], $_GET['email']));
            if (!$result) 
            {
                header("Location: formulairePhpTp/Dashboard.php?error=invalidpseudo&email=sqlerror2");
                exit();
            }
            else
            {
                header("Location: formulairePhpTp/Dashboard.php");
                exit();
            }
        }

        mysqli_close($e);
    }

?>
</body>
</html>