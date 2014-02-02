<?php
session_start(); 
include_once "../db/config.php";

$sql=mysql_query("DELETE FROM $_SESSION[tbl] WHERE id=('$_POST[item]')");


echo $_SESSION[tbl];
?>





