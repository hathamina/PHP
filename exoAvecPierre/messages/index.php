<?php
require_once 'logique.php';
// var_dump(($messages))
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://bootswatch.com/5/sketchy/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg mb-5">
        <a href="index.php">Message Board</a>
    </nav>

    <div class="container">

    <?php foreach($messages as $message){ ?>

        <hr>
            <h3 style="color:teal"><?php echo $message['auteur'] ?></h3>
            <p><?php echo $message['description'] ?></p>
        <hr>

    <?php } ?>
</body>
</html>