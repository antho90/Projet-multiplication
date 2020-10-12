
<?php

$pagetitle = "Révision tables multiplication";
require_once "header.php";
?>


<?php if ($_GET['choix']="1"): ?>
   solo    

<?php elseif ($_GET['choix']="2"): ?>
    plusieur

    <?php endif ?>


<form method="GET" action="revision.php">
Voulez-vous réviser une ou plusieur tables de multiplication ?
<select name="choix">
    <option value="1">Une seule</option>
    <option value="2">Plusieur</option>
  </select>
  <button type="submit">Choisir</button>

</form>