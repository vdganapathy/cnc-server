<?php
session_start();
include_once "../db/config.php";

$t =$_POST['tablename'];
mysql_query("ALTER TABLE ".$t." AUTO_INCREMENT = 1");
$sql=mysql_query("SELECT * FROM ".$t."");
$cnt=mysql_query('SELECT count(*) FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = \''.$t.'\'');
$c="";
while($r=mysql_fetch_array($cnt))
{
	$c=$r['count(*)'];
}
echo "<table border='1'>";
$sche=mysql_query('SELECT column_name from INFORMATION_SCHEMA.columns where table_name= \''.$t.'\'');
$i=0;
while($rs = mysql_fetch_array($sche))
{
	$temp[$i]=$rs['column_name'];
  echo "<tr>";
  echo "<th>" . $rs['column_name'] . "</th>";
	$i++;	
	echo "</tr>";  		
}
 $numrows = (mysql_num_rows($sql));
 if($numrows >= 1)
 {
	for ($r = 0; $r <= $numrows; $r++) 
	{
echo "<tr>";

while($row = mysql_fetch_array($sql))
  {
  	$i=0;
while($i<$c)
{
	if($temp[$i]=="id") 
	{$i++;}
	else 
	{
		
  echo "<tr>";
  echo "<td>" . $row['$i'] . "</td>";
  echo"<td><img alt=\"\" src=\"img/remove.png\" onclick=\"del($row[id])\"> </td>";
  echo "</tr>";
  }$i++;
	}
 } 
	}
 }
 
echo "</table>";
$_SESSION['tbl']=$t;


 
?>