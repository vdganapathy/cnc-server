<?php
require_once('../db/dbconnect.php');
$sql="INSERT INTO citems (po,tax,description,q,p,tamt,uprice) VALUES ('$_POST[ponumber]','$_POST[tax]','$_POST[desc]','$_POST[q]','$_POST[p]','$_POST[tamt]','$_POST[uprice]')";

$result = mysql_query( $sql,$bd);
if(! $result )
{
  die('Could not enter data: ' . mysql_error());
}
?>