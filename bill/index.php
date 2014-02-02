<?php
require_once('function/getdata.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8"> 
<LINK rel="SHORTCUT ICON" href="http://www.shoppersultimate.com/img/logoicon1.png">
<title>RS &amp; CO - PURCHASE ORDER</title>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bill.js"></script>
<link rel="stylesheet" type="text/css" href="css/stylesheet.css"> 
</head>
<body>
<div class="ghilt" style="display:none">
<div id="loginview" style="width:400px;height:300px;background:#FFFFFF;position:fixed;display:block;top: 50%;left: 50%;margin-left:-200px;margin-top:-150px;">
<div style="background:black;color:#ffffff;padding:5px;">LOGIN</div>
    <div style="padding: 50px;">
    <table class="login">
        <tr>
            <td>USER-ID</td><td><input type="text" id="login_user"></td>
        </tr>
        <tr>
            <td>PASSWORD</td><td><input type="password" id="login_pass"></td>
        </tr>
        <tr>
            <td></td><td><a href="javascript:void(0);" onclick="login();"  id="loginbtn" class="classsave">LOGIN</a></td>
        </tr>
        <tr>
            <td></td><td id="login_data"></td>
        </tr>
   
    </table>
 </div>
</div>
</div>

<div class="header">
<img src="img/logo.png" style="float: left;vertical-align: middle;"><h2 class="Three-Dee">PURCHASE ORDER</h2>
</div>

<div class="gcenter">
    
<div style="width:500px;height:400px;display: inline-block;">

<fieldset style="height:400px;">
  <legend>CUSTOMER INFO</legend>
<input type="hidden" id="count"  value="1">

<table  class="gen">
	<tr>
		<td>Customer Name</td>
		<td>:</td>
		<td><input type="text" id="cusname" autofocus="autofocus" required="required"></td>
	</tr>
	<tr>
		<td>Address</td>
		<td>:</td>
		<td><textarea id="address" required="required" ></textarea></td>
	</tr>
	<tr>
		<td>Phone</td>
		<td>:</td>
		<td><input type="text" id="phone" required="required" ></td>
	</tr>
	<tr>
		<td>Email Id</td>
		<td>:</td>
		<td><input type="text" id="email" ></td>
	</tr>
   
 </table>   
 </fieldset>	 
  </div>




<div style="width:500px;height:400px;display: inline-block;">
	<fieldset style="height:400px;">
  <legend>PO INFO</legend>
<table  class="gen">
	<tr>
		<td>PO Number</td>
		<td>:</td>
		<td><input type="text" required="required" id="ponumber"  value="<?php echo $po; ?>"></td>
	</tr>
	<tr>
		<td>PO Date</td>
		<td>:</td>
		<td><input type="text" required="required" id="date" value="<?php echo $date; ?>"></td>
	</tr>
	
	<tr>
		<td>Invoice Number</td>
		<td>:</td>
		<td><input type="text" required="required" id="invno"  value="<?php echo $po; ?>"></td>
	</tr>
   <tr>
		<td>Invoice Date</td>
		<td>:</td>
		<td><input type="text" required="required" id="date1"  value="<?php echo $date; ?>"></td>
	</tr>
	<tr>
		<td>Delivery At</td>
		<td>:</td>
		<td> <textarea id="dadd" required="required" ></textarea></td>
                <td> <a href="javascript:void(0);" onclick="add();" title="Same" class="classsave">SAME</a></td>
	</tr>
	
 </table>
 </fieldset>	 		
</div>

</div>

<div class="gcenter">
	<div style="display: inline-block;margin-top: 10px;">
<fieldset style="width: 1000px;">
  <legend>ITEM INFO</legend>
<table id="itemtab"  class="geni">
	<tr>
		<td>Vat:</td>
		<td><select id="tax1" onchange="gcalc();">
  <option value="14.5">14.5</option>
  <option value="5">5</option>  
  <option value="2">2</option> 
</select></td>
		<td>Desc</td>
		<td><textarea style="height: 60px;" id="d1" required="required" ></textarea></td>
		<td>Quantity</td>
		<td><input type="text"  style="width:30px;"  id="q1" required="required"  onkeyup="gcalc();" ></td>
		<td>Price</td>
		<td><input type="text" style="width:50px;" id="p1"   onkeyup="gcalc();" required="required"  ></td>
		<td>U.Rate</td>
		<td><input type="text" id="uprice1"  style="width:60px;" required="required"></td>
		<td> Amount</td>
		<td><input type="text"  id="a1"   style="width:60px;" required="required"></td>
		<td><img src="img/remove.png"  alt="" onclick="gremove(2,this);"></td>
	</tr>
</table>

 
<p>  </p>
<br>
 </fieldset>
<br>
</div>
</div>

<div class="gcenter">
<fieldset  style="display: inline-block;">
  <legend>BILLING INFO</legend>	

<table class="gen">
	<tr>
		<td>Sub Total</td>
		<td>:</td>
		<td><input type="text" id="subtotal"  ></td>
	</tr>
	<tr>
		<td>Vat@5%</td>
        <td>:</td>
        <td><input type="text" id="vat1"   ></td>
    </tr>
	<tr>
		<td>Vat @14.5%</td>
		<td>:</td>
		<td><input type="text" id="vat2" ></td>
	</tr>
	<tr>
		<td>CST @ 2%</td>
		<td>:</td>
		<td><input type="text" id="cst" ></td>
	</tr>
	<tr>
		<td>Round Off</td>
		<td>:</td>
		<td><input type="text" id="round" ></td>
	</tr>
	<tr>
		<td>Total</td>
		<td>:</td>
		<td><input type="text" id="total" ></td>
	</tr>
	<tr>
		<td>In Words</td>
		<td>:</td>
		<td><input type="text" id="words" style="width: 400px" onclick="gninw();"><br></td>
	</tr>
	
</table>
</fieldset>
<br>
<br>
<br>
<br>
<br>
<br>
</div> 


<div id="gen" style="text-align:center">

<form id="printfrm" action="function/print.php" method="post" style="display:inline;"><input type="text" value="" id="sear"  name="sear"></form>
<a href="javascript:void(0);" class="classprint" id="printbtn">PRINT</a>
<a href="javascript:void(0);" id="savebtn"   class="classsave">SAVE<img id="load"  src="img/loading.gif" alt="" style="display:none;vertical-align: middle;margin-left: 5px;"></a>
<a href="javascript:void(0);" id="clearbtn"  class="classclear" onclick="gclear()">CLEAR</a>
<a href="javascript:void(0);" class="classsearch" id="searchbtn">SEARCH</a>
<img  alt="insert" src="img/add.png" onclick="gadditem();" style="vertical-align:middle;">
</div>

<div  id="searchview" style="display:none" class="ghilt">
<div style="width:800px;height:500px;margin-left:-400px;margin-top:-250px;background:#FFFFFF;position:fixed;top:50%;left:50%;">
<div style="background:black;color:#ffffff;width:100%;height:35px;"></div>
<img src="img/close.png" style="position:absolute;top: 2px;right: 2px; " onclick="ghide(1,this);" />
<div style="padding:5px;text-align: center;">Search PO : <input type="text" id="billsear" onKeyup="billsearch();" style="border:2px solid #aade7c;"><a href="javascript:void(0);" class="classdelete" id="deletebtn">DELETE</a></div>
<div id="searchdata" style="height:470px;overflow:auto;position: static;padding:50px;"></div>
<div id="customer_update"></div>
</div>
</div>




</body>



</html>





