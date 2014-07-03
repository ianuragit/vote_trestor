
<?php
// to be run before each voting 
// clears the dtaabase of previous votes
// would be accessible only by admin in the actual structure
require_once('connection.php');

mysql_query("DELETE FROM trestor_vote WHERE aman_vote");

mysql_close($bd);

?>