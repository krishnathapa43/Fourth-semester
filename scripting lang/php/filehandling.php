<?php
/**
 * File Handling in php
 * 
 * 
 * fopen(filename, mode)
 * 
 * Modes
 * 1. r     = open for reading mode
 * 2. r+    = open for reading and writting
 * 3. w     = open for writing only. clears the content. If dont exits
 *              attempts to create it.
 * 4. w+    = open for writing and reading. clears the content.
 * 5. a     = open for writing only but appends the content. if dont attempt
 *              to create it.
 * 6. a+    = open for reading and writing but appends.
 * 7. x     = open for writing only. if the file already exist.
 * 8. x+    = same behaviour as x. open for both reading and writing.
 * 
 */ 


 /***
  * $fileHandle = open("1.txt","r")
  * close a file
  *Fclose($fileHandel)
  *
  */

  /**
   * Reading from files
   * fread($fileHandel, LengthInByte)
   * 
   */

    /***
     * check file exist 
     * file_exist($fileHandel) = true or false
     * 
     */



     $fileName = "data.txt";
     if(file_exists($fileName)){
        $fh = fopen($fileName,"r");  //open the file 
        $content = fread($fh,filesize($fileName));    //read the file
        echo $content;
        fclose($fh);                   // close the file 


     }else{
        die("file doesnot exist");
     }

     /**
      * Another way of reading all content
      * readfile($fileName)
      */

      if(file_exists($fileName)){
        readfile($fileName) or die("cannot read file");
      }else{
        die("file doesnot exist");
      }

      /***Another way of reading all the files
       * file_get_contents($fileName)
       */

       if(file_exists($fileName)){
        $content=file_get_contents($fileName) or die("cannot read file");
        echo $content;
    }else{
        die("file doesnot exist");
      }

      /**
       * writing the files
       * 
       * fwrite ($fileHandle,"content")
       */

       $data = "This is written from php program.";
       $fh = fopen("newdata.txt","w");
       fwrite($fh, $data);
       fclose($fh);

      /***
       * Another way to write files
       * files_put_content($fileName,data)
       */

       file_put_contents("data2.txt", "writting from file put");

       /***
        * file reading
        * rename($oldFileName,$NewfileName)
        */

        $oldName = "data.txt";
        $newName = "data.ne.txt";

        if(file_exists($oldName)){
            rename($oldName, $newName);
        }

        /***
         * Removing or deleting file
         * unlink ($fileName)
         */

         if(file_exists($newName)){
            unlink($newName);
         }