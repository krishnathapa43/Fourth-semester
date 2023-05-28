<?php


/***
 * Exception 
 */

class LongMessageException extends Exception{

}

 function sendMessage($message)
 {
 if($message == ""){
    throw new Exception("Empty Message");
}

    if(strlen($message)>20){
        throw new LongMessageException ("String message must be less than 20");
    }    
    echo($message);
 }


 try{
sendMessage("");
sendMessage("Hello there are many types of programming language");
 } catch (LongMessageException $e){
    echo "ERROR:" . $e -> getMessage();
 }catch(Exception $e){
    echo "General Error: ". $e -> getMessage();
 }finally {
    echo "finally ran.";
 }