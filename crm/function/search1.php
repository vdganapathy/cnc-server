<?php
require_once('../db/config.php');
$q=$_POST["cus"];

if (!(is_numeric($q)))
 {
   
     $sql2="SELECT * FROM customer WHERE customername = '$q'";
       
 } 
else if(is_numeric($q))
 {
   
$sql2="SELECT * FROM customer WHERE customerid= ".$q."";
 
 }

$result2 = mysql_query($sql2);
echo "<table border='1'>
<tr>
<th>ID</th>
<th>Name</th>
<th>Phone</th>
<th>Address</th>
<th>update</th>
<th>view product</th>
</tr>";
while($row = mysql_fetch_array($result2))
  {
  echo "<tr>";
  echo "<td>" . $row['customerid'] . "</td>";
  echo "<td>" . $row['customername'] . "</td>";
  echo "<td>" . $row['phoneno'] . "</td>";
  echo "<td>" . $row['address'] . "</td>";
  echo '<td><img src="img/update.png" onclick="update('.$row[customerid].');"/></td>';
  echo '<td><img src="img/detail.png" onclick="viewproduct('.$row[customerid].');"/></td>';
  echo "</tr>";
  }
echo "</table>";
?>
 