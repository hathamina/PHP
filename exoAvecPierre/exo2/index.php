<?php 
session_start();
require_once 'logique.php';
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thé Ou Café</title>
    <link rel="stylesheet" href="https://bootswatch.com/5/sandstone/bootstrap.min.css">
    
</head>

<body>

    

<nav class="navbar navbar-expand-lg navbar-dark bg-primary container-fluid">
 
      <ul class="navbar-nav me-auto">
          <li class="nav-item"><a class="nav-link active" href="#">Accueil</a></li>
          <li class="nav-item"><a class="nav-link active" href="http://localhost/PHP/exoAvecPierre/exo2/?boisson=cafe">Café </a></li>
          <li class="nav-item"><a class="nav-link active" href="http://localhost/PHP/exoAvecPierre/exo2/?boisson=the">Thé</a></li>
         
         <?php if ($isloggeIn){ ?>
          <li class="nav-item"><a class="nav-link active" href="http://localhost/PHP/exoAvecPierre/exo2/?boisson=coca">Coca</a></li>

          <a href="" class="btn btn-danger">log out</a>

          <?php }else{ ?>
        </ul>


        <form  method="POST">
        <input type="password" name="passe" id="passe">
        <input type="submit" value="Ok">
      </form>
</nav>

<?php } ?>
<div class="row">

<?=  $pageContente; ?>

</div>



</body>

</html>