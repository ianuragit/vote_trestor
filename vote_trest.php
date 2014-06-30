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


$array = array("foo", "bar", "hello", "world");
$conn=mysql_connect('localhost', 'mysql_user', 'mysql_password');
mysql_select_db("mysql_db",$conn);
$array_string=mysql_escape_string(serialize($array));
mysql_query("insert into table (column) values($array_string)",$conn);




$sql="INSERT INTO `vehicle_1`(`temp`, `humidity`, `lat`, `long`) VALUES ('$temp', '$humidity', '$lat', '$long')";

if (!mysql_query($sql)) {
  die('Error: ' . mysql_error($bd));
}
echo "Vote Recorded";

mysql_close($bd);










if ($vote == 0) {
  $yes = $yes + 1;
}
if ($vote == 1) {
  $no = $no + 1;
}

//inserting votes to txt file
$insertvote = $aman."||".$anurag."||".$aritra."||".$arpan."||".$saurabh."||".$shiladitya."||".$tushar;
$fp = fopen($filename,"w");
fputs($fp,$insertvote);
fclose($fp);
?>



<h2>Result:</h2>
<table>
<tr>
width='<?php echo(100*round($yes/($no+$yes),2)); 
<td>Yes:</td>
<td>
<img src="poll.gif"?>'
height='20'>
<?php echo(100*round($yes/($no+$yes),2)); ?>%
</td>
</tr>
<tr>
<td>No:</td>
<td>
<img src="poll.gif"
width='<?php echo(100*round($no/($no+$yes),2)); ?>'
height='20'>
<?php echo(100*round($no/($no+$yes),2)); ?>%
</td>
</tr>
</table>