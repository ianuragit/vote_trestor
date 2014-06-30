<html>
<head>

<title>
Trestor_voting
</title>
</head>


<body>

  <br> <br> <br>
  <?php 

$ip=$_SERVER['REMOTE_ADDR'];
echo "IP address= $ip";
echo "<br>";
echo $_SERVER['SERVER_NAME'];


echo "<br>";
echo "<br>";



$mac = system('arp -an');
echo $mac;


?> 
  <br> <br> <br>

<div id="poll">
<h3>VOTE YOUR Preferences</h3>
<form action = "vote_trest.php" method="POST">
Aman
<br>
1
<input type="checkbox" name="aman_vote" value="1"  >
2
<input type="checkbox" name="aman_vote" value="2"  >
3
<input type="checkbox" name="aman_voote" value="3"  >
<br><br>
Anurag
<br>
1
<input type="checkbox" name="anurag_vote" value="1"  >
2
<input type="checkbox" name="anurag_vote" value="2"  >
3
<input type="checkbox" name="anurag_vote" value="3"  >
<br><br>
Aritra
<br>
1
<input type="checkbox" name="aritra_vote" value="1"  >
2
<input type="checkbox" name="aritra_vote" value="2"  >
3
<input type="checkbox" name="aritra_vote" value="3"  >
<br><br>
Arpan
<br>
1
<input type="checkbox" name="arpan_vote" value="1"  >
2
<input type="checkbox" name="arpan_vote" value="2"  >
3
<input type="checkbox" name="arpan_vote" value="3"  >
<br><br>
Saurabh
<br>
1
<input type="checkbox" name="saurabh_vote" value="1"  >
2
<input type="checkbox" name="saurabh_vote" value="2"  >
3
<input type="checkbox" name="saurabh_vote" value="3"  >
<br><br>
shiladityaditya
<br>
1
<input type="checkbox" name="shiladitya_vote" value="1"  >
2
<input type="checkbox" name="shiladitya_vote" value="2"  >
3
<input type="checkbox" name="shiladitya_vote" value="3"  >
<br><br>
Tushar
<br>
1
<input type="checkbox" name="tushar_vote" value="1"  >
2
<input type="checkbox" name="tushar_vote" value="2"  >
3
<input type="checkbox" name="tushar_vote" value="3"  >
<br><br>
<input type="submit" value="Submit">
</form>
</div>

</body>
</html>