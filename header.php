<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title><?=$pagetitle?></title>
</head>

<body> 
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top police">
        <a class="navbar-brand" href="#">Révision multiplication</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav  mr-auto mt-2 mt-lg-0">
                <li class="nav-item <?php if ($pagetitle === "Accueil") echo 'active' ?>">
                    <a class="nav-link" href="index.php">Accueil <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item <?php if ($pagetitle === "Révisions") echo 'active' ?>">
                    <a class="nav-link" href="revision.php">Révisions</a>
                </li>
                <li class="nav-item <?php if ($pagetitle === "Exercices") echo 'active' ?>">
                    <a class="nav-link" href="exercice.php">Exercices</a>
                </li>
            </ul>
            
        </div>
    </nav>
 
  
</body>   
</html>