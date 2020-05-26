<?php
// Travail personnel resoudre la faille CSRF :)
//https://openclassrooms.com/fr/courses/2091901-protegez-vous-efficacement-contre-les-failles-web/2863569-la-csrf

require_once('dbutil.php');
require_once('questionModel.php');


print_r($_POST);
print_r($_GET);


// Connexion BDD
$bdd = null;
openDatabase();

// Nul coalesce operator
/*
if ( ! isset($_POST['action'])) {
    $sAction = 'index';
} else {
    $sAction = $_POST['action'];
}
*/
$sAction = $_GET["action"] ?? 'index';

switch ($sAction) {
    case 'index':
        break;
    case 'create':
        // Attention XSS
        $Label = htmlentities( $_POST["create_label"] );
        questionModelCreate($Label);
        break;
    case 'update':
        $Id = $_POST["upd_id"];
        $Label = htmlentities( $_POST["label"] );
        questionModelUpdate( $Id, $Label );
        break;
    case 'delete':
        $Id = $_POST["del_id"];
        questionModelDelete($Id);
        break;
                            
    default:
        break;
}


// Action -> index
$donnees = questionModelIndex();

session_start();

include("./template/head_back.php");
include("../template/navbardeco_back.php");
?>

<div class="container-fluid mt-4 mb-4">
    <div class="row justify-content-center">
        <div class="col-12">
            <form action="index.php?action=create" method="post">
                <input type="text" name="create_label"></input>
                <button type="submit">Créer une nouvelle question</button>
            </form>
        </div>
    </div>
</div>

<?php 
    foreach($donnees as $aQuestion) {
        afficheQuestion($aQuestion['id'], $aQuestion['label']);
    }

    closeDatabase();

function afficheQuestion( $nId, $sQuestion )
{
    echo('
    <div class="container mb-2 mt-2 blanc">
    <div class="row mb-4">
        <div class="col-12">
            '.$nId.' '.$sQuestion.
        '</div>
    </div>
    <div class="row">
        <div class="col-6">
            <form action="index.php?action=delete" method="post">
                <button type="submit" name="del_id" value="'.$nId.'">Supprimer</button>
            </form>
        </div>
        <div class="col-6">
            <form action="index.php?action=update" method="post">
                <input type="text" name="label"></input>
                <button type="submit" name="upd_id" value="'.$nId.'">Modifier</button>
            </form> 
        </div>
    </div>
</div>
');

}
