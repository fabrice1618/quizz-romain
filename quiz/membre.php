<?php session_start(); ?>
<?php include("template/head.php");?>
<?php include("template/navbardeco.php");?>
<body>

<?php
    

    $Login = $_SESSION['login'];
?>
<h2><?php
    if(date("H")<18){

     echo 'Bonjour et bienvenue '.$Login;

    }else{

      echo 'Bonsoir et bienvenue '.$Login;

    }

?>
</h2>
</div>
<center>
    <div class="quiz1"><strong><h1>PROGRAMMATION</h1></strong>
    <p>vous avez 4 modules informatique a valider pour avoir votre attestation de </br>réussite bonne chance ! </p>
</div>
<div class="card core" id="thematique" style="width: 18rem;">
  <div class="card-body">
    
    <h2 id="lien"><a href="question.php" class="card-link">Php</a></h2>
    
  </div>
</div>

<div class="card core" id="thematique" style="width: 18rem;">
  <div class="card-body">
    
    <h2 id="lien"><a href="#" class="card-link">Html css</a></h2>
    
  </div>
</div>

<div class="card core" id="thematique" style="width: 18rem;">
  <div class="card-body">
    
    <h2 id="lien"><a href="#" class="card-link">Java</a></h2>
  </div>
</div>

<div class="card core" id="thematique" style="width: 18rem;">
  <div class="card-body">
    
    <h2 id="lien"><a href="#" class="card-link">Javascript</a></h2>
  </div>
</div>
</center>
</body>
<?php include("template/footer.php");?>

