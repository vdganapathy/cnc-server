<?php
 
include('lock.php');
 
 include  "connection.php";
 
 $techname1=$_POST['techname'];

 $techid1=$_POST['techid'];

 $techdoj1=$_POST['techdoj'];

 $techstatus1=$_POST['techstatus'];
 
 

if (!mysql_query("INSERT INTO technicianentry(name,id,date,status) VALUES('$techname1','$techid1','$techdoj1','$techstatus1')"))
  {
 echo "error";
  }

  
else
{
	echo "1 record added";
}


?>            