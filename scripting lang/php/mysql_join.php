<?php

/***
 * mysql joins
 * 
 * INNER JOIN
 * 
 * 
 */

require_once "./mysql.php";
// $innerSQL = "SELECT * FROM products join catagorys c on p.cateogry_id = c.id";
$innerSQL = "SELECT p.int,p.title as product_title, c.name as catagory_name From products p join catagories c on p.catagory_id = c.id";

$result = $connection -> query ($innerSQL);
$data = [];
if($result -> num_rows > 0){
    while ($row = $result -> fetch_assoc()){
        array_push($data, $row);
    }
}

echo '<pre>';
print_r($data);