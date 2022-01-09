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

////////////////////////////////////////////////
if (isset($_POST['supp']) 
&& !empty($_POST['supp'])){
 

    $id = $_POST['supp'];
    // c'est pour proteger le systeme d'injection sql
    $id = htmlspecialchars($id);


    $supp = "DELETE FROM messages WHERE id = $id";
   
    $resultatDeMaRequete = mysqli_query($maConnection, $supp);




    header('Location: index.php');
    
};





?>