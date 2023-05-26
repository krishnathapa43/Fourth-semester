<?php

/***
 * 
 * 
 *mysql -u root
 * 
 * 
 */

 $host = "localhost";
 $username = "root";
 $password = "";
 $databaseName = "student";

 $connection = new mysqli($host, $username, $password);

 if($connection->connect_errno != 0 ){
    die("connection failed");
 }
 $connection -> select_db($databaseName);
 echo "connection  established";

 /**
  * THree essential types of store
  * 1. text
  *2. Number
  *3. Date and time

 * Actual Datatype
 * 1. Int= integer, size 4 bytes
 * 2. Bigint= Integer, size 8 byte
 * 3. Float= Decimal number, size 4 byte
 * 4. Double= Decimal number , size 8 byte
 * 5. varchar[100] = 100 char+ 1 byte size
 * 6.Tinytext = max length 255
 * 7.Text = max length 65,535 character, 2byte
 * 8.MEDIUMTEXT= string length + 3 byte
 * 9.LONGTEXT = string length + 4 byte
 * 10.DATE= YYYY-MM-DD
 * 11.DATETIME = YYYY-MM-DD HH:MM:SS
 * 12.ENUM = each column can have one of the possible values
 * 
  */

/**
 * Special Data Type
 * 1.Point
 * 2.Polygon
 * 3.Geometry
 */



