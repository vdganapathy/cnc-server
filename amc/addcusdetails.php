<?php

include('lock.php');
 
 include  "connection.php";
 
  
 $cusname1=$_POST['cusname'];

 $cusaddress1=$_POST['cusaddress'];

 $cusid1=$_POST['cusid'];

 $cusdop1=$_POST['cusdop'];
 
 $cusphone1=$_POST['cusphone'];
 
 $acinstall1=$_POST['acinstall'];
 
 $brand1=$_POST['brand'];
 
 $accapacity1=$_POST['accapacity'];
 
 $starrate1=$_POST['starrate'];
 
 $modelno1=$_POST['modelno'];
 
 $serialno1=$_POST['serialno'];
 
 $agreeno1=$_POST['agreeno'];
 
 $startcontract1=$_POST['startcontract'];
 
 $endcontract1=$_POST['endcontract'];
 
 $servicetype1=$_POST['servicetype'];
 
 $service1=$_POST['service1'];
 
 $service2=$_POST['service2'];
 
 $service3=$_POST['service3'];
 
 $service4=$_POST['service4'];
 
   
 $compslno1=$_POST['compslno'];
 
 $cncdop1=$_POST['cncdop'];
 
 $cncpurdetails1=$_POST['cncpurdetails'];
 
 $cncinvno1=$_POST['cncinvno'];
 
 $cuspaymode1=$_POST['cuspaymode'];
 
 $amount1=$_POST['amount'];
 
 $chequedetails1=$_POST['chequedetails'];
 
 
if (!mysql_query("INSERT INTO productdetails(cusid,purchasedate,unitinstall,unitmake,capacity,star,modelno,serialno,agreementno,contractstart,contractend,
servicetype, compressorslno, cncdop, cncpurchasedetails, cncpurchaseinvno, paymentmode, amount, chequedetails, 1servicedate, 2servicedate, 3servicedate, 4servicedate, loginuser, usertime) VALUES
('$cusid1','$cusdop1','$acinstall1','$brand1', '$accapacity1', '$starrate1', '$modelno1', '$serialno1', '$agreeno1', 
'$startcontract1', '$endcontract1','$servicetype1', '$compslno1', '$cncdop1', '$cncpurdetails1', '$cncinvno1', '$cuspaymode1' , '$amount1', '$chequedetails1',
'$service1','$service2','$service3','$service4','$login_session', NOW())"))


  {
 echo "error";
  }

  
else
{
	echo "1 record added";
}



$sql="SELECT * FROM customer WHERE cusid = $cusid1";

$result = mysql_query($sql);


$row = mysql_fetch_array($result);
   
    
if ($row['cusid']!=$cusid1)
{
		mysql_query("INSERT INTO customer(customername,cusid,address,phone,loginuser, usertime) VALUES ('$cusname1','$cusid1','$cusaddress1','$cusphone1','$login_session',NOW())");
        echo " (New customer)";	
}



?>            