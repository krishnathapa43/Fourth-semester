<?php
$name = "John";

/*   
Rules:
1.MUst start with a letter or underscore
*/
$_name = "";
$lastname = "";

//2. variables are case sensitive
$Name = "";
$NAME = "";
$nAmE = "";

//3. variable name can only contain
//- Uppercase and lowercase letter(a-z,A-Z)
//-number(0-9)
//-underscore(_)


//Destroy variable 
unset($name);

//Diffrene between $ and $$
$name = "John";
$John = "joe Root";


echo $name."<br/>";

echo $$name."<br/>";

//Super Global variables in PHP

//1. $GLOBALS

$result = 0;

function sum($a,$b){
    $GLOBALS["result"] = $a+$b;
}

sum(5,6);
echo $result;


// . $_SERVER

/*foreach($_SERVER as $key => $value ){
    echo $key . "=" .$value ."<br/>";
}*/

// 3. $_REQUEST

if($_SERVER["REQUEST_METHOD"] == "POST" ){
    $email = $_POST["email"];
    echo "Email: ".$email;
    echo "<pre>";
    var_dump ($_FILES['image']);
}

// 4. $_POST
// 5. $_GET
// 6. $_FILES
// 7. $_COOKIE
// 8. $_SESSION

?>



<form method="post" action="variablre.php" enctype="multipart/form-data">
    <label for="">Email</label>
    <input type="email" name="email" id="">
    <br/>
    <label >Image</label>
    <input type="file" name="image"/>
    <button type=""submit>Submit</button>
</form>


