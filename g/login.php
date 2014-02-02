<?php
require_once('db/dbconnect.php');

$pass=$_POST["pass"];
$pass=stripslashes($pass);
$pass=mysql_real_escape_string($pass);
$pass=md5($pass);
$sql="SELECT * FROM login WHERE col='$pass'";
$result=mysql_query($sql);
$count=mysql_num_rows($result);
if($count==1){
echo "1";
}
else
{
echo "Invalid Account Selection.";
}
?>