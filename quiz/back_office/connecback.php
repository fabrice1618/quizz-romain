    <?php include("./template/head_back.php");?>
    
    <body>
        <h2>Connexion</h2>
    <form action="connectadmin.php" method="post">
        <div class="form-group">
            <h1> Le back office est réservé aux personnes autorisées</h1>
            <label for="exampleInputEmail1">Login</label>
            <input  name="login" type="login" class="form-control"> 
        </div>
               
        <div class="form-group">
            <label for="exampleInputPassword1">Mot de passe</label>
            <input  name="password" type="password" class="form-control" id="exampleInputPassword1">
        </div>
                
        <button type="submit" class="btn btn-primary">Se connecter</button>
        <button  id="conex"class="btn btn-outline-warning my-2 my-sm-0 bg-warning" type="submit"><a href="http://localhost/quiz/index.php">Retour site</a></button>
    </form>
        </div>    
    </body>
    