

<?php

// Making a connection to database
require_once('connection.php');
$i = 0  ;

//Name & Variable array
$name = array("Aman","Anurag","Aritra","Arpan","Saurabh","Shiladitya","Tushar");
$name_vote = array("aman_vote","anurag_vote","aritra_vote","arpan_vote","saurabh_vote","shiladitya_vote","tushar_vote");

//Fetching SUM from Columns
while($i < 7) {

$query = "SELECT SUM($name_vote[$i]) FROM trestor_vote"; 
$result = mysql_query($query) or die(mysql_error());
$row = mysql_fetch_array($result);
echo $name[$i]." Votes ="." $row[0]"."<br>";
$i++;

} 

mysql_close($bd);

?>