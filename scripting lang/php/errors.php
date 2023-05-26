<?php

ini_set('display_errors',1);
error_reporting(E_ALL);

/**
 * Error levels
 * 1.E_ALL = All errors and warinig
 * 2.E_PARSE = syntax Error
 * 3.E_ERROR = Runtime Error
 * 4.E_WARNINIG = Warning Error
 * 5.E_NOTICE = Notice Error
 */


/*** 
 * Types of errors
 * 1. syntax Error or pass Error
 * 2. Fatal Error
 * 3. warning Error
 * 4. Notice Error
*/



//$name = "hello"  syntax error
//Sum(1,2);  //fatal error
//include "second.php";    -> warning error


/*$telecom = "Airtel";  
echo $telecom;  
echo $automobile;  */ //-> Notice error

/**
 * die($message)
 * Halts the code and print the message
 */

 //php.ini