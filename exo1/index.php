<?php

define("SEPARATEUR","-");
$joueur1=[
    "nom" => "mattieu",
    "age" => 20,
    "est un homme" => true
];
$joueur2=[
    "nom" => "tata",
    "age" =>19,
    "est un homme" => false
];
$joueur3=[
    "nom" => ["Nom"=>"tata","prenome"=>"titi"],
    "age" =>19,
    "est un homme" => false
];


// afficherJoueur($joueur1[0],$joueur1[1] ,$joueur1[2]);
afficherLeTAbleau($joueur1);
echo genererSeparation(SEPARATEUR);
// afficherJoueur($joueur2[0],$joueur2[1] ,$joueur2[2]);
afficherLeTAbleau($joueur2);
echo genererSeparation(SEPARATEUR);
afficherLeTAbleau($joueur3);
echo genererSeparation(SEPARATEUR);
echo afficherJoueurLePlusAgee($joueur1["age"], $joueur2["age"]);
echo genererSeparation(SEPARATEUR);
$differenceAge = calculDifferenceAge($joueur1["age"],$joueur2["age"]);
echo "la difference d'age est : ". $differenceAge;
echo genererSeparation(SEPARATEUR);
 afficherSiMajeur($joueur1["age"]);
echo genererSeparation(SEPARATEUR);
 afficherSiMajeur($joueur2["age"]);
echo genererSeparation(SEPARATEUR);

function afficherJoueur($nom, $age, $homme){

    echo "nom de jouer  : " . $nom;
    echo "<br>";

    echo "son age" . $age;
    $age = $age + 1;
    echo "<br>";

    echo "age du joueur  :" . $age;
    echo "<br>";
    

    if($homme === true){
        echo "c'est un homme";
        echo "<br>";
    } else { 
        echo "c'est une femme";
        echo "<br>";
   }
   
}

function afficherJoueurLePlusAgee( $ageJoueur1, $ageJoueur2){
    if($ageJoueur1 >$ageJoueur2){
        echo "joueur 1 est plus agee";
    } else { echo "joueur 2 est plus agee ";}

   
}

function calculDifferenceAge($ageJoueur1,$ageJoueur2){
    $resultat = $ageJoueur1 -$ageJoueur2;
    if($resultat < 0){

    $resultat = -$resultat;
    }
    return $resultat;
}

function afficherSiMajeur($age){
    if ($age>16){
        echo "le joeur est majeur :) ";
    }else { echo " le joueur est mineur :(";}
}

function genererSeparation($separateur){
    echo "<br>";
    for($i =0; $i<50; $i++){
        echo $separateur;
    }
    echo "<br>";
}

function afficherLeTAbleau($tab){
$nombreCaseTableau = count($tab);
//    for($i=0 ; $i< $nombreCaseTableau; $i++){
//        echo $tab[$i];
//        echo "<br>";
//    }

foreach($tab as $indice=> $value){
    if(!is_array($value)){
        echo $indice .":" . $value. "<br>";
    }else {
        afficherLeTAbleau($value);
    }
   
}
}
echo $joueur3 ["nom"]["prenome"];

?>