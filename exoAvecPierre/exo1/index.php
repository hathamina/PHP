<?php
require_once 'logique.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bonne Année</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-warning ">
    <a href="ex1.php">Bonne Année</a>
</nav>

    <form >
    <input type="text" name="nom" id="nom">
    <input type="submit" value="Envoyer">
    </form>

    <h1> Bonne Année <?php echo $prenom?></h1>


</body>
</html>