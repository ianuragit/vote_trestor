<?php
/* 
 * Copyright2014 - Anurag Meena (ianuragit@gmail.com)
 * AM  * 
 */

include 'connection_login.php'; //connect the connection page

if(empty($_SESSION)) // if the session not yet started 
   session_start();

if(!isset($_SESSION['SESS_FIRST_NAME'])) { //if not yet logged in
   header("Location: index.php");// send to login page
   exit;
} 
 ?>