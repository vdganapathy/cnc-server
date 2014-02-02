<?php
session_start();
require_once('autonoentry.php');
?>
<?php
function dropdown($click)
{
                            $sql=mysql_query("SELECT * FROM ".$click."");
                            while($row = mysql_fetch_array($sql))
                            {
                                echo "<option value=\"$row[DATA]\">$row[DATA]</option>";
                            }

    
}
?>



            
                        <form>
  <fieldset>
    <legend><b>PRODUCT DETAILS</b></legend>
                    
            <table>
                   <tr id="ser">
                    <td>
                        Service Type
                    </td>
                    <td>
                        <select id="<?php echo "sertype".$_SESSION['product'];?>" name="sertype" required="required">
                        echo "<option value=\"--Select Option--\">--Select Option--</option>";
                     <?php dropdown(service_type);?>
                        </select> 
                        </td>
                        </tr>
                
                 
                
                <tr id="pf">
                    <td>
                        Purchase From 
                    </td>
                    <td>
                        <select id="<?php echo "purchasefrom".$_SESSION['product'];?>"  name="purchasefrom" required="required">
                            echo "<option value=\"--Select Option--\">--Select Option--</option>";
                     <?php dropdown(purchase_from);?>
                        </select> 
                    </td>
                </tr>
            
                
                
                    <tr id="dpf">
                    <td>
                        Date of purchase
                    </td>
                    <td>
                        <input type="text" class="datepicker" id="<?php echo "dop".$_SESSION['product'];?>" name="dop" required="required">
                    </td>
                </tr>
                
                
                <tr id="uiat">
                    <td>
                        Unit Installed At
                    </td>
                    <td>
                        
                        <select  id="<?php echo "unit".$_SESSION['product'];?>"  name="unit" required="required">
                            echo "<option value=\"--Select Option--\">--Select Option--</option>";
                        <?php dropdown(UNIT_INSTALLED_AT);?>
                        </select>
                        
                    </td>
                </tr>
                
                            
                                    
                    <tr id="umak">
                    <td>
                        Unit Make
                    </td>
                    <td>
                        
                        <select  id="<?php echo "unitmake".$_SESSION['product'];?>"  name="unitmake" required="required">
                            echo "<option value=\"--Select Option--\">--Select Option--</option>";
                        <?php dropdown(UNIT_MAKE);?>
                        </select> 
                    </td>
                </tr>
                

                   <tr id="cap">
                    <td>
                        Capacity
                    </td>
                    <td>
                        
                        <select  id="<?php echo "capacity".$_SESSION['product'];?>"  name="capacity" required="required">
                            echo "<option value=\"--Select Option--\">--Select Option--</option>";
                        <?php dropdown(CAPACITY);?>
                        </select>
                        
                    </td>
                 </tr>
                 
                 
                 
                 <tr id="str">
                    <td>
                        Star
                    </td>
                    <td>
                        
                        <select  id="<?php echo "star".$_SESSION['product'];?>"  name="star" required="required">
                            echo "<option value=\"--Select Option--\">--Select Option--</option>";
                        <?php dropdown(STAR);?>
                        </select>
                        
                    </td>
                 </tr>
                 
                 
                 
                 
                  <tr id="mn">
                    <td>
                        Model No
                    </td>
                    <td>
                        <input type="text" id="<?php echo "modelno".$_SESSION['product'];?>" name="modelno" required="required">
                    </td>
                 </tr>
                    
                
                
                 <tr id="sn">
                    <td>
                        Serial No
                    </td>
                    <td>
                        <input type="text" id="<?php echo "serialno".$_SESSION['product'];?>" name="serialno" required="required">
                    </td>
                 </tr>
                 
                 
                 
                 
                 <tr id="cmn">
                    <td>
                        Compressor SerialNo
                    </td>
                    <td>
                        <input type="text" id="<?php echo "cserialno".$_SESSION['product'];?>o" name="cserialno" required="required">
                    </td>
                 </tr>  
                 
                 
                 
                         
                 <tr id="ac">
                    <td>
                        AC Type
                    </td>
                    <td>
                       <select id="<?php echo "actype".$_SESSION['product'];?>" name="actype" required="required">
                        echo "<option value=\"--Select Option--\">--Select Option--</option>";
                        <?php dropdown(AC_TYPE);?>
                        </select>
                         </td>
                 </tr>
                 
                 
                 
                 <tr id="cmode">
                    <td>
                        Customer Payment Mode
                    </td>
                    <td>
                        <select  id="<?php echo "cpm".$_SESSION['product'];?>" name="cpm" required="required">
                        <option value="--Select payment mode--">--Select payment mode--</option>
                        <option value="cash">cash</option>
                        <option value="cheque">cheque</option>
                        <option value="creditcard">creditcard</option>
                        <option value="others">others</option>
                        <option value="Nil">Nil</option>
                        </select> 
                    </td>
                    </tr>
                    
                    
                    
                    <tr id="cdet">
                    <td>
                        Cheque Details
                    </td>
                    <td>
                        <input type="text"  id="<?php echo "chequedetails".$_SESSION['product'];?>" name="chequedetails" required="required">
                    </td>
                    </tr>
                    
                <tr>
                    <td>
                        Purchase date from Dealer
                    </td>
                    <td>
                        <input type="text" class="datepicker" id="<?php echo "purdate".$_SESSION['product'];?>" name="purdate" required="required">
                    </td>
                 </tr>
                 
                 
                 <tr>
                    <td>
                        Company / Dealer Name
                    </td>
                    <td>
                        <input type="text" id="<?php echo "cdname".$_SESSION['product'];?>" name="cdname" required="required">
                    </td>
                 </tr>
                 
                
                
                 <tr id="cnc">
                    <td>
                        CNC Pur InvNo
                    </td>
                    <td>
                        <input type="text" id=""<?php echo "cncinvno".$_SESSION['product'];?>"name="cncinvno" required="required">
                    </td>
                 </tr>
                
                
                
                <tr id="ano">
                    <td>
                        Agreement No
                    </td>
                    <td>
                        <input type="text" id="<?php echo "agrno".$_SESSION['product'];?>" name="agrno" required="required">
                    </td>
                 </tr>
                  <tr id="ccn">
                    <td>
                        Contract Commences On
                    </td>
                    <td>
                        <input onclick="checkdate1(this)" onchange="dateset()" type="text" class="datepicker" id="<?php echo "commence".$_SESSION['product'];?>" name="commence" required="required">
                    </td>
                 </tr>



                 <tr id="cco">
                    <td>
                        Contract Concludes On
                    </td>
                    <td>
                        <input type="text" class="datepicker"  id="<?php echo "conclude".$_SESSION['product'];?>" name="conclude" required="required">
                    </td>
                 </tr>
                 
                                <tr>
                    <td>
                        product id - hidden
                    </td>
                    <td>
                        <input type="hidden" class="" id="p_id" name="" IsReadOnly="True">
                    </td>
                 </tr>
                 
        
                  <div id="delete">
    <img id="deleteproduct" style="display:block;float:right" src="http://www.shoppersultimate.com/crm/img/DELETE1.png" onclick="deleteproduct1(4,this)"> 
    </div>

                

                </fieldset>
                        </form>     
                    </table>
        
            

<?php
$_SESSION['product']=$_SESSION['product']+1;
?>
    