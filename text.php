<?php

$string = "Hello world";
$variableNulle = null;

$result = 142;
$resultString = "142";

// Ou : OR ou ||
// Et : AND ou &&
if ( $result === 143 && $string != null ) {
    $result = 0;
    echo "Condition validée";
}
elseif ( $result === 142 ) {
    echo "le resultat est bon";
}
else {
    echo "Condition non validée";
}

echo ($resultString != $result) ? "validée" : "non validée";

echo (condition) ? "valeur si vrai" : "valeur si faux";
$variable = (condition) ? "valeur si vrai" : "valeur si faux";


switch ($result) {
    case 140 :
        echo "le resultat est 140";
        break;
    case 142 :
        echo "le resultat est 142";
        break;
    case 143 :
        echo "le resultat est 143";
        break;
    default:
        echo "le resultat est hors bornes";     
}


switch ($errorType) {
    case "warning":
        echo "Un warning est arrivée.";
        break;
    case "notice":
        echo "Un message notice est apparu.";
        break;
    default:
        echo "Une erreur inconnue est survenue.";
}



$age = 16;
if ($age >= 18) {
    var_dump ("Vous êtes majeur");
} else if ($age < 18) {
var_dump ("vous êtes mineur");
}

 
foreach ($produits as $clef => $produit){
    echo 'Produit : ' .$clef. '<br>';
    foreach($produit as $caracteristique => $valeur){
        echo $caracteristique. ' : ' .$valeur. '<br>';
    }
    echo '<br>';


$isEasy = 0;



$array = ["a","true","42", $result]; on écrit comme ça:
$array = [
    "a",
    "true",
    "42", 
    $result
];

var_dump($array);
echo $array [2];
 le tableau peut contenrir un autre tableau
 $array = [
    "a",
    "true",
    "42", 
    $result
    ['été',
    'printemps',
    'automne',
    'hiver']
];
var_dump($array[4]); va chercher les saisons
pour chercher hiver echo $array[4][3];


$nombresPairs = [2, 4, 6, 8];

var_dump($nombresPairs);

foreach($nombresPairs as $nombre) {
    echo $nombre;
    echo "<br>";
}
foreach ($nombresPairs as $i => $nombre) {
    echo $i . ": " . $nombre;
    echo "<br>";
}


$user = [
    "firstname" => "john",
    "lastname"  => "doe",
    "age"       => "54",
    "job"       => "developpeur"
];
echo "<hr>";
echo "<ul>";
foreach($user as $carac => $valeur) {
    echo "<li><strong>" . $carac . "</strong> : " . $valeur . "</li>";
}
echo "</ul>";



var_dump($ete)
foreach ($ete as $i => $legumes {
echo $ete . ": " . $legumes;
echo "<br>";

$produits = [
    'Livre' => [
        'poids' => 200, 
        'quantite' => 10, 
        'prix' => 15
    ],
    'Stickers' => [
        'poids' => 10, 
        'quantite' => 100, 
        'prix' => 1.5]
    ];
    
    $sous_produits = $produits['Livre'];
    $livre = [
        'poids' => 200, 
        'quantite' => 10, 
        'prix' => 15
    ];


    echo $sous_produits['prix'];

