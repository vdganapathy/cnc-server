<?php
require_once('../db/config.php');
$q=$_POST["id1"];

$b=$_POST["detail2"];
$c=$_POST["detail3"];
$d=$_POST["detail4"];
$e=$_POST["detail5"];
$f=$_POST["detail6"];
$g=$_POST["detail7"];
$h=$_POST["detail8"];
$i=$_POST["detail9"];
$j=$_POST["detail10"];
$k=$_POST["detail11"];
$l=$_POST["detail12"];
$m=$_POST["detail13"];
$sql= "UPDATE product SET servicetype='$b',purchasefrom='$c',dateofpurchase='$d',unitinstalledat='$e',unitmake='$f',capacity='$g',star='$h',modelno='$i',serialno='$j',compressorserialno='$k',actype='$l',creation_time='$m' WHERE customerid='$q'";
$result2 = mysql_query($sql);
echo "successfully updated";
?> 