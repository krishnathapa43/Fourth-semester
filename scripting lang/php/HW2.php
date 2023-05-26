<?php
// TODO: before uploading a file, check if it is a valid image

if(isset($_POST['submit'])) {
    if(isset($_FILES['file'])) $file = $_FILES['file'];
    else die("file upload error");
    
    var_dump($file);
    $fileType = $file['type'];
    $validTypes = ['image/jpg', 'image/jpeg', 'image/png'];
    
    if(!in_array($fileType, $validTypes)) die("Only .jpg, .jpeg & .png files are supported");

    // store temp file permanently in server
    $location = './photos/'.$file['name'];
    move_uploaded_file($file['tmp_name'], $location);
    echo('<br>Uploaded image: <br> <img src="'.$location.'" width="500px"/>');
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
        <form method="post" enctype="multipart/form-data">
            <label> Upload a photo: </label>
            <input type="file" name="file" required >
            <br><button name="submit">Submit</button>
        </form>
    </body>
</html>
