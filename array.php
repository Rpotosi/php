<?php

//arrays -> un grupo de datos (esto es un array indexado -> indexe numerico inicando con el 0)

$name = [
    'Andres',
    'MILLER',
    'SUZAN',
];


$ages = [
    21,
    22,
    23,
    24,
    25,
];


/* ARRAY ASOCIATIVOS -> un array que continen mas arrays*/

$players = ['colombia' =>['player1','´layer2','player3','player4',],];


$country = [

    'citys' =>
    [
        'city1',
        'city2',
        'city3',
    ],
];


echo $country['citys'][2];


