<?php

require_once "./mysql.php";
$sql = "update students set name = 'kiran' where `Roll N0`= 01";

$result = $connection->query($sql);
if($result){
    echo "Record updated sucessfully";  
}
