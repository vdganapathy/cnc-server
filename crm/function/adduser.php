<div> 
    <form name="form">
  <fieldset>
    <legend><b>USERDETAILS</b></legend>
              <table>
                  
                     <tr id="name">
                    <td>
                       User Name 
                    </td>
                    
                  
                    <td> <input type="text" id="uname" name="uname" required="required" value="" onkeyup="jumpNext()"> </td>
                 </tr>
                 
                 
                  <tr id="id">
                       <td> 
                      User id 
                    </td>
                    <td>
                        <input type="text" id="uid" required="required" name="uid">
                    </td>
                    </tr>
                    
                    
                 
                
                
                <tr id="date">
                    <td>
                        Date of Join
                    </td>
                    
                    <td>
                    <input type="text" id="dat" name="dat" required="required" value="" onmousedown="checkdate()">
                    </td>
                 </tr>
                        
                    <tr id="pass">
             <td>
                        
                        Password
                    </td>
                    <td>
                        <input type="password" id="passw" name="passw" required="required">
                    </td>
              </tr>
             <div style="float:right;margin-top:150px">
        <input type="button" value="Save" id="save" onclick="checkuser()">
        
</div> 

                </table> 
                 </fieldset>
                        </form>
                  </div>              