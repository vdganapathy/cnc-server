
<?php 
require_once('../db/config.php');
function dropdown($click)
{
                            $sql=mysql_query("SELECT * FROM ".$click."");
                            while($row = mysql_fetch_array($sql))
                            {
                                echo "<option value=\"$row[DATA]\">$row[DATA]</option>";
                            }

    
}
?>
<?php
 
 $q=$_POST["id"];
  $sql2="SELECT * FROM product WHERE customerid = '$q'";
 $result2 = mysql_query($sql2);
 while($row = mysql_fetch_array($result2))
  {
     
    echo '<table>';
        echo '<tr>';
            echo '<td>customer id</td><td><input type="text" id="did" required="required" IsReadOnly="True" value="'.$row['customerid'].'"></td>';
        echo '</tr>';
       
      echo '<tr>';
                    echo '<td>
                        Service Type
                    </td>';
                    echo '<td>';
                        echo '<select id="dservice"  name="sertype" required="required">';
                        echo '<option value="'.$row['servicetype'].'">'.$row['servicetype'].'</option>';
                         dropdown(service_type);
                        echo '</select>'; 
                        echo '</td>';
                        echo '</tr>';
                
                 
                
               echo '<tr>';
                    echo '<td>
                        Purchase From
                    </td>';
                    echo '<td>';
                        echo '<select onchange="warranty();" id="dpur"  name="purchasefrom" required="required">';
                            echo '<option value="'.$row['purchasefrom'].'">'.$row['purchasefrom'].'</option>';
                      dropdown(purchase_from);
                        echo '</select> ';
                   echo '</td>';
                echo '</tr>';
       
       
       
       
       
       
       
        
          echo '<tr>';
            echo '<td>date of purchase</td><td><input type="text" id="ddop" required="required" value="'.$row['dateofpurchase'].'"></td>';
        echo '</tr>';
       
      echo '<tr>';
                    echo '<td>
                        Unit Installed At
                    </td>';
                    echo '<td>';
                        
                        echo '<select  id="duiat"  name="unit" required="required">';
                            echo '<option value="'.$row['unitinstalledat'].'">'.$row['unitinstalledat'].'</option>';
                         dropdown(UNIT_INSTALLED_AT);
                        echo '</select>';
                        
                    echo '</td>';
                echo '</tr>';
                
                            
                                    
                    echo '<tr>';
                    echo '<td>
                        Unit Make
                    </td>';
                    echo '<td>';
                        
                        echo '<select  id="dumak"  name="unitmake" required="required">';
                            echo '<option value="'.$row['unitmake'].'">'.$row['unitmake'].'</option>';
                        dropdown(UNIT_MAKE);
                        echo '</select>'; 
                    echo '</td>';
                echo '</tr>';
                

                   echo '<tr>';
                    echo '<td>
                        Capacity
                    </td>';
                    echo '<td>';
                        
                        echo '<select  id="dcap"  name="capacity" required="required">';
                            echo '<option value="'.$row['capacity'].'">'.$row['capacity'].'</option>';
                        dropdown(CAPACITY);
                        echo '</select>';
                        
                   echo '</td>';
                 echo '</tr>';
                 
                 
                 
            echo '<tr>';
                    echo '<td>
                        Star
                    </td>';
                    echo '<td>';
                           echo '<select  id="dstar"  name="star" required="required">';
                            echo '<option value="'.$row['star'].'">'.$row['star'].'</option>';
                         dropdown(STAR);
                        echo '</select>';
                        
                    echo '</td>';
                 echo '</tr>';
                 
                   echo '<tr>';
            echo '<td>model no</td><td><input type="text" id="dmodel" required="required" value="'.$row['modelno'].'"></td>';
        echo '</tr>';
        echo '<tr>';
            echo '<td>serial no</td><td><input type="text" id="dserial" required="required" value="'.$row['serialno'].'"></td>';
        echo '</tr>';
         echo '<tr>';
            echo '<td>compressor model no</td><td><input type="text" id="dcmodel" required="required" value="'.$row['compressorserialno'].'"></td>';
        echo '</tr>';
        
        
     echo '<tr>';
                    echo '<td>
                        AC Type
                    </td>';
                    echo '<td>';
                       echo '<select id="dactype" name="" required="required">';
                        echo '<option value="'.$row['actype'].'">'.$row['actype'].'</option>';
                        dropdown(AC_TYPE);
                        echo '</select>';
                         echo '</td>';
                 echo '</tr>';






          echo '<tr>';
            echo '<td>creation time</td><td><input type="text"id="dtime" required="required" IsReadOnly="True" value="'.$row['creation_time'].'"></td>';
        echo '</tr>';
        echo '<tr>';
            echo '<td></td><td><input type="button" value="save" id="cussave" required="required" onclick="detailupdate('.$row[customerid].');"></td>';
        echo '</tr>';
    echo '</table>';
 }
?>