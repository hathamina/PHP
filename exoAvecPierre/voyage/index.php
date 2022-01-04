<?php
  require_once 'logique.php';
//   var_dump($voyages)
//?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>voyages2000</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-warning mb-5">
   

        <a href="index.php" class="navbar-brand">Voyage 2000</a>
        <ul class="navbar-nav me-auto">
            <li class="nav-item">
                  <!-- si connecter est true on affiche le bouton connecter sinon on affiche le formulaire -->
                  <?php if($isLoggedIn){ ?>

                    <form method="POST">
                       <button type="submit" name="logOut">déconnecter</button>
                    </form>

                <?php }else{ ?>

                     <form method="POST">
                        <input type="text" name="username" placeholder="Utilisateur">
                        <input type="text" name="password" placeholder="Mot de passe">
                        <input class="btn btn-success" type="submit" value="Go">  
                    </form> 

                <?php } ?>
            </li>
        </ul>
    </nav>


  
    <?php foreach ($voyages as $voyage) { ?>
       
    <div style="background-image:url('images/<?= $voyage['image'] ?> ')" 
         class="destination row m-5 flex-direction-column align-items-center justify-content-center">

    <h1><?= $voyage['destination'] ?></h1>

    <h2 style="color:red"> <?php if($isLoggedIn == true){echo $voyage['prix'] * 0.8;} else { echo $voyage['prix']; } ?> €</h2>
    <!-- si connecter est true(l'utilisateur est connecté) donc on affiche le prix avec une reduction de 20% sinon on affiche le prix sans reduction  -->
    <h3><?= $voyage['duree'] ?> jours</h3>
    <h3>pour <?= $voyage['personnes'] ?> voyageurs</h3>
    </div>

    <?php } ?>

    
</body>
</html>