<?php

require_once('../db/config.php');
$query = "SELECT MAX(customerid) FROM customer"; 
$result = mysql_query($query) or die(mysql_error());
while($row = mysql_fetch_array($result)){
$customerid=$row['MAX(customerid)']+1;

}

?>