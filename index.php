   
    <?php

     $pagetitle = "Révision tables multiplication";
     require_once "header.php";

    
         $i = rand(1,10); 
     
         Echo 'Table de multiplication de '.$i.'<br>';
         for ($j = 1; $j <= 10; $j++)
         {
             echo $i.' x '.$j.' = '.$i*$j.'<br>';
         }
     

     
