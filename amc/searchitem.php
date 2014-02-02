<?php

include('lock.php');

$q4=$_GET["q4"];

include  "connection.php";

echo $q4;


$sql="SELECT * FROM productdetails WHERE cusid = '".$q4."'";


$result = mysql_query($sql);


echo "<br><br><table border='1'>
<tr>

<th>ID</th>

<th>Pur-Date</th>
<th>Brand</th>
<th>Ton</th>
<th>Star</th>
<th>Installed at</th>
<th>Model No</th>
<th>Serial No</th>
<th>Agree-No</th>
<th>View Details</th>
<th>Update</th>
</tr> ";

while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
 
  echo "<td>" . $row['cusid'] . "</td>";
 
  echo "<td>" . $row['purchasedate'] . "</td>";
  echo "<td>" . $row['unitmake'] . "</td>";
  echo "<td>" . $row['capacity'] . "</td>";
  echo "<td>" . $row['star'] . "</td>";
  echo "<td>" . $row['unitinstall'] . "</td>";
  echo "<td>" . $row['modelno'] . "</td>";
  echo "<td>" . $row['serialno'] . "</td>";
  echo "<td>" . $row['agreementno'] . "</td>";
  echo "<td>" . $row['servicetype'] . "</td>";
  
  echo "<td>" ."<a href=\"#\" id=\"vd\">View Details</a>". "</td>";
  echo "<td>" ."<input type=\"button\" id=\"ud\" onClick=\"ud(".$row['cusid'].")\" value=\"Update Details\">". "</td>";        
  echo "</tr>";
  }
echo "</table>";




?> 