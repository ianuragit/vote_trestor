<html>
<head>
<title>
Trestor_voting
</title>
</head>


<body>

  <br> <br> <br>
  <?php 
include 'login_check.php';

$ip=$_SERVER['REMOTE_ADDR'];
echo "IP address= $ip";
echo "<br>";
echo $_SERVER['SERVER_NAME'];


echo "<br>";
echo "<br>";



//$mac = system('arp -an');
//echo $mac;
echo system('arp -an');


?> 
  <br> <br> <br>
<center>
<div id="poll">
<h3>VOTE</h3>
<form action = "vote_trest_index.php" method="POST">


<h1>Aman</h1>

<h3>
1
<input type="radio" name="aman_vote" value="1"  >
2
<input type="radio" name="aman_vote" value="2"  checked>
3
<input type="radio" name="aman_vote" value="3"  >
</h3>
	
	<hr>

<h1>Anurag</h1>

<h3>
1
<input type="radio" name="anurag_vote" value="1"  >
2
<input type="radio" name="anurag_vote" value="2"  checked>
3
<input type="radio" name="anurag_vote" value="3"  >
</h3>
	
	<hr>

<h1>Aritra</h1>

<h3>
1
<input type="radio" name="aritra_vote" value="1"  >
2
<input type="radio" name="aritra_vote" value="2"  checked>
3
<input type="radio" name="aritra_vote" value="3"  >
</h3>

	<hr>

<h1>Arpan</h1>

<h3>
1
<input type="radio" name="arpan_vote" value="1"  >
2
<input type="radio" name="arpan_vote" value="2"  checked>
3
<input type="radio" name="arpan_vote" value="3"  >
</h3>

	<hr>

<h1>Saurabh</h1>

<h3>
1
<input type="radio" name="saurabh_vote" value="1"  >
2
<input type="radio" name="saurabh_vote" value="2"  checked>
3
<input type="radio" name="saurabh_vote" value="3"  >
</h3>

	<hr>

<h1>Shiladitya</h1>

<h3>
1
<input type="radio" name="shiladitya_vote" value="1"  >
2
<input type="radio" name="shiladitya_vote" value="2"  checked>
3
<input type="radio" name="shiladitya_vote" value="3"  >
</h3>

	<hr>

<h1>Tushar</h1>

<h3>
1
<input type="radio" name="tushar_vote" value="1"  >
2
<input type="radio" name="tushar_vote" value="2"  checked>
3
<input type="radio" name="tushar_vote" value="3"  >
</h3>

	<hr>

<input type="submit" value="Next">

</form>
</div>
</center>





</body>
</html>