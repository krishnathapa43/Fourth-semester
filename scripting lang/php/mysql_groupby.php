<?php

/***
 * mysql joins
 * 
 * INNER JOIN
 * 
 * 
 */

require_once "./mysql.php";

$innerSQL = "
SELECT catagory_id,COUNT(title) from products GROUPBY catagory_id";

//order by catagory_id decs or ASC


$result = $connection -> query ($innerSQL);
$data = [];
if($result -> num_rows > 0){
    while ($row = $result -> fetch_assoc()){
        array_push($data, $row);
    }
}

echo '<pre>';
print_r($data);