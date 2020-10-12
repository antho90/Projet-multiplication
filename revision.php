
<?php

$pagetitle = "Révision tables multiplication";
require_once "header.php";
?>

<form method="GET" action="revision.php">
Voulez-vous réviser une ou plusieur tables de multiplication ?
<select name="choix">
    <option value="1">Une seule</option>
    <option value="2">Plusieur</option>
  </select>
  <button type="submit">Choisir</button>

</form>

<?php if ($_GET['choix']==1): ?>
   Choisissez un chiffre entre 1 et 10 :   
         <form method="GET" action="revision.php">
             <input type="number" name="chiffre" placeholder="entre 1 et 10">
             <button type="submit">Choisir</button>
          </form>


<?php elseif ($_GET['choix']==2): ?>
    Choisissez les tables que vous voulez réviser :

    <form method="GET" action="revision.php">
             <input type="number" name="chiffre" placeholder="entre 1 et 10">
    </form>
    <form method="GET" action="revision.php">
             <input type="number" name="chiffre" placeholder="entre 1 et 10">
    </form>
    <form method="GET" action="revision.php">
             <input type="number" name="chiffre" placeholder="entre 1 et 10">
    </form>
    <form method="GET" action="revision.php">
             <input type="number" name="chiffre" placeholder="entre 1 et 10">
    </form>

    <button type="submit">Choisir</button>


<?php endif ?>