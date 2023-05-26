<?php
/**
 * Session
 * :
 * simple file or database record which contains small pieces of 
 * data in server side.
 * 
 * Instead of sending data to brower, it senbs a unique Id
 * called SESSION ID  to the browser
 * 
 * on each future request, browser will send the session ID.
 * 
 * 
 */

 /**
  * How to create session
  * session_start();
  * $_SESSION['darkMode'] = true;
  * 
  */

  session_start();
  if(isset($_SESSION['page_count'])){
    $_SESSION['page_count']+=1;
  }else{
    $_SESSION['page_count']=1;
  }
session_destroy(); // destory all session
 //unset($_SESSION['page_count']); // destory page count session 
  echo "This page has been visited". $_SESSION['page_count']."tiems";