<html>
<head>

<script>
function getVote(int) {
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("poll").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","vote_trestor.php?vote="+int,true);
  xmlhttp.send();
}
</script>
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
<form>
Aman
<br>
1
<input type="checkbox" name="vote" value="1" onclick="getVote(this.value)">
2
<input type="checkbox" name="vote" value="2" onclick="getVote(this.value)">
3
<input type="checkbox" name="vote" value="3" onclick="getVote(this.value)">
<br><br>
Anurag
<br>
1
<input type="radio" name="vote" value="4" onclick="getVote(this.value)">
2
<input type="radio" name="vote" value="5" onclick="getVote(this.value)">
3
<input type="radio" name="vote" value="6" onclick="getVote(this.value)">
<br><br>
Aritra
<br>
1
<input type="radio" name="vote" value="7" onclick="getVote(this.value)">
2
<input type="radio" name="vote" value="8" onclick="getVote(this.value)">
3
<input type="radio" name="vote" value="9" onclick="getVote(this.value)">
<br><br>
Arpan
<br>
1
<input type="radio" name="vote" value="10" onclick="getVote(this.value)">
2
<input type="radio" name="vote" value="11" onclick="getVote(this.value)">
3
<input type="radio" name="vote" value="12" onclick="getVote(this.value)">
<br><br>
Saurabh
<br>
1
<input type="radio" name="vote" value="13" onclick="getVote(this.value)">
2
<input type="radio" name="vote" value="14" onclick="getVote(this.value)">
3
<input type="radio" name="vote" value="15" onclick="getVote(this.value)">
<br><br>
Shiladitya
<br>
1
<input type="radio" name="vote" value="16" onclick="getVote(this.value)">
2
<input type="radio" name="vote" value="17" onclick="getVote(this.value)">
3
<input type="radio" name="vote" value="18" onclick="getVote(this.value)">
<br><br>
Tushar
<br>
1
<input type="radio" name="vote" value="19" onclick="getVote(this.value)">
2
<input type="radio" name="vote" value="20" onclick="getVote(this.value)">
3
<input type="radio" name="vote" value="21" onclick="getVote(this.value)">
<br><br>

</form>
</div>

</body>
</html>