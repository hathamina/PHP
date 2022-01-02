<?PHP 
include("commun/header.php");

include("commun/menu.php");
?>
<h1>le premier exercice</h1>
<h1>Affichage des tables de multiplication</h1>

<form action="#" method="GET">
<label for="table">Table de multiplication à afficher </label>
<input type="number" name="table" id="table" required>
<input type="submit" value="Valider">
</form>

<?php


if(isset($_GET["table"])){
   echo "<h2>la table de " . $_GET["table"] . "</h2>";
   for($i=1; $i<=10;$i++){
      echo $i ."+".  $_GET["table"]. "=" . $i * 4 . "<br>"; 
     }
} else {
   echo "<h2> veuillez saisir une valeur dans le champ ci-dessus</h2>";
}


?>
<?php
include("commun/footer.php")
?>