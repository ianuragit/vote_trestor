

<?

require_once('connection.php');

$q=mysql_query("select column from 'vote'",$bd);




while($rs=mysql_fetch_assoc($q))
{
$array= unserialize($rs['column']);
print_r($array);
}
?>