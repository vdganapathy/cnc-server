<?php
include_once("dbconnect.php");
session_start();
$tbl=$_SESSION['tbl'];

echo "<table class=\"box\">";

if($tbl=="main")
{
$sql="SELECT table_name FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = 'shoppkd8_g'";
$result = mysql_query($sql) or die(mysql_error());
while($row = mysql_fetch_array($result))
	 {
            echo '<tr><td onclick="gajax(\'db/select.php\',\'main\',\''.$row['table_name'].'\');"><span >'.$row['table_name'].'</span><img  style="float: right;"  id="del" src="img/close.png"
	    onclick="deltask(\''.$row["table_name"].'\');"></td></tr>';
}
	 $_SESSION['tbl']="main";
}
else
{
	
	$sql="SELECT id,col FROM $tbl";
	$result = mysql_query($sql) or die(mysql_error());
while($row = mysql_fetch_array($result))
{
            echo '<tr><td><span >'.$row['col'].'</span><img  style="float: right;"  id="del" src="img/close.png"
	    onclick="deltask(\''.$row["id"].'\');"></td></tr>';
}
$_SESSION['tbl']=$tbl;
}
echo "</table>";
?>
