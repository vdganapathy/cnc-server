<?php

$con = mysql_connect("localhost","shoppkd8_gana","v.d.Sudb888");

 if (!$con) {
 die('Could not connect: ' . mysql_error());
 }

 mysql_select_db("shoppkd8_crm", $con);
 
  
 ?>