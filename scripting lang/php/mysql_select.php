<?php

require_once "./mysql.php";

$sql = "SELECT * FROM students";

$result = $connection -> query($sql);

if($result->num_rows > 0){
    $data = [];

    while($row =$result->fetch_assoc()){
        array_push($data,$row);
    }
}

echo "<pre>";
print_r($data);       