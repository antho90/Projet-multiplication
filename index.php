   
    <?php

     $pagetitle = "Accueil";
     require_once "header.php";
?>
       <div class=" mrg-top police">     
    <h1 class=text-center>Révision des tables de multiplication </h1>
    <p class=text-center>Ce site vous permettra de réviser les tables de multiplication de 1 à 10 et de vous exercer grace à des exercices.<br></p>
</div> 
      <div class='text-center police fs_table'> 
          <?php $i = rand(1,10); ?>
         
         <?php Echo 'Table de multiplication de '.$i.'<br>';
         for ($j = 1; $j <= 10; $j++)
         {
             echo $i.' x '.$j.' = '.$i*$j.'<br>';
         }


         ?>
