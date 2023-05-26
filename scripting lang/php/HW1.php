<?php
// on 1st open, create form asking user's name
// set cookie w/ user's name
// on later loads, echo 'Hello $name'

if(isset($_COOKIE['name'])) {
    $name = $_COOKIE['name'];
    echo "Hello $name";
} else {
    setcookie('name', $_GET['name']);
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
    <?php if(isset($_COOKIE['name'])) { ?>
        <p>Hello <?php echo $_COOKIE['name']; ?></p>
        <?php } else { ?>
    <form > 
            <label> Name <br>
                <input name="name" type="text">
            </label>
            <button name="submit">Submit</button>
        </form>
        <?php } ?>
    
    </body>
</html>