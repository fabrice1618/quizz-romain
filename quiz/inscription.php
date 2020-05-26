<?php session_start(); ?>
<?php include("template/head.php");?>
<nav class="navbar navbar-light bg-dark justify-content-between">
<a href="http://localhost/quiz/index.php"><img class="navbar-brand"src="img/quiz.png" height="80px"></a>
  <form class="form-inline">
    
    <h2 class="title">QUIZphoto</h2>
    </br></br>
   

  </form>
</nav>
<script> $ . notifier ( "Accès accordé" , "succès" ); </script>

<?php 
/*$message='inscription reussi';if(!empty($message)) echo $message; */?>
<body>
<center><h2 id="succes"></h2></center>
    <div class="row">
        <div class="col" id="inscr">
        <h2>Inscription</h2>
            <form name="inscription" action="analyse.php" method="post" onSubmit="return verif()">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nom</label>
                    <input  name="nom" type="nom" class="form-control"> 
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Prénom</label>
                    <input name="prenom" type="prenom" class="form-control"> 
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Login</label>
                    <input  name="login" type="login" class="form-control"> 
                </div>
                    <div class="form-group">
                    <label for="exampleInputPassword1">Mot de passe</label>
                    <input  name="password" type="password" class="form-control" id="exampleInputPassword1">
                </div>

                <button type="submit" class="btn btn-primary">VALIDER</button>
            </form>
            
        </div>
        
      <div class="col" id="inscr">
          <h2>Connexion</h2>
            <form action="analyse1.php" method="post">
                <div class="form-group">
                    <label for="exampleInputEmail1">Login</label>
                    <input  name="login" type="login" class="form-control"> 
                </div>
               
                <div class="form-group">
                    <label for="exampleInputPassword1">Mot de passe</label>
                    <input  name="password" type="password" class="form-control" id="exampleInputPassword1">
                </div>
                
                <button type="submit" class="btn btn-primary">Se connecter</button>
            </form>
        </div>
    </div> 
    <script src="script.js"></script>

<script src="notify.js"></script>
</body>
<?php include("template/footer.php");?>