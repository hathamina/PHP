<?php 

require_once 'logique.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://bootswatch.com/5/sketchy/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>kebabs</title>
</head>
<body>
<nav class="navbar navbar-expand-lg mb-5">
        <a href="index.php">kebab</a>
</nav>
<h1></h1>
<div class="container">
    
        <hr>
    <h2>kebab <?= $kebab['garniture']?></h2>
    
    <p>viande : <?= $viandes[$kebab['viande']-1] ?></p>
    <!-- dans la page logique on a creer un tableau viandes -->

    <p>sauce:  <?= $sauces[$kebab['sauce']-1] ?></p>

    <!-- pour afficher les cercle de difficulte -->
    <div class="row">

        <?php for($i=0; $i<5 ; $i++) { ?>

            <div class="cercle<?php if($kebab['difficulte']>$i){ echo " plein";} ?>"></div>

            <!-- bouton modifier -->
        <?php } ?>

        <input class="btn btn-dark" type="submit" name="modif" value="modifier">
</div>

    
</body>
</html>