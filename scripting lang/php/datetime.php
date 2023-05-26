<?php

//unix Timestamp
$time = time();
$time = $time + 50 * 24 * 60 * 60;

echo $time."<br>";

//date
$date = date("Y F D H:i:s",$time);
echo $date ."<br>";

//strtoline


?>