<?php

require_once('../db/dbconnect.php');


$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Opps some thing went wrong");
mysql_select_db($mysql_database, $bd) or die("Opps some thing went wrong");


$a=$_POST["sear"];


$result = mysql_query("SELECT name,address,contact,mailid FROM customer WHERE po=$a ");
 while($row = mysql_fetch_array($result))
  {
$name=$row['name'];
$add=$row['address'];
$con=$row['contact'];
$mail=$row['mailid'];

  }
  
  
$result1 = mysql_query("SELECT po,podate,invoiceno,invoicedate,deliveryaddress,subtotal,vat5,vat14,cst,round,total,inwords FROM purchaseorder WHERE po=$a");
 while($row1 = mysql_fetch_array($result1))
  {
$po=$row1['po']  ;
$podate=$row1['podate'];
$invoiceno=$row1['invoiceno'];
$invoicedate=$row1['invoicedate'];
$deliveryaddress=$row1['deliveryaddress'];
$subtotal=$row1['subtotal'];
$vat5=$row1['vat5'];
$vat14=$row1['vat14'];
$cst=$row1['cst'];
$round=$row1['round'];
$total=$row1['total'];
$inwords=$row1['inwords'];

}

?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>


</head>


<body>





<div id="main" style=" width:700px; background-color: lightblue;" align="center"><!--starting div-->




<div id="free" style="width:700px; height:180px;"> 




</div>

<div id="to" style="width:300px; background-color: lightblue; float:left" align="left"><?php echo $name ."<br/>" . $add ."<br/>" . $con ."<br/>" . $mail; ?><!--to div-->
</div> <!--to div closing-->

<div align="right" id="to1" style="width:295px; height:200px; float:right";><!--to1 opning-->
<div id="ino" style="width:150px; float:left;" align="center"><?php echo $invoiceno."<br/>"."<br/>";?> </div><div id="indt" style="width:145px; float:right;"><?php echo $invoicedate."<br/>"; ?></div>
<div id="pno" style="width:150px; float:left;" align="center"><?php echo $po."<br/>"."<br/>";?> </div><div id="pndt" style="width:145px; float:right;"><?php echo $podate."<br/>";?></div>


<div align="right" id="dad" style="width:295px; float:right";><?php echo $deliveryaddress;?> </div>

</div><!--to1 closing-->
</div><!--closing div-->
<div id="ite" style="width:700px; height:400px; background-color: lightblue; float:left"><!--item main div-->
<div id="sno" style="width:95px; float:left;" align="left">
<?php      
$c=0;
$result2 = mysql_query("SELECT po,description,q,p,tamt FROM citems WHERE po=$a ");
 while($row2 = mysql_fetch_array($result2))
  {
  $c=$c+1;
echo $c ."<br/>";
  }
  
          ?>
</div>



<div id="des" style="width:300px; float:left"><!--des div-->
<?php      
$result2 = mysql_query("SELECT po,description,q,p,tamt FROM citems WHERE po=$a ");
 while($row2 = mysql_fetch_array($result2))
  {
 echo  $row2['description']."<br>";
  }
          ?>
</div><!--des closing-->





<div id="qty" style="width:100px; float:left"><!--qy div-->
<?php      
$result2 = mysql_query("SELECT po,description,q,p,tamt FROM citems WHERE po=$a ");
 while($row2 = mysql_fetch_array($result2))
  {
 echo  $row2['q']."<br>";
  }
          ?>
		  </div><!--qty closing-->
		  
		  
		  
		  
		  
		  
<div id="pri" style="width:100px; float:left"><!--pri open div-->
<?php      
$result2 = mysql_query("SELECT po,description,q,p,tamt,uprice FROM citems WHERE po=$a ");
 while($row2 = mysql_fetch_array($result2))
  {
 echo  $row2['uprice']."<br>";
  }
          ?>
		  </div><!--pri closing-->
<div id="amoun" style="width:100px; float:left"><!--amt div-->





<?php      
$result2 = mysql_query("SELECT tamt FROM citems WHERE po=$a ");
 while($row2 = mysql_fetch_array($result2))
  {
 echo   $row2['tamt']."<br>";
  }
          ?>
		  </div><!--amt closing-->

</div><!--item closing-->





















<div id="footer" style="width:700px; background-color: lightblue; float:left" align="right"><!--foote  div-->
<div id="words" style="width:500px; float:left" align="left">
<?php echo "<br>".$inwords;?>
</div>
<div style="width:150px; float:left" align="right">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
<div id="sub" style="width:50px; float:left" align="left">
<?php echo "<br/>".$subtotal ."<br/>".$vat14."<br/>".$vat5."<br/>".$cst."<br/>".$round."<br/><br/><br/>".$total;?>

</div>




</div><!--footer closing-->








</body>
</html>