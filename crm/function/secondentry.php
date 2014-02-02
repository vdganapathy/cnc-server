<?php

require_once('../db/config.php');

$sql="INSERT INTO product (customerid,servicetype,purchasefrom,dateofpurchase,unitinstalledat,unitmake,capacity,star,modelno,serialno,compressorserialno,actype,customer_payment_mode,cheque_details,purchase_date,company_dealer_name,cnc_purchase_inv_no,agreement_no) VALUES ('$_POST[cusid]','$_POST[sertype]','$_POST[purchasefrom]','$_POST[dop]','$_POST[unit]','$_POST[unitmake]','$_POST[capacity]','$_POST[star]','$_POST[modelno]','$_POST[serialno]','$_POST[cserialno]','$_POST[actype]','$_POST[cpm]','$_POST[chequedetails]','$_POST[purdate]','$_POST[cdname]','$_POST[cncinvno]','$_POST[agrno]')";
mysql_query($sql) or exit("error inserting on product details");
echo "product updated";
$sql="INSERT INTO service (contractcommenceson,contractconcludeson,customerid) VALUES ('$_POST[commence]','$_POST[conclude]','$_POST[cusid]')";
mysql_query($sql) or exit("error inserting on service details");
echo "service updated";
?>