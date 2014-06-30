<?php


require_once('connection.php');


$aman = $_POST['aman_vote'];
$anurag = $_POST['anurag_vote'];
$aritra = $_POST['aritra_vote'];
$arpan = $_POST['arpan_vote'];
$saurabh = $_POST['saurabh_vote'];
$shiladitya = $_POST['shiladitya_vote'];
$tushar = $_POST['tushar_vote'];

//accessing textfile contents
$filename = "vote_result.txt";
$content = file($filename);

$array[0] = $aman;
$array[1] = $anurag;
$array[2] = $aritra;
$array[3] = $arpan;
$array[4] = $saurabh;
$array[5] = $shiladitya;
$array[6] = $tushar;






$sql="INSERT INTO `vehicle_1`(`temp`, `humidity`, `lat`, `long`) VALUES ('$temp', '$humidity', '$lat', '$long')";

if (!mysql_query($sql)) {
  die('Error: ' . mysql_error($bd));
}
echo "Vote Recorded";

mysql_close($bd);









</table>