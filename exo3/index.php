   <?php
   include("commun/header.php");
   include("commun/menu.php");
   ?>

<h1>Affichage des tables de multiplication</h1>

<form action="#" method="GET">
<label for="table">Table de multiplication à afficher </label>
<input type="number" name="table" id="table">
<input type="submit" value="Valider">
</form>

<?php


if(isset($_GET["table"])){
   echo "<h2>la table de " . $_GET["table"] . "</h2>";
   for($i=1; $i<=10;$i++){
      echo $i ."+".  $_GET["table"]. "=" . $i * 4 . "<br>"; 
     }
}


?>


<?php
include("commun/footer.php");
?>