
<?php

$pagetitle = "Révision tables multiplication";
require_once "header.php";
?>

<form class=text-center method="POST" action="revision.php">
Voulez-vous réviser une ou plusieur tables de multiplication ?
<select name="choix">
    <option value="1">Une seule</option>
    <option value="2">Plusieur</option>
  </select>
  <button type="submit" class="btn btn-primary">Choisir</button>

</form>


<?php var_dump($_POST); if ($_POST['choix']==1): ?>
   Choisissez un chiffre entre 1 et 10 :   
         <form method="POST" action="revision.php">
             <input type="number" name="chiffre" placeholder="entre 1 et 10">

             <button type="submit" class="btn btn-primary">Choisir</button>
          </form>

<?php elseif ($_POST['choix']==2): ?>
    Choisissez les tables que vous voulez réviser :

    
    
    <?php for ($i = 1; $i <= 10; $i++) : ?>

<div class="form-check form-check-inline">

    <input class="form-check-input" name="check<?= $i ?>" type="checkbox" value="<?= $i ?>" id="check<?= $i ?>" <?php if (!empty($_POST) && isset($_POST["check$i"]) && $i === intval($_POST["check$i"])) echo "checked"; ?>>

    <label class="form-check-label" for="check<?= $i ?>">
        <?= $i ?>
    </label>
</div>

<?php endfor; ?>
<button type="submit" class="btn btn-primary">Choisir !</button>
</div>
</form>

<?php endif ?>


<?php if ($_POST['chiffre'] <=10 ): ?> 
  <?php $i = $_POST['chiffre'] ; 
       
     Echo 'Table de multiplication de '.$i.'<br>';
     for ($j = 1; $j <= 10; $j++)
     {
         echo $i.' x '.$j.' = '.$i*$j.'<br>';
     }
     ?>

    <?php elseif ($_POST['chiffre']>10): ?>
    Chiffre trop grand! Choisissez un chiffre entre 1 et 10
      
    <?php endif ?>
                