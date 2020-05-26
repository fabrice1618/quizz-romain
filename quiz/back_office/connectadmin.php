<?php





//recuperation des données saisies en html
$Login = $_POST["login"];
$Motdepasse = $_POST["password"];

//cryptage mdp
$grain='fqe654f5sefq"eijçe"kdoqjef165453gheouER3D¨D¨QK4156DHFGBJmk2165652skskzojsJDUGR';
$mdpcrypte = sha1(sha1(sha1($Motdepasse).$grain));

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

echo 'bonjour '.$Login.'<br/>';
$bdd = null;
}

catch (PDOException $erreur) {
    echo $erreur.' -- '.$erreur->getMessage();
}