<?php
////SE CONNECTER////
$hote = 'localhost'; 
$username = 'amina';
$password = '*1989*';
$basseDeDonnee = 'messages';

$maConnection = mysqli_connect($hote, $username, $password, $basseDeDonnee);

if(!$maConnection){
    echo "tu as un problème";
}
//recupérer les données entrées dans le formulaire (le message)





if(
    (isset($_POST['auteur']) && !empty($_POST['auteur']))
    &&
    (isset($_POST['description']) && !empty($_POST['description']))
){
 
    $auteur = $_POST['auteur'];
    $description = $_POST['description'];

    // pour que l utilisateur ne peut pas ecrire de html 
    $auteur = htmlspecialchars($auteur);
    $description = htmlspecialchars($description);

    $nouveauMessage =  "INSERT INTO messages (auteur,description) 
                        VALUES ('$auteur' ,'$description')";


   $resultatDeMaRequete = mysqli_query($maConnection, $nouveauMessage);
      
   // pour la redirection a la page acceuil header('location:index.php)
   header("Location: index.php");
}


//$_POST

//se connecter à la base de données

//insérer le nouveau message dans la base de données

// retourner automatiquement sur index

// methode header()










?>