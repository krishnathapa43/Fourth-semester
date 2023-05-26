<?php
/**
 * cookies : simple information 
 * 
 * setcookie(name,value,expire,path, domain, secure)
 * 
 */

//  setcookie("dark","true",time() + 7 * 24 * 60 * 60 );


 /**
  * Acccess cookies
  * $_COOKIES = supergloabal variable to access cookies
  */

  $darkMode = false;
if(isset($_COOKIE['dark']))
{
    if($_COOKIE['dark'] == 'true')
    {
        $darkMode = true;
    }
}

/**
 * Homework
 * on first time : create a form  asking user's name.
 * on submit : set cookies with user name's.
 * on the next visit, if cookies is set , display " hello $name"
 */

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <body style="background-color:<?php echo $darkMode ? '#000' : '#fff' ?> ">
        
</body>
</html>