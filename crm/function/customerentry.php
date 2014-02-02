<?php

require_once('../db/config.php');

$sql="INSERT INTO customer (customername,address,phoneno) VALUES ('$_POST[cusname]','$_POST[address]','$_POST[phone]')";
mysql_query($sql) or exit("error inserting on customer details");
echo "customer updated";


?>