<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

$assoc = [
    'one' => 1,
    '2' => 2,
    'three' => 3,
    0x4 => 4,
    5 => 5,
    6 => [
        'in_one',
        'in_two'
    ]
];


$base = [
    'citrus' => "orange",
    'berries' => [
        "blackberry",
        "raspberry"
        ],
    'others' => 'banana' 


];

$arr = [
    'hi',
    'this',
    'is',
    'nisath'
];

$flip = array_flip($assoc);
print_r($flip);
// echo "<br>";
// echo $arr[0];



function testFunc($key, $value) {
    print("$key: $value\n");
}

// array_walk($flip, 'testFunc');
// $array 

// for($i = 0; $i < count($flip); $i++){
//     testFunc($flip[$i], $i);
// }

if(array_key_exists(3, $flip)) {
    echo "Hello is present\n";
} else {
    echo "Hello is absent\n";
}

?><pre><?php
print_r(array_chunk($flip, 2, true));
?><pre><?php
// for($i = 0; i < 6; $i++){
//     print_r(array_pad($arr, 10, $i));
// }

print_r(array_pad($arr, 10, 8));

$rep_assoc = [
    // 'one' => 3,
    // '2' => 5,
    // 'three' => 6,
    // 0x4 => 2,
    // 5 => 3,
    6 => [
        'one',
        2
    ]
];

$replace = array_replace_recursive($assoc, $rep_assoc);
print_r($replace);
