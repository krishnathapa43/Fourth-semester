<?php

/**
 * Catagory of php operators
 * 1. Arithmetic Operator
 * 2. Comparision Operator
 * 3. Bitwise operator
 * 4. logical operator
 * 
 */;


 //Arithmetic Operator
 $sum = 5 + 6;
 $diff = 10 - 3;
 $multiply = 6*5;
 $div = 10 / 2;
 $mod = 10 % 2;
 $sum++; // $sum = $sum + 1;
 $sum--; // $sum = $sum -1;

// comparision Operator
echo 5 = 5; //Double Equals to "5" == 5 true
echo 5 === 5; // Triple Equals to "5" === false
echo 5<10;
echo 5>10;
echo 5 =< 10 ;
echo 5 >= 10;

// logical Operator
echo true AND true; // true
echo true OR false; // true
echo !true; // false

// Assignment operator
$movies = "Fresh";
$sum + = 2;
$sum - = 2;
$sum * = 2;
$sum / = 2;

// Ternary Operator
$marks = 60;
if($marks > 40){
    echo "pass";
}else{
    echo "fail";
}

echo $marks > 40 ? "pass ": "Fail";

