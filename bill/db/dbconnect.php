<?php
  
$mysql_hostname = "localhost";
$mysql_user = "shoppkd8_gana";
$mysql_password = "v.d.Sudb888";
$mysql_database = "shoppkd8_po";

$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Opps some thing went wrong");
mysql_select_db($mysql_database, $bd) or die("Opps some thing went wrong");

?>