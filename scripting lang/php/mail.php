<?php

/**
 * sending email using php
 * 
 * mail(to, mail, message)
 * 
 * 
 */

 $mailSent=mail("crissnathapa1020@gmail.com","Test mail from scripting class", "Hello this is a test mail from scripting class");
 
 if($mailSent){
    echo"mail sent sucessfully";
 }
 else{
    echo"Error:- Mail not sent";
 }

 