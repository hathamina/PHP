
   <?php
   include("commun/header.php");
   include("commun/menu.php");
   ?>
    <h1>formulaire</h1>
    <form action="#" method="POST">
        <fieldset>
            <legend>Information</legend>
                <label for="nom">Nom </label>
                <input type="text" name="nom" id="nom" placeholder="entrez votre Nom" required>
                <br> <br>
                <label for="age">Age </label>
                <input type="number" name="age" id="age" placeholder="entrez votre Age" required>
                <br> <br>
                <input type="submit" value="Envoyer">
        </fieldset>
    </form>
    <?php 
if(isset($_POST["nom"])){
    echo "<div class =\"resultat\">";
    echo "le nom est : ".$_POST["nom"]."<br>";
    if(isset($_POST["age"])){
        echo "l'age est :".$_POST["age"];
    }
    echo "</div>";
}
    ?>

<?php
include("commun/footer.php");
?>