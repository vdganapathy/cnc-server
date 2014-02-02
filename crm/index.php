<?php
session_start();
$_SESSION['product']=1;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Cache-Control" content="no-store" />
<meta http-equiv="Pragma" content="no-cache"/>
<meta http-equiv="Expires" content="-1"/>
<meta http-equiv="Expires" content="Sat, 1 Jan 2000 00:00:00 GMT" />


         <meta charset="utf-8" />
         <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
         <link rel="stylesheet" href="css/jquery-ui.css" />
         <script src="js/jquery-1.9.1.js"></script>
       
         <script src="js/jquery-ui.js"></script>
        <script src="js/vim.js"></script>       
         
         <link rel="stylesheet" href="css/crm.css"/>
         <script src="js/crm.js"></script>
 <script>
window.onbeforeunload = function (e) {
    e = e || window.event;

    // For IE and Firefox prior to version 4
    if (e) {
        e.returnValue = 'Sure?';
    }

    // For Safari
    return 'Sure?';
};
 
</script>
         
         
    </head>
      <body>
<div id="login" style="display:block">
<div style="width:400px;height:300px;background:#FFFFFF;position:fixed;display:block;top: 50%;left: 50%;margin-left:-200px;margin-top:-150px;">
<div style="background:black;color:#ffffff;padding:5px;">LOGIN</div>
    <div style="padding: 50px;">
    <table class="login">
        <tr>
            <td>USER-ID</td><td><input type="text" id="login_user"></td>
        </tr>
        <tr>
            <td>PASSWORD</td><td><input type="password" id="login_pass" onkeypress="return checkSubmit(event)"></td>
        </tr>
       
       <tr>
            <td></td><td><input type="button" value="login" id="loginbtn" class="classsave" onclick="start()"></td>
        </tr>
        <tr>
            <td></td><td id="login_data"></td>
        </tr>
   
    </table>
 </div>
</div>
</div>
<div id="main">
    
</div>

 </body>
    </html>