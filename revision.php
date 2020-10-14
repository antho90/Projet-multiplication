
<?php

$pagetitle = "Révisions";
require_once "header.php";
?>
<section class="mrg-top1">
<form class="text-center police fs_rev" method="POST" action="revision.php">
Voulez-vous réviser une ou plusieurs tables de multiplication ?
<select name="choix">
    <option value="1">Une seule</option>
    <option value="2">Plusieur</option>
  </select>
  <button type="submit" class="btn btn-primary">Choisir</button>

</form>






<?php if (!empty($_POST) && isset($_POST["choix"] ) && $_POST['choix']==1): ?>
   <h3 class="text-center police ">Choisissez un chiffre entre 1 et 10 : </h3>  
         <form class=text-center method="POST" action="revision.php">
             <input type="number" name="chiffre" placeholder="entre 1 et 10">

             <button type="submit" class="btn btn-primary police">Choisir</button>
          </form>



<?php elseif (!empty($_POST) && isset($_POST["choix"] ) && $_POST['choix']==2): ?>

<div class="text-center police fs_rev">
    Choisissez les tables que vous voulez réviser :
    <a href="plusieurs_tables.php" target=""> <input type="button" class="btn btn-primary" value="Choisir Tables"> </a>

</div>


<?php endif ?>


<div class="text-center police fs_table">
<?php if (!empty($_POST) && isset($_POST["chiffre"] )&& $_POST['chiffre'] <=10 ): ?>
  <?php $i = $_POST['chiffre'] ; 
       
     Echo 'Table de multiplication de '.$i.'<br>';
     for ($j = 1; $j <= 10; $j++)
     {
         echo $i.' x '.$j.' = '.$i*$j.'<br>';
     }
     ?>

    <?php elseif (!empty($_POST) && isset($_POST["chiffre"] )&& $_POST['chiffre']>10): ?>
    <div class=red>Chiffre trop grand! Choisissez un chiffre entre 1 et 10 </div>
    
    <?php endif ?>
    
    
 </div> 

    </section>

 