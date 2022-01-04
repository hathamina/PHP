<?php

if (isset($_GET["boisson"])){
    if($_GET["boisson"] == "cafe"){
        require_once 'cafe.php';
    }else{
        require_once "the.php";
    }
      
}else{
    require_once "question.php";
}

$mDePasse = "amina";
$isloggeIn = true;
$afficherCoca ="";

if(isset($_POST['passe']) && $_POST['passe'] == $mDePasse ){
    
$isloggeIn = true;
$_SESSION['isLoggedIn'] = true;
}

?>