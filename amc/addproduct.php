<?php
 
include('lock.php');
 
 include  "connection.php";
 
 $brand1=$_POST['brand'];

 $model1=$_POST['model'];

 $type1=$_POST['type'];
 
if (!mysql_query("INSERT INTO productentry(manufacturer,model,actype) VALUES('$brand1','$model1','$type1')"))

 {
 echo "error";
  }

  
else
{
	echo "1 record added";
}

?>