<?php
require_once('../db/dbconnect.php');
$user=$_POST["login_user"];
$pass=$_POST["login_pass"];
$user=stripslashes($user);
$pass=stripslashes($pass);
$user=mysql_real_escape_string($user);
$pass=mysql_real_escape_string($pass);
$sql="SELECT * FROM user WHERE user='$user' and pass='$pass'";
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