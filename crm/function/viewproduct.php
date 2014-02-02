<?php
require_once('../db/config.php');
$q=$_POST["id"];
$sql2="SELECT * FROM product WHERE customerid = '$q'";
$result2 = mysql_query($sql2);
while($row = mysql_fetch_array($result2))
  {
      echo "<table border='1'>
<tr>
<th>customerid</th>
<th>servicetype</th>
<th>purchasefrom</th>
<th>date of purchase</th>
<th>unit installed at</th>
<th>unit make</th>
<th>capacity</th>
<th>star</th>
<th>model no</th>
<th>serial no</th>
<th>compressor serialno</th>
<th>actype</th>
<th>creationtime</th>
<th>customer payment mode</th>
<th>cheque details</th>
<th>purchase date</th>
<th>agreementno</th>
<th>cnc purchase inv no</th>
<th>company dealer name</th>
<th>product id</th>
<th>update</th>
</tr>";
echo "<tr>";
echo "<td>" . $row['customerid'] ."</td>";
echo "<td>" . $row['servicetype'] ."</td>";
echo "<td>" . $row['purchasefrom'] ."</td>";
echo "<td>" . $row['dateofpurchase'] ."</td>";
echo "<td>" . $row['unitinstalledat'] ."</td>";
echo "<td>" . $row['unitmake'] ."</td>";
echo "<td>" . $row['capacity'] ."</td>";
echo "<td>" . $row['star'] ."</td>";
echo "<td>" . $row['modelno'] ."</td>";
echo "<td>" . $row['serialno'] ."</td>";
echo "<td>" . $row['compressorserialno'] ."</td>";
echo "<td>" . $row['actype'] ."</td>";
echo "<td>" . $row['creation_time'] ."</td>";
echo "<td>" . $row['customer_payment_mode'] ."</td>";
echo "<td>" . $row['cheque_details'] ."</td>";
echo "<td>" . $row['purchase_date'] ."</td>";
echo "<td>" . $row['agreement_no'] ."</td>";
echo "<td>" . $row['cnc_purchase_inv_no'] ."</td>";
echo "<td>" . $row['company_dealer_name'] ."</td>";
echo "<td>" . $row['id'] ."</td>";


echo '<td><img src="img/save.png" onclick="detail('.$row[customerid].');"/></td>';
echo "</tr>";

echo "</table>";
      
  }