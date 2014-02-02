<?php

require_once('../db/dbconnect.php');
$sql="INSERT INTO customer (name,address,contact,mailid,po) VALUES ('$_POST[cusname]','$_POST[address]','$_POST[phone]','$_POST[email]','$_POST[ponumber]')";
mysql_query($sql,$bd);

$sql="INSERT INTO purchaseorder (po,podate,invoiceno,invoicedate,deliveryaddress,subtotal,vat5,vat14,cst,round,total,inwords) VALUES ('$_POST[ponumber]','$_POST[podate]','$_POST[invoiceno]','$_POST[invoicedate]','$_POST[deliveryaddress]','$_POST[subtotal]','$_POST[vat5]','$_POST[vat14]','$_POST[cst]','$_POST[round]','$_POST[total]','$_POST[inwords]')";
mysql_query($sql,$bd);

?>
