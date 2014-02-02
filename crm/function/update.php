<?php
 require_once('../db/config.php');
 $q=$_POST["id"];
  $sql2="SELECT * FROM customer WHERE customerid = '$q'";
 $result2 = mysql_query($sql2);
 while($row = mysql_fetch_array($result2))
  {
    echo '<table>';
        echo '<tr>';
            echo '<td>customerid</td><td><input type="text" id="uid" required="required" value="'.$row['customerid'].'"></td>';
        echo '</tr>';
        echo '<tr>';
            echo '<td>customername</td><td><input type="text" id="uname" required="required" value="'.$row['customername'].'"></td>';
        echo '</tr>';
       echo '<tr>';
            echo '<td>address</td><td><input type="text" id="uadd" required="required" value="'.$row['address'].'"></td>';
        echo '</tr>';
        
          echo '<tr>';
            echo '<td>phoneno</td><td><input type="text" id="uphone" required="required" value="'.$row['phoneno'].'"></td>';
        echo '</tr>';
        echo '<tr>';
            echo '<td></td><td><input type="button" value="update" id="cussave" required="required" onclick="finalupdate('.$row[customerid].');"></td>';
        echo '</tr>';
    echo '</table>';
 }
?>


