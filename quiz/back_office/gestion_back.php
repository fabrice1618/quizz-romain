<?php

//parametre du srv bdd
$servername = 'localhost';
$dbname = 'quiz'; // nom de base de bdd
$user = 'root'; // utilisateur de la bdd
$pass = ''; // mot de passe vide


try {

    //connexion bdd
    $bdd = new PDO ("mysql:host=$servername;dbname=$dbname",$user,$pass) ;
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION) ;

}

catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

 //requete sql
    $reponse = $bdd->query('SELECT * FROM questions'); ?>

<?php session_start(); ?>
<?php include("./template/head_back.php");?>
<?php include("../template/navbardeco_back.php");?>

<div class="container-fluid mt-4 mb-4">
    <div class="row justify-content-center">
        <div class="col-12">
            <form action="create_question.php" method="post">
                <input type="text" name="create_label"></input>
                <button type="submit">Créer une nouvelle question</button>
            </form>
        </div>
    </div>
</div>



<?php while ($donnees = $reponse->fetch())
{ ?>

<div class="container mb-2 mt-2 blanc">
    <div class="row mb-4">
        <div class="col-12">
            <?php echo $donnees['id']; ?>. <?php echo $donnees['label']; ?>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <form action="delete_question.php" method="post">
                <button type="submit" name="del_id" value="<?php echo $donnees['id']; ?>">Supprimer</button>
            </form>
        </div>
        <div class="col-6">
            <form action="update_question.php" method="post">
                <input type="text" name="label"></input>
                <button type="submit" name="upd_id" value="<?php echo $donnees['id']; ?>">Modifier</button>
            </form> 
        </div>
    </div>
</div>
    



       

<?php } ?>