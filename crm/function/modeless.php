<?php
session_start();
include_once "../db/config.php";
$t =$_SESSION['tbl'];
$sql=mysql_query('SELECT column_name from INFORMATION_SCHEMA.columns where table_name= \''.$t.'\'');

echo "<table border='1'>";
while($row = mysql_fetch_array($sql))
  {
  	
  echo "<tr>";
  if($row['column_name']=="id")
  {}
  else 
  {
      echo "<td>" . $row['column_name'] . "</td>";
	  echo "<td>".'<input type="text" name="data" id="'.$row[column_name].'" />'."</td>";
  } 
  
    echo "</tr>";
  }
echo "</table>";
echo '<button onclick="ad_data()">Save</button>';
echo $_SESSION['tbl'];

?>	