<?php
require_once('db/dbconnect.php');
date_default_timezone_set('Asia/Kolkata');
$date = date('d-m-Y');

$query = "SELECT MAX(po) FROM customer"; 
$result = mysql_query($query) or die(mysql_error());
while($row = mysql_fetch_array($result)){
$po=$row['MAX(po)']+1;

}
?>