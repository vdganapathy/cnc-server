<?php

require_once('../db/config.php');
$check=md5($_POST[passw]);
$sql="INSERT INTO userverify (userid,date_of_join,user_name,password) VALUES ('$_POST[uid]','$_POST[dat]','$_POST[uname]','$check')";
mysql_query($sql) or exit("error inserting on customer details");
echo "successfully updated";
?>