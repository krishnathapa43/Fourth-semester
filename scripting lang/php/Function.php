<?php

/****
 * Function
 * 
 */

 Function sum ($a, $b){
    return $a + $b;
 }

 sum (4,5); //9
 sum (10,12);//22
 $result2 = sum(4,5);
   echo $result2;
 
 /***
  * Function Naming Rules
  1.Must start with Letter or underscore
  2. Name must be unique
  3. Name must not contain space
  4. Input parameters and output are optional
  */
  /***
   * Function with optional parameter and default values
   * 
   */

   function multiply($a, $b=5){
    return $a * $b;
   }
   $result3 = multiply(4);
   echo $result3;
   

//    function multiply($a, $b, $c){
//     return $a * $b * $c;
//    }
//    $result4 = multiply(4,5,5);
//    echo $result4;

//Function number args

function getNumberOfArguments(){
   $numOfArgs = func_num_args();
   echo "Number of Argument = $numOfArgs ";
}

getNumberOfArguments("a","b","c");
echo "<br/>";

// // func_get_arg
// function getSpecificParameter()
// {
//    echo "second parameter is :". func_get_arg(1);
// }
// getSpecificParameter ("car","Bus","Truck");



function getSpecificParameter()
{
   $numOfArgs = func_num_args();
   if($numOfArgs>=2);
   {
   echo "second parameter is :". func_get_arg(1);
   }
}
getSpecificParameter ("car","Bus","Truck");

//func-get_args
function getAllArguments()
{
   $allArgs = func_get_args();
   var_dump($allArgs);
}
getAllArguments("car","Bus");

//sum
function sumAll()
{
$totalargs = func_num_args();
$sum=0;
for($i=0; $i<$totalargs; $i++)
{
   $Argslist = func_get_args();
   $sum = $sum + $Argslist[$i];
}
echo $sum;
}
 
sumAll(3,4,6);

/**
 *PHP ARRAY FUNCTION
 */

//Array_merge

$boys = ['Ram', 'shyam', 'hari'];
$girls = ['sita','rita', 'Gita'];
$student = array_merge($boys,$girls);
print_r($student);

//array_merge_recursive

$first =[
   'car' => 'BMW',
   'bike' => 'Fz'
];

$second = [
   'car' => 'lambo',
   'bike' => 'yamaha',
   'scooter' => 'Nitro'
];

$third = array_merge_recursive($first,$second);
echo "<br/> <pre>";

print_r($third);


//Array sorting
$numbers = [5,7,10,12,10];
sort($numbers);
print_r($numbers);

//rsort
rsort($numbers);
print_r($numbers);

//Searching array
$hasScooter = array_key_exists("scooter", $first);
var_dump($hasScooter);

$hasBMW = in_array("BMW", $first);
var_dump($hasBMW);