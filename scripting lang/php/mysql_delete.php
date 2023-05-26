<?php

require_once "./mysql.php";

$sql = "Delete from students where id = 1";
$result = $connection->query ($sql);

if($result){
    echo "Record deleted sucessfully";
}