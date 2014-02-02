<?php

//include('lock.php');

$q=$_GET["q"];

$q2=$_GET["q2"];

$q3=$_GET["q3"];


include  "../db/config.php";


$sql2="SELECT * FROM customer WHERE cusid = '".$q."' or customername = '".$q2."' or phone = '".$q3."'";





$result2 = mysql_query($sql2);


echo "<table border='1'>
<tr>

<th>ID</th>
<th>Name</th>
<th>Phone</th>
<th>Address</th>
<th>View Details</th>
<th>Add Item</th>
</tr> ";

while($row = mysql_fetch_array($result2))
  {
  echo "<tr>";
    
  echo "<td>" . $row['cusid'] . "</td>";
  echo "<td>" . $row['customername'] . "</td>";
  echo "<td>" . $row['phone'] . "</td>";
  echo "<td>" . $row['address'] . "</td>";
  
  echo "<td>" ."<a href=\"#\" id=\"vd\" onClick=\"getproduct(".$row['cusid'].");\">View Details</a>". "</td>";
  $cusname=$row['customername'];
  $str1="<td><a href=\" /searchcustomer.php?ide1=".$row['cusid']."\" id=\"\vd1\" >Add Item</a></td>";
echo $str1;

  //$str1="<td><a href=\" /AMC-7-may-13/searchcustomer.php\" id=\"\vd1\" onClick=\"additem(".$row['cusid'].",'".$cusname."')\">update1</a></td>";
         
  echo "</tr>";
  }
echo "</table>";



?> 