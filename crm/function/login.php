<?php
session_start();
require_once('../db/config.php');
$login = mysql_query("SELECT * FROM userverify WHERE (userid = '" . mysql_real_escape_string($_POST['userid']) . "') and (password = '" . mysql_real_escape_string(md5($_POST['password'])) . "')");
if (mysql_num_rows($login) == 1) {

$_SESSION['userid'] = $_POST['userid'];
$_SESSION['username'] = $row['user_name'];
echo "1";
}
else 
	{
	    echo "0";
	}

?>