<?php
require_once('../db/dbconnect.php');
$iid=$_POST['iid'];
$sql="DELETE FROM citems WHERE id=$iid";
mysql_query($sql,$bd) or die(mysql_error());
echo "REMOVED";
?>
