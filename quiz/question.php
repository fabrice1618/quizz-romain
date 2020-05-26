<?php session_start(); ?>
<?php include("template/head.php");?>
<?php include("template/navbardeco.php");?>

  </head> 
  <body>
  <div class="row">
        <div class="col md-4" id="cc">
    <form name="question">
      <fieldset id="Q1">
        <p>1. ereg("^a", "abcdef") renvoie</p>        
       <input name="Q1-f" value="0" type="radio"> 
        A. une erreur<br />  
        <input name="Q1-f" value="0" type="radio"> 
        B.  bcdef<br />  
        <input name="Q1-f" value="1" type="radio"> 
        C. true</br>
        <input name="Q1-f" value="0" type="radio"> 
        D. false
        <br /> 
      </fieldset>

      <br /> 
      <fieldset id="Q2">
        <p style="color:blue";>2. Que fait la fonction stripslashes() ?</p>        
        <input name="Q2-f" value="0" type="radio"> 
        A. supprime les slashs d'une chaine<br />  
        <input name="Q2-f" value="0" type="radio"> 
        B.  supprime les guillemets d'une chaine.<br />  
        <input name="Q2-f" value="1" type="radio"> 
        C. supprime les antislashs d'une chaine</br>
        <input name="Q2-f" value="0" type="radio"> 
        D. ajoute des caractères d'échappement à une chaine
        <br />
      </fieldset>
      <br />

      <fieldset id="Q3">
        <p>3. Quels sont les séparateurs utilisés par la méthode GET pour ajouter les données à l'URL ?</p>        
        <input name="Q3-f" value="0" type="radio"> 
        A. "?" Pour séparer l'adresse et "%" pour les données<br /> 
        <input name="Q3-f" value="0" type="radio"> 
        B.  "%" Pour séparer l'adresse et "&" pour les données.<br /> 
         <input name="Q3-f" value="1" type="radio"> 
        C. "?" Pour séparer l'adresse et "&" pour les données</br>
        <input name="Q3-f" value="0" type="radio"> 
        D. "%" Pour séparer l'adresse et ";" pour les données
        <br />
      </fieldset>
</br>
      <fieldset id="Q4">
        <p>4. Après $n = (int) 2.6 quelle est la valeur de $n ?</p>
        
        <input name="Q4-f" value="0" type="radio"> 
        A. .6<br />  
        <input name="Q4-f" value="1" type="radio"> 
        B.  2<br /> 
         <input name="Q4-f" value="0" type="radio"> 
        C. 2.6</br>
        <input name="Q4-f" value="0" type="radio"> 
        D. 3
        <br /> 
      </fieldset>
      <br />

      <fieldset id="Q5">
        <p>5. Dans l'URL, la méthode GET encode les espaces en</p>
        
        <input name="Q5-f" value="0" type="radio"> 
        A. %3D<br /> 
 
        <input name="Q5-f" value="1" type="radio"> 
        B.  +<br /> 
 
        <input name="Q5-f" value="0" type="radio"> 
        C. %</br>
        <input name="Q5-f" value="0" type="radio"> 
        D. &
        <br />
      </fieldset>
      <br />

      <fieldset id="Q6">
        <p>6. Quelle est l'utilité de var_dump() en PHP Objet ?</p>
        
        <input name="Q6-f" value="0" type="radio"> 
        A. sert à émettre une exception<br /> 
 
        <input name="Q6-f" value="1" type="radio"> 
        B.  permet de visualiser les attributs d'une classe<br /> 
 
        <input name="Q6-f" value="0" type="radio"> 
        C. permet de débuguer en créant un dump de la mémoire</br>
        <input name="Q6-f" value="0" type="radio"> 
        D. permet de surcharger une classe
        <br />
      </fieldset>
</br>
<fieldset id="Q7">
        <p>7. Le caractère d'échappement est</p>
        
        <input name="Q7-f" value="0" type="radio"> 
        A. "<br /> 
 
        <input name="Q7-f" value="1" type="radio"> 
        B. \<br /> 
 
        <input name="Q7-f" value="0" type="radio"> 
        C. /</br>
        <input name="Q7-f" value="0" type="radio"> 
        D. #
        <br /> 
      </fieldset>
    </form> 
    </div>
    
    <div class="col md-4" id="cc">
    <form name="question">
    <fieldset id="Q8">
        <p classe='qu'>8. En PHP Orienté Objet, une fonction est appelée</p>
        
        <input name="Q8-f" value="0" type="radio"> 
        A. une classe<br /> 
 
        <input name="Q8-f" value="0" type="radio"> 
        B.  une instance<br /> 
 
        <input name="Q8-f" value="1" type="radio"> 
        C. une méthode</br>
        <input name="Q8-f" value="0" type="radio"> 
        D. un attribut
        <br /><br /> 
      </fieldset>
      <br />

      <fieldset id="Q9">
        <p>9. Comment cacher les messages d'erreurs aux utilisateurs par mesure de sécurité ?</p>
        
        <input name="Q9-f" value="0" type="radio"> 
        A. utiliser throw exception<br /> 
 
        <input name="Q9-f" value="0" type="radio"> 
        B.  utiliser set_error_handler ()<br /> 
 
        <input name="Q9-f" value="1" type="radio"> 
        C. mettre la directive PHP "display_errors" sur off</br>
        <input name="Q9-f" value="0" type="radio"> 
        D. utiliser la fonction set_error()
        <br /> 
      </fieldset>
      <br />

      <fieldset id="Q10">
        <p>10. Comment mettre un commentaire dans du PHP inclus sur une page HTML ?</p>
        
        <input name="Q10-f" value="0" type="radio"> 
        A. {}<br /> 
 
        <input name="Q10-f" value="0" type="radio"> 
        B.  \\<br /> 
 
        <input name="Q10-f" value="1" type="radio"> 
        C. /* */</br>
        <input name="Q10-f" value="0" type="radio"> 
        D. <!-- -->
        <br />
      </fieldset>
</br>
<fieldset id="Q11">
        <p classe='qu'>11. Comment trier un tableau ?</p>
        
        <input name="Q11-f" value="0" type="radio"> 
        A. orderby()<br /> 
 
        <input name="Q11-f" value="0" type="radio"> 
        B. ascending()<br /> 
 
        <input name="Q11-f" value="0" type="radio"> 
        C. asc()</br>
        <input name="Q11-f" value="1" type="radio"> 
        D. sort()
        <br />
      </fieldset>
</br>
<fieldset id="Q12">
        <p classe='qu'>12. On déclare un tableau avec </p>
        
        <input name="Q12-f" value="0" type="radio"> 
        A. dim<br /> 
 
        <input name="Q12-f" value="0" type="radio"> 
        B. table<br /> 
 
        <input name="Q12-f" value="1" type="radio"> 
        C. array</br>
        <input name="Q12-f" value="0" type="radio"> 
        D. tab
        <br /> 
      </fieldset>
</br>
<fieldset id="Q13">
        <p classe='qu'>13. Comment se nomme le fichier de session qui contient toutes les variable de session ?</p>
        
        <input name="13-f" value="0" type="radio"> 
        A. PHPSESSID suivi de l'id<br /> 
 
        <input name="Q13-f" value="1" type="radio"> 
        B. "sess_" suivi de l'id<br /> 
 
        <input name="Q13-f" value="0" type="radio"> 
        C. "tmp_sess_" suivi de l'id</br>
        <input name="Q13-f" value="0" type="radio"> 
        D. le nom correspond à l'id
        <br />
      </fieldset>
</br>

<fieldset id="Q14">
        <p classe='qu'>14. Quelle est l'utilité de throw() en PHP Orienté Objet ?</p>
        
        <input name="Q14-f" value="1" type="radio"> 
        A. à émettre une exception et terminer une méthode<br /> 
 
        <input name="Q14-f" value="0" type="radio"> 
        B. sert de destructeur<br /> 
 
        <input name="Q14-f" value="0" type="radio"> 
        C. à interdire d'étendre la classe</br>
        <input name="Q14-f" value="0" type="radio"> 
        D. à libérer de l'espace mémoire
        <br /><br /> 
      </fieldset>

    </form> 
    </div>
       
      
    <div class="col md-4" id="cc">
    <form name="question">
      
      <br /> 
      
      
      <br />

      <fieldset id="Q15">
        <p>15. session_start() crée un cookie nommé</p>
        
        <input name="Q15-f" value="0" type="radio"> 
        A. SESSION_PHP<br /> 
 
        <input name="Q15-f" value="1" type="radio"> 
        B. PHPSESSID utiliser set_error_handler ()<br /> 
 
        <input name="Q15-f" value="0" type="radio"> 
        C. SESSIONID</br>
        <input name="Q15-f" value="0" type="radio"> 
        D. SESSION_INIT
        <br /> 
      </fieldset>
</br>
<fieldset id="Q16">
        <p classe='qu'>16. A quoi sert la fonction copy() ?</p>
        
        <input name="Q16-f" value="1" type="radio"> 
        A. copier un fichier<br /> 
 
        <input name="Q16-f" value="0" type="radio"> 
        B.  copier un tableau<br /> 
 
        <input name="Q16-f" value="0" type="radio"> 
        C. copier une chaine</br>
        <input name="Q16-f" value="0" type="radio"> 
        D. copier une variable
        <br /><br /> 
      </fieldset>
</br>

<fieldset id="Q17">
        <p classe='qu'>17. unset(tab[1])</p>
        
        <input name="Q17-f" value="0" type="radio"> 
        A. supprime l'intégralité du tableau<br /> 
 
        <input name="Q17-f" value="1" type="radio"> 
        B. supprime la 2ème cellule du tableau<br /> 
 
        <input name="Q17-f" value="0" type="radio"> 
        C. supprime la 1ère cellule du tableau</br>
        <input name="Q17-f" value="0" type="radio"> 
        D. n'existe pas en php
        <br /><br /> 
      </fieldset>
</br>

<fieldset id="Q18">
        <p classe='qu'>18. Quelle instruction affiche "bonjour" ?</p>
        
        <input name="Q18-f" value="1" type="radio"> 
        A. toutes<br /> 
 
        <input name="Q18-f" value="0" type="radio"> 
        B.  echo "bonjour"<br /> 
 
        <input name="Q18-f" value="0" type="radio"> 
        C. echo("bonjour")</br>
        <input name="Q18-f" value="0" type="radio"> 
        D. echo 'bonjour'
        <br /><br /> 
      </fieldset>
</br>
<fieldset id="Q19">
        <p classe='qu'>19. Que contient __FILE__ pendant l'exécution d'un script PHP ?</p>
        
        <input name="Q19-f" value="0" type="radio"> 
        A. les chemin et nom du fichier ouvert avec fopen()<br /> 
 
        <input name="Q19-f" value="1" type="radio"> 
        B. les chemin et nom du fichier script en cours<br /> 
 
        <input name="Q19-f" value="0" type="radio"> 
        C. rien</br>
        <input name="Q19-f" value="0" type="radio"> 
        D. les chemin et nom du fichier ini de PHP
        <br /><br /> 
      </fieldset>
</br>

<fieldset id="Q20">
        <p classe='qu'>20. Que fait die() ?</p>
        
        <input name="Q20-f" value="1" type="radio"> 
        A. sort d'une boucle<br /> 
 
        <input name="Q20-f" value="0" type="radio"> 
        B.  bypasse une erreur<br /> 
 
        <input name="Q20-f" value="0" type="radio"> 
        C. tue un processus</br>
        <input name="Q20-f" value="0" type="radio"> 
        D. arrête le script
        <br /><br /> 
      </fieldset>

    
      <br /><br /> 
      <input value="Score" onclick="getScore(this.form)" type="button">
      <input value="bonne reponse"  onclick="changerCouleur();" type="button">

     
      <br /> 
      
      Votre score est : <span id="score"></span>
    </form> 
    </div>

    </div>
    <script src="script.js"></script>
</body>
<?php include("template/footer.php");?>
