<?php
session_start();
  
    
    $prenom = $_POST['prenomContact'];
    $adresseMail = $_POST['emailContact'];
    $nom = $_POST['nomContact'];

     
    

/* on test si les champ sont bien remplis*/
if(!(empty($_POST['prenomContact']) and !empty($_POST['nomContact']) and !empty($_POST['emailContact']) )) {
    $adresseMail = htmlentities($adresseMail, ENT_QUOTES, "ISO-8859-1"); // le htmlentities() passera les guillemets en entités HTML, ce qui empêchera les injections SQL
           
    try{
        $host ='localhost';
        $port = "3306";
        $db = "utilisateur";
        
            $bdd = new PDO("mysql:host=$host;port=$port;dbname=$db",'root','');
            echo "Vous etes à présent connecté à la bdd";

            $sql= $bdd->prepare("INSERT INTO ajoutContact(prenomContact,nomContact,emailContact) VALUES (?, ?, ?)");
            $sql->execute(array($prenom,$nom,$adresseMail));

            var_dump("Contact ajoutez à la BDD");

            
        } catch (exception $e) {
            die ('Erreur ' .$e->getMessage());
        }
        
    
   
    } 
    
    /* Fin if empty */
    //else {echo "Veuillez saisir tous les champs !"; }

    
  
    
?>