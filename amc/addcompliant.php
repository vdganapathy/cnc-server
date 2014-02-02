<?php

include('lock.php');

include  "connection.php";

 $compname1=$_POST['compname'];

 $compdate1=$_POST['compdate'];

 $compdue1=$_POST['compdue'];
 
 $compstatus1=$_POST['compstatus'];
 
 $compcusphone1=$_POST['compcusphone'];
 
 $techname1=$_POST['techname'];
 
 $compnature1=$_POST['compnature'];
 
 $compcusadd1=$_POST['compcusadd'];
 
  
 
 $techphone1=$_POST['techphone'];
 
 $compnumber1=$_POST['compnumber'];
 
 

$query=mysql_query("INSERT INTO compliantentry(cusname,cusaddress,cusphone,compliantnature,compdate,duedate,technician,status,compliantno,technicianphone) VALUES
('$compname1','$compcusadd1','$compcusphone1','$compnature1','$compdate1','$compdue1','$techname1','$compstatus1','$compnumber1','$techphone1')");


if($query){

echo "Data inserted successfully!";

}

else{ echo "An error occurred!"; }

?>