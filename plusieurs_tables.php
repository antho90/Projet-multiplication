<?php

$pagetitle = "Révisions";
require_once "header.php";
?>
<section class="mrg-top1">
<div class="container">
    <form method="post">
        <div class="form-group police fs_rev text-center">

             Choisissez les tables que vous voulez réviser :<br><br>
            <?php for ($i = 1; $i <= 10; $i++) : ?>
               
               
                <div class="form-check form-check-inline">

                    
                    <input class="form-check-input" name="check[]" type="checkbox" value="<?= $i ?>" id="check<?= $i ?>" <?php if (!empty($_POST) && isset($_POST["check"]) && in_array((string)$i, $_POST["check"])) echo "checked"; ?>>

                    
                    <label class="form-check-label" for="check<?= $i ?>">
                        <?= $i ?>
                    </label>
                </div>

              
            <?php endfor; ?>
            <button type="submit" class="btn btn-warning">Choisir !</button>
        </div>
    </form>
    <?php

   
    if (!empty($_POST) && isset($_POST["check"])) :
        
       
        foreach ($_POST["check"] as $value) :
            
            
            $table = (int)$value;
    ?>
           
            <table class="table table-hover table-light police">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col" class="text-center">Opération</th>
                        <th scope="col" class="text-center">Résultat</th>
                    </tr>
                </thead>
                <tbody class="thead-dark">
                    <?php
                    for ($i = 1; $i <= 10; $i++) :
                        $result = $table * $i; ?>
                        <tr>
                            <td class='text-center'><?= $table ?> x <?= $i ?></td>
                            <td class='text-center'><?= $result ?></td>
                        </tr>
                    <?php endfor; ?>
                </tbody>
            </table>
    <?php endforeach;
    endif; ?>
</div>
</section>


