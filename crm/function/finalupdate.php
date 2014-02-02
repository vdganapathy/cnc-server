<?php
require_once('../db/config.php');
$q=$_POST["id1"];
$r=$_POST["updatename"];
$s=$_POST["updateadd"];
$t=$_POST["updatephone"];

$sql="UPDATE customer SET customername='$r', address='$s',phoneno='$t' WHERE customerid='$q'";
$result2 = mysql_query($sql);
echo "success";
?> 