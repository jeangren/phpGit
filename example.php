
<?php
$age = 36; 
$gender = 'Homme';

if ($age >= 18 && $gender === 'Homme') {
    echo 'Vous êtes un homme et vous êtes majeur';
}

elseif($age < 18 && $gender === 'Homme') {
    echo 'Vous êtes un homme et vous êtes mineur';
}

elseif ($age >= 18 && $gender === 'Femme') {
    echo 'Vous êtes une femme et vous êtes majeure';
}
else { 
    echo 'Vous êtes une femme et vous êtes mineure';
}
?>

<?php
$magnitude = "20";

switch ($magnitude) {
    case 1 :
    echo 'Micro-séisme impossible à ressentir';

break;
    case 2 :
    echo 'Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.';

break;
    case 3 :
    echo 'Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.';  

break;
    case 4 :
    echo 'Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.';

break;
    case 5:
    echo "Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. 
    Peu de dégats sur des bâtiments modernes.";

default:
    echo 'vous êtes mort';
}
?>

<?php 
$age = 17;
echo ($age >= 18) ? 'Tu es majeur' : "Tu n'es pas majeur";
?>

<?php
$panier=99;
// if ($panier > 0) {
//     if ($panier > 100) {
//         echo "vous avez une commande qui dépasse 100 eur, vous avez une promo";
//     }
//     else {
//         echo "vous avez une commande en cours";
//     }
// }
// else {
//     echo "votre panier est vide";
// }
echo ($panier>= 0) ? 'vous avez une promo' : "vous avez une commande";


$time = 150;
$coins = 22;
$score = 0;

if ($time < 120) {
    $score = $score + 200;

}
else if ($time >=120 AND $time<180) {
    $score = $score + 100;
}

else if ($time >=180) {
    $score = $score + 50;
}

if ($coins <= 10) {
    $score = $score + 1;

}
else if ($coins >=10 AND $coins<=20) {
    $score = $score + 1.5;
}

else if ($coins >= 20) {
    $score = $score + 2;
}
echo $score;


$maths = 5;
$anglais = 10;
$histoire = 10;
$moyenne = round(($maths + $anglais + $histoire) / 3,2);

if ($maths < 6 or $anglais < 6 or $histoire < 6){
    echo "votre moyenne est de " .$moyenne." (mention : très bien)";
}


else if ($moyenne >=15 and $moyenne <=20)
echo "Mention très bien";

else if ($moyenne >=15 and $moyenne <=18)
echo "Mention bien";

else if ($moyenne >=10 and $moyenne <=15)
echo "Mention assez bien";
echo $moyenne;


$array = [
    "a",
    true,
    42, 
    $score
];

var_dump($array);
echo $array [2];

$array = [
    "tomates",
    "navets",
    "carottes",
    "oignons",
];
var_dump($array[2]);

$array2 = [
    "tomates" => 2.5,
    "navets" => 3,
    "carottes" =>  2,
    "oignons" 
    =>2,
];
var_dump ($array2["carottes"]);

$saisons = [
    "été" => [
        "navet" => [
            "quantité" => 12,
            "prix" => 5,
        ],
        "aubergine" => [
            'quantité' => 15,
            'prix' => 4,
        ]
    ],

    "printemps" => [
        "tomates" => [
            "quantité" => 8,
            "prix" => 2.5,
        ],
        "haricots" => [
            'quantité' => 27,
            'prix' => 3,
        ]
    ],

    "automne"=> [
        "endives" => [
            "quantité" => 5,
            "prix" => 4,
            
        ],
        "batavia" => [
            'quantité' => 7,
            'prix' => 1,
        ]
    ],


];

var_dump($saisons['automne']['endives']['prixtotal']);



$saisons[] = "hiver";

$saisons["hiver"]["légumes"]["brocoli"]  = [
"quantité" => 2,
"prix" => 2,
];
var_dump($saisons);

