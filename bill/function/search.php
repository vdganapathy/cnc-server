<?php

require_once('../db/dbconnect.php');
$poid=$_POST['poid'];

$sql="SELECT * FROM customer WHERE po=$poid";
$result=mysql_query($sql,$bd) or die(mysql_error());
echo "<h3>CUSTOMER DETAILS:</h3>";
echo "<table border=\"1\" class=\"gridtable\">";
echo "<tr>";
echo "<th>Name</th><th>Address</th><th>Contact</th><th>Mail-Id</th><th>PO-NUMBER</th><th>Update</th>";
echo "</tr>";
while($row = mysql_fetch_array($result)){
echo "<tr>";
echo "<td>".$row['name']."</td><td>".$row['address']."</td><td>".$row['contact']."</td><td>".$row['mailid']."</td><td>".$row['po']."</td>"."</td><td><img src=\"img/update.png\" onClick=\"updatecustomer(".$row['id'].",this);\"></td>";
echo "</tr>";
}
echo "</table><br>";

$sql="SELECT * FROM citems WHERE po=$poid";
$result=mysql_query($sql,$bd) or die(mysql_error());
echo "<h3>ITEMS DETAILS:</h3>";
echo "<table border=\"1\" id=\"cusitab\" class=\"gridtable\">";
echo "<tr>";
echo "<th>PO-NUMBER</th><th>Tax</th><th>Description</th><th>Quantity</th><th>Price</th><th>Total</th><th>U-Price</th><th>Update</th><th>Delete</th>";
echo "</tr>";
while($row = mysql_fetch_array($result)){
echo "<tr>";
echo "<td>".$row['po']."</td><td>".$row['tax']."</td><td>".$row['description']."</td><td>".$row['q']."</td><td>".$row['p']."</td><td>".$row['tamt']."</td><td>".$row['uprice']."</td><td><img src=\"img/update.png\" onClick=\"updateitem(".$row['id'].",this);\"></td>"."</td><td><img src=\"img/remove.png\" onClick=\"deleteitem(".$row['id'].",this);\"></td>";
echo "</tr>";
}
echo "</table>";



?>
