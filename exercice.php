<?php

$pagetitle = "Exercices";
require_once "header.php";
?>


<section class="mrg-top1">
<form class="text-center police fs_rev" method="POST" action="exercice.php">
Choisissez votre exercice : 
<select name="choix">
    <option value="1">Multiplication hazard</option>
    <option value="2">Choix de multiplication</option>
  </select>
  <button type="submit" class="btn btn-warning">Choisir</button><br><br>

</form>

<?php if (!empty($_POST) && isset($_POST["choix"] ) && $_POST['choix']==1): ?>
   <h3 class="text-center police ">Voici 5 vos multiplications! Bonne chance! : </h3>  


           <div class='text-center police fs_table'> 

                   <?php 
                   $i = rand(1,10); 
                   $j = rand(1,10); 
                   $f=null;
          
                   $exo = $i.' x '.$j.' = <br>'; 
                   for ($f = 1; $f <= 1; $f++) {
                   echo $exo; 
                   } 
         
                   ?>
                           <form class=text-center method="POST" action="exercice.php">
                     <input type="number" name="reponse" placeholder="Votre réponse">

                     <button type="submit" class="btn btn-success police">Valider</button>
                   </form>

                   <?php 
                   $i = rand(1,10); 
                   $j = rand(1,10); 
                   $f=null;
          
                   $exo = $i.' x '.$j.' = <br>'; 
                   for ($f = 1; $f <= 1; $f++) {
                   echo $exo; 
                   } 
         
                   ?>
                           <form class=text-center method="POST" action="exercice.php">
                     <input type="number" name="reponse" placeholder="Votre réponse">

                     <button type="submit" class="btn btn-success police">Valider</button>
                   </form>

                   <?php 
                   $i = rand(1,10); 
                   $j = rand(1,10); 
                   $f=null;
          
                   $exo = $i.' x '.$j.' = <br>'; 
                   for ($f = 1; $f <= 1; $f++) {
                   echo $exo; 
                   } 
         
                   ?>
                           <form class=text-center method="POST" action="exercice.php">
                     <input type="number" name="reponse" placeholder="Votre réponse">

                     <button type="submit" class="btn btn-success police">Valider</button>
                   </form>

                   <?php 
                   $i = rand(1,10); 
                   $j = rand(1,10); 
                   $f=null;
          
                   $exo = $i.' x '.$j.' = <br>'; 
                   for ($f = 1; $f <= 1; $f++) {
                   echo $exo; 
                   } 
         
                   ?>
                           <form class=text-center method="POST" action="exercice.php">
                     <input type="number" name="reponse" placeholder="Votre réponse">

                     <button type="submit" class="btn btn-success police">Valider</button>
                   </form>

                   <?php 
                   $i = rand(1,10); 
                   $j = rand(1,10); 
                   $f=null;
          
                   $exo = $i.' x '.$j.' = <br>'; 
                   for ($f = 1; $f <= 1; $f++) {
                   echo $exo; 
                   } 
         
                   ?>
                           <form class=text-center method="POST" action="exercice.php">
                     <input type="number" name="reponse" placeholder="Votre réponse">

                     <button type="submit" class="btn btn-success police">Valider</button>
                   </form>

        <?php 
                      
             if (!empty($_POST) && isset($_POST["reponse"] )&& $_POST['reponse'] <=100 ); 
             $rep=$_POST["reponse"];
             $res = $i*$j;
                         if ($rep==$res){
                              return true;
                              }elseif ($rep!=$res){
                              return false;
                              }
                              
                       var_dump($_POST)
          ?>
                      

          <?php elseif (!empty($_POST) && isset($_POST["choix"] ) && $_POST['choix']==2): ?>

<div class="text-center police fs_rev">
        Choisissez une table pour vous exercer :
       <a href="choix-multiplication.php" target=""> <input type="button" class="btn btn-warning" value="Choisir tables"> </a>

</div>


<?php endif ?> 






