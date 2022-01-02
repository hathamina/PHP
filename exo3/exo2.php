 <?php
   include("commun/header.php");
   include("commun/menu.php");
   ?>

<h1> Pyramide</h1>

<form action="#" method="POST">
<label for="hauteur">Hauteur de la pyramide </label>
<input type="number" name="hauteur" id="hauteur">
<input type="submit" value="Valider">
</form>

<?php
if(isset($_POST['hauteur']) && $_POST["hauteur"] > 0){
  $hauteur = $_POST['hauteur'];
  echo "<h2>la hauteur est : " . $hauteur ."</h2>";
$txt = "";

for($i=1; $i< $_POST['hauteur']; $i++){
  $txt .= "xx";
  echo $txt . "<br>";
}

for( $i=1; $i< $_POST['hauteur']-1; $i--){
  $txt = substr($txt,0,strlen($txt)-2);
  echo $txt ."<br>";
}

} else {
  echo "<h2> veuillez saisir un hauteur ci-dessus </h2>";
}
?>

<?php
include("commun/footer.php");
?>