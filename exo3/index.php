
   <?php
   include("commun/header.php");
   include("commun/menu.php");
   ?>

<h1>Affichage des tables de multiplication</h1>


<?php
define("TABLE",3);
echo "<h2>la table de " . TABLE . "</h2>";
for($i=1; $i<=10;$i++){

 echo $i ."+". TABLE . "=" . $i * 4 . "<br>";
    
    }

?>


<?php
include("commun/footer.php");
?>