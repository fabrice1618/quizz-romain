<?php


// session_destroy();
// echo 'deconnecter';
// /*header('Location:../index.php');*/
// exit;
?>

<?php
// Debut de la session
session_start();
// Suppression des variables de session et de la session
$_SESSION = array();
session_destroy();
// Suppression des cookies de connexion automatique
setcookie('login', '');
setcookie('password', '');
header("location: ./index.php");
 ?>
