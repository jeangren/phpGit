<?php


$hello = "hello";
$world = "world";
echo $hello ." ". $world;



$saisons1 = [
"été", 
"automne", 
"printemps", 
"hiver"
];

echo "<ul>";
foreach($saisons1 as $listesaison) {
    echo "<li>" .$listesaison. "</li>";
  
}
echo "</ul>";

$aubergines = [
    "quantité" => 12,
    "prix" => 5
];


echo "<ul>";
foreach($aubergines as $qt => $vale) {
    echo "<li> $qt : $vale </li>";
}
echo "</ul>";





echo "<ul>";
foreach($ete as $legume) {
    echo "<li>" .$legume. "</li>";
}
echo "</ul>";

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


$ete = [
    "aubergines" => [
        "quantité" => 12,
        "prix" => 5
    ],
    "tomates" => [
        "quantité" => 10,
        "prix" => 6
    ]
];
foreach ($ete as $legume => $detail){
    echo $legume. '<br>';
    }
    echo '<br>';



var_dump($ete);
$sousete1 = $ete["aubergines"];
$sousete2 = $ete["tomates"];

echo "aubergines" ." "."qté ". $sousete1['quantité']. " prix ". $sousete1['prix']." €" ."<br>";
echo "tomates" ." "."qté ". $sousete2['quantité']. " prix ". $sousete2['prix']." €";





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
    
   


    
    foreach ($produits as $clef => $produit){
        echo 'Produit : ' .$clef. '<br>';
        foreach($produit as $caracteristique => $valeur){
            echo $caracteristique. ' : ' .$valeur. '<br>';
        }
        echo '<br>';
    }
?>

