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
  <button type="submit" class="btn btn-primary">Choisir</button><br><br>

</form>

<?php if (!empty($_POST) && isset($_POST["choix"] ) && $_POST['choix']==1): ?>
   <h3 class="text-center police ">Voici 5 vos multiplications! Bonne chance! : </h3>  


   <div class='text-center police fs_table'> 
          <?php $i = rand(1,10); ?>
          <?php $j = rand(1,10); ?>
          
          <?php $exo = $i.' x '.$j.' = '.$i*$j.'<br>'; ?>
         <?php 
            echo $exo;
        ?><br>
         
         <form class=text-center method="POST" action="exercice.php">
             <input type="number" name="chiffre" placeholder="Votre réponse">

             <button type="submit" class="btn btn-primary police">Valider</button>
          </form>

          <?php elseif (!empty($_POST) && isset($_POST["choix"] ) && $_POST['choix']==2): ?>

<div class="text-center police fs_rev">
    Choisissez les tables que vous voulez réviser :
    

</div>


<?php endif ?>