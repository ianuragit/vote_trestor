<?php

require_once('connection.php');


$aman = $_POST['aman_vote'];
$anurag = $_POST['anurag_vote'];
$aritra = $_POST['aritra_vote'];
$arpan = $_POST['arpan_vote'];
$saurabh = $_POST['saurabh_vote'];
$shiladitya = $_POST['shiladitya_vote'];
$tushar = $_POST['tushar_vote'];

$sql="INSERT INTO `trestor_vote`(`aman_vote`, `anurag_vote`, `aritra_vote`, `arpan_vote`, `saurabh_vote`, `shiladitya_vote`, `tushar_vote`) VALUES ('$aman', '$anurag', '$aritra', '$arpan', '$saurabh', '$shiladitya', '$tushar')";

if (!mysql_query($sql)) {
  die('Error: ' . mysql_error($bd));
}
echo "<br> <br> <br> <br><center> <h1>Your vote has been record added </h1> </center>";

echo "<br> <br> <br> <br><center> <h3> <a href='result_as.php'> Result can be seen here </a></h3> </center>";
mysql_close($bd);

?>