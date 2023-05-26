<?php

require_once "./mysql.php";
$sql = "
    insert into students (name,`Roll N0`) VALUES ('Karan',01)
";

$success = $connection->query($sql);

if($success){
    echo"Record inserted sucessfully";
}else{
    echo"Error inserting new records";
}