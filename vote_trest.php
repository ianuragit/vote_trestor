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

$array = array();
$array[0] = $aman;
$array[1] = $anurag;
$array[2] = $aritra;
$array[3] = $arpan;
$array[4] = $saurabh;
$array[5] = $shiladitya;
$array[6] = $tushar;



$array_string=mysql_escape_string(serialize($array));
//$sql = "";
//mysql_query("insert into table (column) values($array_string)",$bd);
$sql="INSERT INTO `vote`('column') VALUES ('$array_string')";
mysql_query($sql, $bd);



/*$astring = implode("','",$array);
$astringtwo = "'".$astring."'";
mysql_query("insert into atable VALUES (".$astringTwo.")");*/




if (!mysql_query($sql)) {
  die('Error: ' . mysql_error($bd));
}
echo "Vote Recorded";

mysql_close($bd);










//inserting votes to txt file
$insertvote = $aman."||".$anurag."||".$aritra."||".$arpan."||".$saurabh."||".$shiladitya."||".$tushar;
$fp = fopen($filename,"w");
fputs($fp,$insertvote);
fclose($fp);

?>