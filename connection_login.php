
<?php
/* 
 * Copyright2014 - Anurag Meena (ianuragit@gmail.com)
 */

$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "login";
$prefix = "";
$bdc = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database, $bdc) or die("Could not select database");

?>

