<?php
include("commun/header.php");
include("commun/menu.php");
?>
 <h1>Cercle - Périmètre et Aire</h1>

 <form action="#" method="POST">
     <label for="rayon">Rayon d'un cercle </label>
<input type="text" name="rayon" id="rayon">
<br>
<label for="perimetre">Périmètre</label>
<input type="checkbox" name="perimetre" id="perimetre" >
<br>
<label for="aire">Aire</label>
<input type="checkbox" name="aire" id="aire" >
<br>
<input type="submit" value="Valider">
</form>
 

<?php
if(isset($_POST["rayon"]) && $_POST["rayon"]){
  echo  "<h2>Résultats</h2>";
  if (isset($_POST["perimetre"])) {
     echo "le périmètre d'un cercle de rayon : " .$_POST["rayon"] . " est de : ". ($_POST["rayon"]* 2 * pi()). "<br>";
  }
  if (isset($_POST["aire"])) {
    echo "l'aire' d'un cercle de rayon : " .$_POST["rayon"] . " est de : ". ($_POST["rayon"]* $_POST["rayon"] * pi());
  }


}else{
    echo "<h1>saisir une valeur dans le  champ ci-dessus</h1>";
}

?>

<?php
include("commun/footer.php");
?>