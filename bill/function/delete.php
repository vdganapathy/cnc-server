<?php
require_once('../db/dbconnect.php');
$poid=$_POST['poid'];
$sql="DELETE FROM customer WHERE po=$poid";
mysql_query($sql,$bd) or die(mysql_error());
$sql="DELETE FROM citems WHERE po=$poid";
mysql_query($sql,$bd) or die(mysql_error());
$sql="DELETE FROM purchaseorder WHERE po=$poid";
mysql_query($sql,$bd) or die(mysql_error());
echo $poid;
?>
