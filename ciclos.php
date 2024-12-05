<?php
/*
$names = [

    'jhon',
    'jane',
    'jim',
    'james',
    'jimy',
    'jimmy',

];

$itemsNumber = count($names);
//die(var_dump($itemsNumber));

//for// definimo cuantas veces se repite el nombre

for ($i=0; $i <6 ; $i=$i+1 ) {  //interaciom + codición + incremento (separado por ;) 
   
    echo $names[$i]."<br>";
}

*/
//FOR EACH
/*
$names = [
    'jhon',
    'jane',
    'jim',
    'james',
    'jimy',
];

foreach ($names as $name) {
    echo $name . "<br>";
  };
  
*/  

$players = 
[
    [
        'name' => 'jhony',
        'age' => 25,
        'country' => 'USA',
    ],

    [
        'name' => 'andres',
        'age' => 25,
        'country' => 'españa',        

    ],

];

foreach ($players as $player) {

    echo "nombre:" . $player['name'] . "<br><hr>".
        "edad:" . $player['age'] . "<br><hr>".
        "pais:" . $player['country'] . "<br><hr>";
};

