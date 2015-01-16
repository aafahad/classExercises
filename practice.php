<?php


$place0= array(
    'city'=> 'tokyo',
    'country'=> 'Japan',
    'continent'=> 'Asia'
);


$place1= array(
    'city'=> 'Mexico city',
    'country'=> 'Mexico',
    'continent'=> 'North America'
);

$place2= array(
    'city'=> 'NewYork city',
    'country'=> 'USA',
    'continent'=> 'North America'
);

$place3= array(
    'city'=> 'Mumbai',
    'country'=> 'India',
    'continent'=> 'Asia'
);

$place4= array(
    'city'=> 'Seoul',
    'country'=> 'Korea',
    'continent'=> 'Asia'
);

$place5= array(
    'city'=> 'Shanghai',
    'country'=> 'Chaina',
    'continent'=> 'Asia'
);

$place6= array(
    'city'=> 'Lagos',
    'country'=> 'Nigeria',
    'continent'=> 'Africa'
);


$place7= array(
    'city'=> 'Benos Aires',
    'country'=> 'Argentina',
    'continent'=> 'South America'
);

$place8= array(
    'city'=> 'Cairo',
    'country'=> 'Egypt',
    'continent'=> 'Africa'
);

$place9= array(
    'city'=> 'London',
    'country'=> 'UK',
    'continent'=> 'Europe'
);


$places= array(
    $place0,
    $place1,
    $place2,
    $place3,
    $place4,
    $place5,
    $place6,
    $place7,
    $place8,
    $place9,
);


print_r($places);

echo $places;

echo $places[3];

echo $places[3]['continent'];

echo $places[3]['city'];

echo $places[3]['country'];






//$oddnumbers= array(
//    1,3,5,7,9,11,13,15,17
//);
//
//$names= array(
//  'meem','fahad1','fahad2','arifa','saima'
//);

foreach(
    $places as $bkict){

//    echo ($bkict['city']);

    echo $bkict['city'].'-'.$bkict['country'].'-'.$bkict['continent']."<br/>";


}

