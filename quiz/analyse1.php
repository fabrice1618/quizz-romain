<?php





//recuperation des données saisies en html
$Login = $_POST["login"];
$Motdepasse = $_POST["password"];

//cryptage mdp
$grain='8h!6./?£*oµ5%z+°ù²&&|G5';
$mdpcrypte = sha1(sha1($Motdepasse).$grain);

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
    foreach($bdd->query('SELECT login_user,mdp_user FROM utilisateur WHERE login_user="'.$Login.'" AND mdp_user="'.$mdpcrypte.'" ')as $row)
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
    header('location:membre.php');
} else header('location:index.php');

echo 'bonjour '.$Login.'<br/>';
$bdd = null;
}

catch (PDOException $erreur) {
    echo $erreur.' -- '.$erreur->getMessage();
}


