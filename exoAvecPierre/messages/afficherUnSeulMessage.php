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
   
    <h1 class="m-x">voici le message </h1>


    <div class="container d-flex  justify-content-between">

        <div >
            <h3 style="color:teal"><?php echo $message['auteur'] ?></h3>
            
            <?php if($modeEdition){ ?> 

                <form action="updateMessage.php" method="post">
                    <textarea name="description" id="" cols="30" rows="10">
                        <?= $message['description'] ?>
                    </textarea>

                    <button name="id" value="<?= $message['id'] ?>" class="btn btn-success">Enregistrer les modifications</button>
                </form>

            <?php }else{ ?>

                <p><?php echo $message['description'] ?></p>

            <?php } ?>

        </div>

        <div>
            <form action="deleteMessage.php" method="POST">
                <button type="submit" class="btn btn-danger" name="supp" value="<?php echo $message['id']?>"> <strong>X</strong></button>
            </form>

            <form action="modif.php" method="$_GET">
                <button type="submit" class="btn btn-dark" name="modif" value="<?= $message['id']?>">modifier</button>
            </form>
        </div>
           
    </div>
</body>
</html>

