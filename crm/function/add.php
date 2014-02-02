<?php
session_start(); 
include_once "../db/config.php";

$t =$_SESSION['tbl'];
$sql=mysql_query('SELECT column_name from INFORMATION_SCHEMA.columns where table_name= \''.$t.'\'');
$temp= array();
$buf=array();
$c="";
$value=$_GET['count'];

$cnt=mysql_query('SELECT count(*) FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = \''.$t.'\'');
while($r=mysql_fetch_array($cnt))
{
	$c=$r['count(*)'];
}

$i=0;
while($row = mysql_fetch_array($sql))
{
	 
  	$temp[$i]=$row['column_name'];
	$i++;
 		  		
}
 




$i=0;
while($i<$c)
	{
	
	if($temp[$i]=="id") 
	{$i++;}
	else 
	{	 for($j=0;$j<$value;$j++)
	{
	echo "i=".$i;
	$buf[$j]=  $_GET[t.$j];
	
	
	
	$tempid.=$temp[$i].",";
	$tempbuff.=$buf[$j]."','";
	
	if($i==$value)
	{
		$tempid=rtrim($tempid,',');
	$tempbuff=substr($tempbuff,0,-3);

	


	mysql_query("INSERT INTO $_SESSION[tbl] ($tempid) VALUES('$tempbuff')") or exit("Error....check.....");
	echo "INSERT INTO $_SESSION[tbl] ($tempid) VALUES('$tempbuff')";
	}
	 $i++;
	
	}
	 
	}
	
	}
 		 
    
echo $_SESSION[tbl];
?>