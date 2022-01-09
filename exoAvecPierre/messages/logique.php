<?php



// $messages= [
//     [
//         "auteur"=>"Luc",
//         "description"=>"salut"
//     ],
//     [
//         "auteur"=>"Patricia",
//         "description"=>"je sais pas quoi ecrire"
//     ],
//     [
//         "auteur"=>"Anna",
//         "description"=>"moi je sais"
//     ],
//     [
//         "auteur"=>"Robby",
//         "description"=>"ce matin j'ai mangé une pomme"
//     ],
// ];
///////////////////////
// SE CONNECTER
///////////////////////
// il faut enter les informations qu'on a utilisé dans la base de donnée et les stocké dans des variables 
$hote = 'localhost'; 
$username = 'amina';
$password = '*1989*';
$basseDeDonnee = 'messages';

// pour se connecter a la base de donnée il faut utiliser la methode Mysqli_connect

 
$maConnection = mysqli_connect($hote, $username, $password, $basseDeDonnee);

// pour tester la connection si on est bien connecter 
// if($maConnection){
//     echo "bine connecter";
// }


//mieu de laisser ce teste pour voir les erreurs
if(!$maConnection){
    echo "tu as un problème";
}

/////////////////////////////////////
// REQUET SQL 
////////////////////////////////////


if(
    isset($_GET['id'])
&& !empty($_GET['id'])
){
 
    //on cree une variable et on donne la valeur false
    $modeEdition = false;
    if(isset($_GET['modif'])){
        $modeEdition=true;
    }

    $id=htmlspecialchars($_GET['id']);

    $AfficherUnMessage = "SELECT messages.id, messages."

}





// une requete sql
$maRequete = "SELECT * FROM messages";


// elle nous envoi si la requet envoyer avec succer ou pas
$messages = mysqli_query($maConnection, $maRequete);

?>