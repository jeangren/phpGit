<?php

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
    echo '<ul>'. '<li>'. $legume. '</li>'.'</ul>';
   echo "<br>";
}

foreach ($ete as $legume => $detail){
    echo '<ul>'. '<li>'. $legume. '</li>'.'</ul>';
    foreach ($detail as $carac =>$value){
        echo '<ul>'. '<li>'.$carac.'</li>'.'</ul>'. 
        '<ul>'. '<li>'.$value.'</li>'.'</ul>';
    }
    echo '<br>';
}

$saisons = [
    "été" => [
        "aubergines" => [
            "quantité" => 12,
            "prix" => 5
        ],
        "tomates" => [
            "quantité" => 10,
            "prix" => 6
        ]
    ],
    "automne" => [
        "pommes de terre" => [
            "quantité" => 12,
            "prix" => 5
        ],
        "carottes" => [
            "quantité" => 10,
            "prix" => 6
        ]
    ],
    "hiver" => [
        "avocats" => [
            "quantité" => 12,
            "prix" => 5
        ],
        "pêches" => [
            "quantité" => 10,
            "prix" => 6
        ]
    ]
 ];
 foreach ($ete as $legume => $detail){
    echo '<ul>'. '<li>'. $legume. '</li>'.'</ul>';
    foreach ($detail as $carac =>$value){
        echo '<ul>'. '<li>'.$carac.'</li>'.'</ul>'. 
        '<ul>'. '<li>'.$value.'</li>'.'</ul>';
    }
    echo '<br>';
}

$a = [
    "zero"  => 0,
    "un"    => 1,
    "deux"  => 2,
    "trois" => 3,
    "quatre"=> 4,
  ];
echo ($a["trois"]);

$b = [
    [0, 1],
    [2,[3]],
    "zero"  => 0,
    "un"    => 1,
    "deux"  => 2,
    "quatre"=> 4,
  ];
var_dump ($b);
echo $b [1][0][1];



$c = [
    1,
    2,
    3,
    
  ];
var_dump ($c);
echo $c [0];

?>