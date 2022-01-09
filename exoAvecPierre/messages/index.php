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

        <form action="createMessage.php" method="POST">
            <div class="d-flex flex-column align-items-center justify-content-center">
                <input type="text" name="auteur" placeholder="Votre nom">
                <textarea name="description" cols="25" rows="3" placeholder="Votre Message"></textarea>
                <button type="submit" class="btn btn-success">Poster</button>
            </div>

        </form>

    </div>

    <div class="container">

    <?php foreach($messages as $message){ ?>
      
            <hr>
            <h3 style="color:teal"><?php echo $message['auteur'] ?></h3>
            <p><?php echo $message['description'] ?></p>
            <form action="deleteMessage.php" method="POST">
                <button type="submit" class="btn btn-danger" name="supp" value="<?php echo $message['id']?>"> <strong>X</strong></button>
            </form>
            <a href="afficherUnSeulMessage.php?id=<?= $message['id'] ?>" class="btn btn-light">voir le message</a>
            <hr>
        
    <?php } ?>

    </div>
</body>
</html>