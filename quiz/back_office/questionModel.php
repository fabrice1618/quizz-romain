<?php


function questionModelCreate( $sQuestion )
{
    global $bdd;


    try {
        //requete sql
        $req = $bdd->prepare('INSERT INTO questions(id, label) VALUES(NULL, :label)');
        $req->execute( array( 'label' => $sQuestion ) );
            
    } catch (PDOException $erreur) {
        echo $erreur.' -- '.$erreur->getMessage();
    }

}

function questionModelRead( $nId )
{
    global $bdd;

    $aQuestion = [];

    return($aQuestion);
}

function questionModelUpdate( $nId, $sQuestion )
{
    global $bdd;

    try {
        $req = $bdd->prepare('UPDATE questions SET label = :label WHERE id=:id ');
        $req->execute( array( 'id' => $nId, 'label' => $sQuestion ) );
        
    } catch (PDOException $erreur) {
        echo $erreur.' -- '.$erreur->getMessage();
    }
    
}

function questionModelDelete($nId)
{
    global $bdd;

    try {
        //requete sql
        $req = $bdd->prepare('DELETE FROM questions WHERE id=":id" ');
        $req->execute( array( 'id' => $nId ) );
        
    } catch (PDOException $erreur) {
        echo $erreur.' -- '.$erreur->getMessage();
    }

}

function questionModelIndex()
{
    global $bdd;

    $aQuestion = array();

    $stmt1 = $bdd->prepare('SELECT * FROM questions');
    if ( $stmt1->execute() ) {
      $aQuestion = $stmt1->fetchAll(PDO::FETCH_ASSOC);
    }

    return($aQuestion);
}