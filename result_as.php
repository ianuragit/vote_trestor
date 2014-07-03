
<?php
// auto sorted results
include 'login_check.php';
// Making a connection to database

require_once('connection.php');
$i = 0  ;
$temp_name ;
$temp_vote ;
//Name & Variable array
$name = array("Aman","Anurag","Aritra","Arpan","Saurabh","Shiladitya","Tushar");
$name_vote = array("aman_vote","anurag_vote","aritra_vote","arpan_vote","saurabh_vote","shiladitya_vote","tushar_vote");
$vote = array(0,0,0,0,0,0,0);
//Fetching SUM from Columns
while($i < 7) {

$query = "SELECT SUM($name_vote[$i]) FROM trestor_vote"; 
$result = mysql_query($query) or die(mysql_error());
$row = mysql_fetch_array($result);
$vote[$i] = $row[0] ; 

$i++;

} 

// auto sorting in arrays -> vote & name 
for ($x=0; $x<7; $x++) {
	
	for ($y=0; $y<6; $y++) {
  		
  		if ($vote[$y+1] > $vote[$y]){

  			$temp_vote = $vote[$y];
  			$temp_name = $name[$y] ;            
            $vote[$y] = $vote[$y+1];
            $name[$y] = $name[$y+1];
            $vote[$y+1] = $temp_vote;
            $name[$y+1] = $temp_name;
  		}

	} 

} 
echo "<br> <br><br><br>";
    echo "Highest votes <br>";
		echo $name[0]."--".$vote[0]."<br>" ;
    for ($l=1; $l<7; $l++)
      if ($vote[0] == $vote[$l]){
        echo $name[$l]."--".$vote[$l]."<br>" ;
      }

    echo "<hr> <br> Lowest votes <br>";
  	echo $name[6]."--".$vote[6]."<br>" ;
     for ($y=5; $y>=0; $y--)
            if ($vote[6] == $vote[$y]){

              echo $name[$y]."--".$vote[$y]."<br>" ;
            }
  		




mysql_close($bd);

?>