<?php
require_once('dbutil.php');


//recuperation des données saisies en html
$Login = $_POST["login"];
$Motdepasse = $_POST["password"];

//cryptage mdp
$grain='fqe654f5sefq"eijçe"kdoqjef165453gheouER3D¨D¨QK4156DHFGBJmk2165652skskzojsJDUGR';
$mdpcrypte = sha1(sha1(sha1($Motdepasse).$grain));

openDatabase();

try {

    //requete sql
    foreach($bdd->query('SELECT admin_user, admin_password FROM administrateur WHERE admin_user="'.$Login.'" AND admin_password="'.$mdpcrypte.'" ')as $row)
{
    $Login = $row[0];
    

//header("location:inscr.html");   
}   

if ($Login !=null) 
{

    session_start();
    $_SESSION['connect']=0;
    $_SESSION['login']=$Login;
    
    $bdd = null; 
    header('location:gestion_back.php');
} else header('location:index.php');

/*
echo 'bonjour '.$Login.'<br/>';
$bdd = null;
*/

}

catch (PDOException $erreur) {
    echo $erreur.' -- '.$erreur->getMessage();
}