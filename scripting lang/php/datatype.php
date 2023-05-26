<?php
/*
* Supported Data Types
*
* 1. String 
* 2. Interger
* 3. Float
* 4. Boolean
* 5. NULL
* 6. Array
* 7. Object
* 8. Resource

 */

 // String
 $name = '';
 $lastName = " $name \n \t \$200";

 //Integer
 //-2^64 to + 2^64
 $a = 1234;
 $b = 0x1A;
 $c = 0b111;

 //Float
 $d = 1.234;
 $e = 1.2e3;

 //Boolean
$isRaining = true;

// NULL
$data = null;

//Array 
$countries = ["Nepal", "India", "Bhutan"];
$provinces = array("koshoi"," Bagmati","Gandaki");

echo $countries[0];
$countries[3] = "srilanka";

//Associative Array
$student = [
    'name' => 'jin',
    'roll' => '8'
];

echo $student['name'];

//object
class Student{
    private $name;
    function setName($name){
        $this-> name =  $name;
    }
    
}

$student = new Student();
$student -> setName("Ramesh");

// Recource 
$file = fopen("first.php","r");
fclose($file);

//Constant
define ("PI", 3.141592);

echo "value of pi is " . PI;

// Type Conversion or Type casting
$Weight = (float)60;

$age =(int) 23.3;

$isMarried = (bool)2;
var_dump($isMarried);






