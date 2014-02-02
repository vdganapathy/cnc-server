<?php
include_once("dbconnect.php");
session_start();
$tbl=$_POST["tbl"];


if($_SESSION['tbl']=="main")
{

$sql="CREATE TABLE $tbl(id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,col mediumtext)";

mysql_query($sql) or exit("Error Creating.... ");
echo "Table  inserted successfully";
}
else {
$sql = "INSERT INTO ".$_SESSION['tbl']." (col) VALUES ('$tbl')";
mysql_query($sql) or exit("Error Creating.... ");
echo "Table  inserted successfully";
	
}

?> 