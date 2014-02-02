<?php
include_once("dbconnect.php");
$tbl=$_POST['tbl'];
session_start();

if($_SESSION['tbl']=="main")
{
$sql="DROP TABLE $tbl";
mysql_query($sql) or exit("Error deleting table.... ");
echo "Table  deleted successfully";
}
else {
	
$sql="DELETE FROM ".$_SESSION['tbl']." WHERE id=$tbl";
mysql_query($sql) or exit("Error deleting table.... ");
echo "deleted successfully";
	
}





?>