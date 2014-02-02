

 <?php
require_once('autonoentry.php');
?>


              <div id="customer" style="display: block"> 
    <form>
  <fieldset>
    <legend><b>CUSTOMER DETAILS</b></legend>
                     <table id="producttab">
                    <tr>
                       <td> 
                        Customer Name
                    </td>
                    <td>
                        <input type="text" id="cusname" required="required" name="cusname">
                    </td>
                    </tr>
                    
                    
                    <tr>
                    <td>
                        Customer Id
                    </td>
                    
                  
                    <td> <input type="text" id="cusid" name="cusid" required="required" value="<?php echo $customerid; ?>" IsReadOnly="True"> </td>
                
                </tr>
                
                
                <tr>
                    <td>
                        Address
                    </td>
                    
                    <td>
                    <textarea id="address" name="address"  rows="1" cols="20" required="required"></textarea> 
                    </td>
                        
                    
                    
                    </tr>
                        
                    <tr>
                    
                    <td>
                        Phone No
                    </td>
                    <td>
                        <input type="text" id="phone" name="phone" required="required">
                    </td>
                    
                </tr>

                
                </table> 
                 </fieldset>
                        </form>
                        </div>   
                        
                        

                
                

<div id="product" style="display: block" > <!-- 2 div starts -->
     </div> <!--  2 div ends -->
            

   

                    
                    
            



 
           
            
           