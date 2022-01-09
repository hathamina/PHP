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
    <?php foreach($kebabs as $kebab){ ?>
        <hr>
    <h2>kebab <?= $kebab['garniture']?></h2>
    
    <p>viande : <?= $viandes[$kebab['viande']-1] ?></p>
    <!-- dans la page logique on a creer un tableau viandes -->

    <p>sauce:  <?= $sauces[$kebab['sauce']-1] ?></p>

    <!-- pour afficher les cercle de difficulte -->
    <div class="row">

        <?php for($i=0; $i<5 ; $i++) { ?>

            <div class="cercle<?php if($kebab['difficulte']>$i){ echo " plein";} ?>"></div>

        <?php } ?>

        <!-- le bouton voir un kebab -->
<!-- 1- on doit fair copier coller de cette page et on va se derigé vers elle grace aux lien  -->
     <a href="kebab.php?id=<?= $kebab['id'] ?>" class="btn btn-dark">voir ce kebab</a>
    <hr>
    <?php } ?>
</div>

    
</body>
</html>