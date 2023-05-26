<?php

/****
 * Array 
 * 1. Numeric Index Array
 * 2. Associative Array 
 * 3. Multi Dimensional Array
 * 
 */

 //Numeric INdex Array
 $animals = ["Lion", "Tiger", "Buffalo"];
 $moreAnimlas = array("Cow", "Dog");

 //Associative Index Array
 $animalShelters = [
    "Lion" => "Jungle",
    "Horse" => "Stable"
 ];

 //Multi Dimensional Array 
 $genres = [
    "Fiction" => [
        "Action and Adventure",
        "Sci-fi",
        "factasy",
    ],
    "Non-Fiction"=>[
        "Biography",
        "Documrntry"
    ]
];

    echo $genres["Fiction"][1];

    foreach($genres as $genre){
        foreach($genre as $genreItems){
            echo $genreItems."<br>";
        }
    }