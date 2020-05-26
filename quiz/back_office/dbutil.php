<?php

require_once('dbconfig.php');


function openDatabase()
{
    global $bdd;

    try {
        //connexion bdd
        $bdd = new PDO ( "mysql:host=".SERVERNAME.";dbname=".DBNAME, USERNAME, PASSWORD );
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION) ;
        
    } catch (PDOException $erreur) {
        echo $erreur.' -- '.$erreur->getMessage();
    }
}

function closeDatabase()
{
    global $bdd;

    $bdd = null;
}