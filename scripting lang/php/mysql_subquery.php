<?php

/***
 * mysql joins
 * 
 * INNER JOIN
 * 
 * 
 */

require_once "./mysql.php";

$innerSQL = "SELECT * FROM catagories where id IN(SELECT DISTINCT Catagory_id from products)";



$result = $connection -> query ($innerSQL);
$data = [];
if($result -> num_rows > 0){
    while ($row = $result -> fetch_assoc()){
        array_push($data, $row);
    }
}

echo '<pre>';
print_r($data);