<?php

try{
$host ='localhost';
$port = "3306";
$db = "utilisateur";

    $bdd = new PDO("mysql:host=$host;port=$port;dbname=$db",'root','');
    echo "Vous etes à présent connecté à la bdd";
    
} catch (exception $e) {
    die ('Erreur ' . $e->getMessage());
}

