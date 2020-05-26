<?php



//recuperation des données saisies en html
$Nom = $_POST["nom"];
$Prenom = $_POST["prenom"];
$Login = $_POST["login"];
$Motdepasse = $_POST["password"];





//test mot de passe identique

//cryptage
//grain de sel : 
$grain='8h!6./?£*oµ5%z+°ù²&&|G5';
$mdpcrypte = sha1(sha1($Motdepasse).$grain);

//parametre du srv bdd
$servername = 'localhost';
$dbname = 'quiz'; // nom de base de bdd
$user = 'root'; // utilisateur de la bdd
$mdp = ''; // mot de passe vide 

try {

    //echo 'connexion bdd <br/>';
    $bdd = new PDO ("mysql:host=$servername;dbname=$dbname",$user,$mdp) ;
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION) ;

    //echo "Requete insertion\n";
        $bddprepare = $bdd->prepare(
            "INSERT INTO utilisateur (nom_user,prenom_user,login_user,mdp_user)
            VALUES (:Nom, :Prenom, :log, :Mdp)");
        $bddprepare->bindParam(':Nom',$Nom);
        $bddprepare->bindParam(':Prenom',$Prenom);
        $bddprepare->bindParam(':log',$Login);
        $bddprepare->bindParam(':Mdp',$mdpcrypte);
        $bddprepare->execute();

    echo 'insertion bdd reussie <br/>';
    $bdd = null; // destruction de l'objet
    
}
catch (PDOException $erreur) {
    echo $erreur.' -- '.$erreur->getMessage();
}





echo 'Mot de passe crypte : '.$mdpcrypte;



header('location:inscription.php');

