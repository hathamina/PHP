<?php 
session_start();

$voyages = [
    [
        "destination" => "canada",
        "prix" => 3455,
        "duree" => 19,
        "image" => "canada.png",
        "personnes" => 2,
        "transport" => "avion"
    ],
    [
        "destination"=> "Mexique",
        "prix"=> 2355,
        "duree"=> 25,
        "image"=> "mexique.png",
        "personnes"=> 3,
        "transport"=>"avion"

    ],
    [
        "destination"=> "Espagne",
        "prix"=> 254,
        "duree"=> 10,
        "image"=> "espagne.png",
        "personnes"=> 1,
        "transport"=>"bus"

    ],
];

$utilisateurs=[
    [
        "id" => 1,
        "username" => "patricia",
        "password" => "aaaa"
    ],

    [
        "id" => 2,
        "username" => "patricia",
        "password" => "eeee"
    ],

    [
        "id" => 3,
        "username" => "patricia",
        "password" => "zzzz"
    ],

];



$isLoggedIn = false;

if(isset($_POST['logOut'])){
    unset($_SESSION['id']);
    // quand on clique sur le bouton déconnecter (name de bouton logOut) sa deconnecte 
}

if(isset($_SESSION['id'])){
    $isLoggedIn = true;
    // pour maintenir la connection sauf si on clique sur le bouton logOut
}

if(
    ( isset($_POST['username']) && !empty($_POST['username']) ) 
    // on vérifier qu on a 
&& 
    ( isset($_POST['password']) && !empty($_POST['password']) )
){

foreach ($utilisateurs as $utilisateur) {

    if(  
        $_POST['username']  == $utilisateur['username'] 
        && 
        $_POST['password'] == $utilisateur['password']){

        $isLoggedIn = true;
        $_SESSION['id']= $utilisateur['id'];
       
    }  
}
    
}



?>