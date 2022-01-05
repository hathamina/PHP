<?php



$messages= [
    [
        "auteur"=>"Luc",
        "description"=>"salut"
    ],
    [
        "auteur"=>"Patricia",
        "description"=>"je sais pas quoi ecrire"
    ],
    [
        "auteur"=>"Anna",
        "description"=>"moi je sais"
    ],
    [
        "auteur"=>"Robby",
        "description"=>"ce matin j'ai mangé une pomme"
    ],
];
///////////////////////
// SE CONNECTER
///////////////////////
// il faut enter les informations qu'on a utilisé pour ajouter un compte d'utilisateur sur phpMyAdmin et les stocké dans des variable 
$hote = 'localhost'; 
$username = 'amina';
$password = '*1989*';
$basseDeDonnee = 'messages';

// pour se connecter a la base de donnée il faut utiliser la methode Mysqli_connect
// cette methode mysqli_connect nous renvoie un boolean donc il faut la stocké dans une variable pour la reutiliser
 
$maConnection = mysqli_connect($hote, $username, $password, $basseDeDonnee);

// pour tester la connection si on est bien connecter et on a pas de fautes dans les informations qu'on a entrer => on vois le message bien connecter
if($maConnection){
    echo "bine connecter";
}

// mettre ce teste et le laisser pour pouvoir voir si j ai une erreur donc 
//mieu de laisser ce teste pour voir voir quand on aura des fautes 
if(!$maConnection){
    echo "tu as un problème";
}

/////////////////////////////////////
// REQUET SQL 
////////////////////////////////////


// on ecrit une requete sql pour nous renvoyer les donner et on la stock dans une variable 
$maRequete = "SELECT * FROM messages";

// pour envoyer la requete , messages c'est le nome de la table
// mysqli_query sert a envoyer et inserer qlq chose dans la table sql
// elle nous envoi si la requet envoyer avec succer ou pas
$messages = mysqli_query($maConnection, $maRequete);

?>