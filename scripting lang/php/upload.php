<?php

/**
 * File upload
 * 
 * php.ini Configuration file
 * 
 * file_upload=on; // enable file upload
 * max_input_time=60; // 60 seconds is max time spending prasing the file
 * max_file__upload=20; // max number files which can be uploaded at a time.
 * memory_limit=16MB; // (-1 => unlimited )
 * post_max_size=40MB; //
 * upload_max_filesize==40MB;
 * 
 */

 



 /***
  * $_FILES = superglobal variables to handel file upload
  * 
  * $_FILES['userfiles']['error'] => 0 if no error, otherwisre sets error code
  * $_FILES['username'] ['name'] => specifies original name of the file including extension
  * 
  * $_FILES['userfiles']['size']=> specifices size of the files in the bytes
  * $_FILES['Userfiles']['tem_file]['type'] => specifices temporary name assigned to files once uploaded to server.
  * $_FILES['username']['type']  => specifices MIME type of upload files
  */


  /**
   * move_upload_file(tmp_name, $destination)
   * 
   */



   if(isset($_POST['submit']))
   {
    if(isset($_FILES['photo']['error'])&& $_FILES['photo']['error']==0)
    {
    $tmpName = $_FILES['photo']['tmp_name'];
    $destination = 'photos/'.$_FILES['photo']['name'];
    $ismoveuploade =move_uploaded_file($tmpName,$destination);
    if($ismoveuploade = True){
        echo"file uploaded sucessfully";
    }else{
        "File upload failes";
    }
   }else{
        die("There was an error upploading file");
   }
}

// echo => print
// die=> die halt means code doesnot run further
/**
 * Homework
 * Before uploading files, check if the files is a valid image.
 * Hint: check $_FILES [''filename'][   'type'] = 'image/jpeg","image/png","image/jpg";
 */

?>

   <!DOCTYPE html>
   <html lang="en">
   <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
   </head>
   <body>
    <h1>File Upload</h1>
    <form method="Post" enctype="multipart/form-data">
        <label > Upload a photo</label>
        <input type="file" name="photo"/>

        <button type="submit" name="submit">Submit</button>
    </form>
   </body>
   </html>



   
   