<?php

$pagetitle = "Exercices";
require_once "header.php";
?>
<section class="mrg-top1">
<div class="container">
    <form method="post">
        <div class="form-group police fs_rev text-center">

             Choisissez une table pour vous exercer :<br><br>
            <?php for ($i = 1; $i <= 10; $i++) : ?>
               
               
                <div class="form-check form-check-inline">

                    
                    <input class="form-check-input" name="check[]" type="checkbox" value="<?= $i ?>" id="check<?= $i ?>" <?php if (!empty($_POST) && isset($_POST["check"]) && in_array((string)$i, $_POST["check"])) echo "checked"; ?>>

                   
                    <label class="form-check-label" for="check<?= $i ?>">
                        <?= $i ?>
                    </label>
                </div>

              
            <?php endfor; ?>
            <button type="submit" class="btn btn-warning">Choisir !</button><br><br>
        
    </form>

    <h3 class="text-center police ">Voici votre multiplication! Bonne chance! : </h3>  


           <div class='text-center police fs_table'> 
    <?php
    if (!empty($_POST) && isset($_POST["check"])) :

        foreach ($_POST["check"] as $value) :

            $table = (int)$value;
        
                   $i = $table; 
                   $j = rand(1,10); 
                   $f=null;
          
                   $exo = $i.' x '.$j.' = <br>'; 
                   for ($f = 1; $f <= 1; $f++) {
                   echo $exo; 
                   } 
        endforeach;
    endif;
    ?>                   
                           <form class=text-center method="POST" action="choix-multiplication.php">
                     <input type="number" name="reponse" placeholder="Votre réponse">
 
                            </form>
                   <button type="submit" class="btn btn-success police">Valider</button>
          
                               <?php
                                   $res=$i*$j; 
                                   $rep = $_POST["reponse"];
                                   if(!empty($_POST) && isset($_POST["reponse"] )):
                                        
                                        {
                                        
                                       if ($rep===$res){
                                          echo "Bonne réponse!";
                                        }
                                        else{

                                          echo "Mauvaise réponse!";
                                        }
                                        }
                                    endif;
                                    var_dump($rep);   
                                    
                               ?>

            </div> 
</div>
</section>
