<?php

if (isset ($_POST['first_name'])){
   $firstName=$_POST['first_name'];
   if(!preg_match ("/^[a-zA-Z]*$/",$firstName)){
   echo "only letter are allowed";
   }
   else{
    echo" Name is $firstName";
   }
}

if(isset($_POST['email'])){
    $email = $_POST['email'];

    if (filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "valid email address";
    }
    else{
        echo "Not a valid email";
    }
}
    


// if (isset ($_POST['first_name'])){
//     $firstName=$_POST['first_name'];
//     $lastName=$_POST['last_name'];
//     echo "Hello $firstName $lastName";
// }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>
    <h2>Registration Form </h2>
    <form action="registration.php" method="post">
        <label>First Name</label>
        <input type="text" name="first_name"/>

        <label>Last Name</label>
        <input type="text" name="last_name"/>

        <label>Email</label>
        <input type="text" name="email">

        <button type="submit">Submit</button>
    </form>
</body>
</html>