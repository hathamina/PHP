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





?>