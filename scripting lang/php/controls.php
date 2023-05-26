<?php

/***
 * control structures
 * 
 * 1.If statement
 * 2.If Eles Statement
 * 3.If Else if statement
 * 4.Switch statement
 */

 //If statement 
 $num = 50;
 if($num > 0){
    echo "positive Number";
 }else if($num = 0){
    echo "Zero";
 }else {
    echo "Negative Number";
 }

 //switch statement

 switch ($num) {
    case 0;
    echo "Zero";
    break;
    case $num > 0;
    echo "positive";
    break;
    default:
    echo "Negative";
    break;
 }

 /***
  * Lopping statement
  *1. For Loop 
  *2. While Loop
  *3.Do while loop
  *4. Foreach loop
  */

  //for loop
  for ($i = 0; $i <= 10; $i++){
    echo $i;
  }

//while loop
$i = 0;
while ($i <= 10){
echo $i;
$i++;
}

// Do While loop
$j = 10 ;
do {
    echo $j ;
} while ($j < 10 );

// foreach loop
$bands = ["The Beatles", "The Who", "Nirvana"];

foreach ($bands as $band){
    echo $band ." <br>";
}

$books = [
    "Steven Chmosky" => "The preaks of being wallflower",
    "Basanta Basnet" => "Mahavara",
    "Albert Camus" =>"The Stanger "
];

foreach ($books as $author => $bookName)
{
    echo $author . ":" , $bookName . "<br>";
}



