<?php 

require_once 'db.php';



$viandes = ["agneau","veau","dinde"];
$sauces = ["blanche", "harissa","algerienne"];

if(
    !empty($_GET['id'])
&&  ctype_digit($_GET['id']) // ctype_digit c'est pour verifier que c'est un int   
){

//afficher un seul kebab par son id

$id = $_GET['id'];

$sql = "SELECT * FROM kebabs WHERE id = '$id'";

$resultat = mysqli_query($maConnexion, $sql);

$kebab = $resultat->fetch_assoc();

}else{

//sinon, je trouve tous les kebabs

$afficher = "SELECT * FROM kebabs";

$kebabs = mysqli_query($maConnexion, $afficher);
}
?>
