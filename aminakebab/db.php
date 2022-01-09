<?php 

$utilisateur = "kebab";
$hote = "localhost";
$mdp = "1989";
$bdd = "aminakebab";


$maConnexion = mysqli_connect($hote, $utilisateur, $mdp , $bdd);

if(!$maConnexion){
    echo "tu as un probleme";
} 

if ($maConnexion){
    echo "ok";
}

?>