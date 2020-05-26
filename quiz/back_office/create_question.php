<?php

$Label = $_POST["create_label"];


/*echo $Label . $Id;*/

//parametre du srv bdd
$servername = 'localhost';
$dbname = 'quiz'; // nom de base de bdd
$user = 'root'; // utilisateur de la bdd
$pass = ''; // mot de passe vide


try {

    //connexion bdd
    $bdd = new PDO ("mysql:host=$servername;dbname=$dbname",$user,$pass) ;
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION) ;

    //requete sql
    $req = $bdd->prepare('INSERT INTO questions(id, label) VALUES(NULL, :label)');
    $req->execute(array(
	'label' => $Label
	));

    header("location:gestion_back.php");
    
} catch (PDOException $erreur) {
    echo $erreur.' -- '.$erreur->getMessage();
}