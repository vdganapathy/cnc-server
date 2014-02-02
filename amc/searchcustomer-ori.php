<?php


include('lock.php');

$ide1=$_GET["ide1"];

include  "connection.php";

$sql="SELECT * FROM customer WHERE cusid = '".$ide1."'";


$result = mysql_query($sql);


$row = mysql_fetch_array($result);

//echo $login_session;
  

?> 



<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<title>HTML</title>
		
		 <link rel="stylesheet" href="jquery-ui.css" />
         <script src="jquery-1.9.1.js"></script>
         <script src="jquery-ui.js"></script>
         
        
<script type="text/javascript"> 

function purfrom()
{
if(document.getElementById("purchasefrom").value=="otherdealer")

{
	
document.getElementById("cncdoptxt").value="";	
document.getElementById("purchasedettxt").value="";
document.getElementById("invnotxt").value="";

document.getElementById("cncdop").style.display='table-row';
document.getElementById("cncpurdet").style.display='table-row';
document.getElementById("cncpurinv").style.display='table-row';
}

else
{
document.getElementById("cncdoptxt").value="Nil";	
document.getElementById("purchasedettxt").value="Nil";
document.getElementById("invnotxt").value="Nil";

document.getElementById("cncdop").style.display='none';
document.getElementById("cncpurdet").style.display='none';
document.getElementById("cncpurinv").style.display='none';
}

}
  




function funcalenddate1()
{

var dateStr9 = document.getElementById("cusstartcontracttxt").value;
var millis9 = Date.parse(dateStr9);
var newDate9 = new Date();
newDate9.setTime(millis9  + servar *24*60*60*1000);
var service9 = "" + (newDate9.getFullYear() + "/" + (newDate9.getMonth()+1) + "/" + newDate9.getDate());
alert(service9);

document.getElementById("cusendcontracttxt").value=service9;

}



function custxtclear()
{    
	
	
document.getElementById("cusdoptxt").value = "";
document.getElementById("acintplacetxt").value = "--Select Install location--";
document.getElementById("cusunitmaketxt").value = "--Select Brand--";
document.getElementById("cusunittontxt").value = "--Select Capacity--";
document.getElementById("cusacstartxt").value = "--Select Star rating--";
document.getElementById("cusmodelnotxt").value = "";
document.getElementById("cusserialnotxt").value = "";
document.getElementById("cusagreenotxt").value = "";
document.getElementById("cusstartcontracttxt").value = "";
document.getElementById("cusendcontracttxt").value = "";
document.getElementById("cusservicetxt").value = "--Select Service--";
document.getElementById("compressorslnotxt").value="";
document.getElementById("cncdoptxt").value="";
document.getElementById("purchasedettxt").value="";
document.getElementById("invnotxt").value="";
document.getElementById("cuspaymodetxt").value="--Select payment mode--";
document.getElementById("amounttxt").value="";
document.getElementById("chequedetailstxt").value="";

//document.getElementById("custypetxt").value="--Select custype--";

}

$(function() {
         $(".datepicker").datepicker({ dateFormat: 'yy-mm-dd' });
         });

</script>    
    
        
        
<script type="text/javascript">

 
$(document).ready(function(){
	
	
$('#clrbtn').click(function() {
window.location.href = 'Cusdetails.php';

 });	
	
	

$("#cussave").click(function(){

if (($.trim(cusaddresstxt.value)=="") || (document.getElementById("cusnametxt").value=="") || 


(document.getElementById("cusdoptxt").value=="") || (document.getElementById("cusphonetxt").value=="") 

|| (document.getElementById("acintplacetxt").value=="--Select Install location--") ||

(document.getElementById("cusunitmaketxt").value=="--Select Brand--") || (document.getElementById("cusunittontxt").value=="--Select Capacity--") ||
 
(document.getElementById("cusacstartxt").value=="--Select Star rating--") || (document.getElementById("cusmodelnotxt").value=="") ||
 
(document.getElementById("cusserialnotxt").value=="") || (document.getElementById("cusagreenotxt").value=="") ||

(document.getElementById("cusstartcontracttxt").value=="") ||
 
(document.getElementById("cusendcontracttxt").value=="") || (document.getElementById("cusservicetxt").value=="--Select Service--") || 

(document.getElementById("compressorslnotxt").value=="") || (document.getElementById("cncdoptxt").value=="") || 

(document.getElementById("purchasedettxt").value=="") || (document.getElementById("invnotxt").value=="") ||

(document.getElementById("cuspaymodetxt").value=="--Select payment mode--") || (document.getElementById("amounttxt").value=="")||

(document.getElementById("chequedetailstxt").value=="") || (document.getElementById("purchasefrom").value=="")) 
 		       
        {
          document.getElementById("msgcusdetails").innerHTML="Please Enter required values";
        }
        
        else
        {
        document.getElementById("msgcusdetails").innerHTML="";

var cusname=$("#cusnametxt").val();

var cusaddress=$.trim(cusaddresstxt.value);

var cusid=$("#cusid1").val();

cusid = $.trim(cusid);


var cusdop=$("#cusdoptxt").val();
var cusphone =$("#cusphonetxt").val();
var acinstall =$("#acintplacetxt").val();
var brand =$("#cusunitmaketxt").val();
var accapacity =$("#cusunittontxt").val();
var starrate =$("#cusacstartxt").val();
var modelno =$("#cusmodelnotxt").val();
var serialno =$("#cusserialnotxt").val();
var agreeno=$("#cusagreenotxt").val();
var startcontract=$("#cusstartcontracttxt").val();
var endcontract=$("#cusendcontracttxt").val();
var servicetype =$("#cusservicetxt").val();

var compslno=$("#compressorslnotxt").val();
var cncdop=$("#cncdoptxt").val();
var cncpurdetails=$("#purchasedettxt").val();
var cncinvno=$("#invnotxt").val();

var cuspaymode=$("#cuspaymodetxt").val();
var amount=$("#amounttxt").val();

var chequedetails=$("#chequedetailstxt").val();


var servar = document.getElementById("hidvalue").value;


var dateStr = document.getElementById("cusstartcontracttxt").value;
var millis = Date.parse(dateStr);
var newDate = new Date();
newDate.setTime(millis  + servar *24*60*60*1000);
var service1 = "" + (newDate.getFullYear() + "/" + (newDate.getMonth()+1) + "/" + newDate.getDate());



var millis2 = Date.parse(service1);
var newDate2 = new Date();
newDate2.setTime(millis2  + servar *24*60*60*1000);
var service2 = "" + (newDate2.getFullYear() + "/" + (newDate2.getMonth()+1) + "/" + newDate2.getDate());
 

var millis3 = Date.parse(service2);
var newDate3 = new Date();
newDate3.setTime(millis3  + servar *24*60*60*1000);
var service3 = "" + (newDate3.getFullYear() + "/" + (newDate3.getMonth()+1) + "/" + newDate3.getDate()); 


var millis4 = Date.parse(service3);
var newDate4 = new Date();
newDate4.setTime(millis4  + servar *24*60*60*1000);
document.getElementById("hidvalue2").value = "" + (newDate4.getFullYear() + "/" + (newDate4.getMonth()+1) + "/" + newDate4.getDate());

        
        
        if (document.getElementById("cusservicetxt").value=="Warranty")
			
			{
				document.getElementById("hidvalue2").value = 'Nil';
			}
			
			
var service4 =  document.getElementById("hidvalue2").value;       
        

custxtclear();


$.post('addcusdetails.php', {cusname: cusname, cusaddress: cusaddress, cusid: cusid, cusdop: cusdop, cusphone: cusphone, acinstall: acinstall, brand: brand, 
accapacity: accapacity, starrate: starrate, modelno: modelno, serialno: serialno, agreeno: agreeno, startcontract: startcontract, endcontract: endcontract,
servicetype: servicetype, compslno: compslno, cncdop: cncdop, cncpurdetails: cncpurdetails, cncinvno: cncinvno, cuspaymode: cuspaymode, amount: amount, 
chequedetails: chequedetails, service1: service1, service2: service2, service3: service3, service4: service4},


function(data){
$("#msgcusdetails").html(data);
$("#msgcusdetails").hide();
$("#msgcusdetails").fadeIn(1500); //Fade in the data given by the insert.php file
});
  
  
return false;

 }  
       


});
});
</script>

         
				
		<script>
		
		
		
		
		
		
		function acspares1()
		
		{	
				
		if (document.getElementById("cusservicetxt").value="Warranty") 
		       
        {
          document.getElementById("hidvalue").value = '121.5';
        }
      
      else
      
      {
      	document.getElementById("hidvalue").value = '91.25';
      }
                    
		}	
		
		
		
		function test()
		{
			
			if (document.getElementById("cusservicetxt").value=="Warranty")
			
			{
				document.getElementById("hidvalue").value = '121.5';
				document.getElementById("amcamttxt").style.display = 'none';
				document.getElementById("amounttxt").value = 'Nil';
				
			}
			
			else
			
		    {
				document.getElementById("hidvalue").value = '91.25';
				document.getElementById("amcamttxt").style.display = 'table-row';
				document.getElementById("amounttxt").value = "";
			}
		}
		
		

		
		function chequedet()
		{
			if (document.getElementById("cuspaymodetxt").value!="cheque")
			{
				document.getElementById("chequedetailstxt").value="Nil";
			}
			
			else
			{
				document.getElementById("chequedetailstxt").value="";
			}
		}
		
		
		
		function newcus()
		{
			
			if (document.getElementById("cusservicetxt").value=="OneTime")
			{
			
			document.getElementById("dop").style.display = 'none';
			document.getElementById("star").style.display = 'none';
			document.getElementById("slno").style.display = 'none';
			document.getElementById("cncdop").style.display = 'none';
			document.getElementById("cncpurdet").style.display = 'none';
			document.getElementById("cncpurinv").style.display = 'none';
			
			document.getElementById("purchasefrom").value = 'Nil';
			
			document.getElementById("cusdoptxt").value = "Nil";
			document.getElementById("cusacstartxt").value = "Nil";
			document.getElementById("cusserialnotxt").value = "Nil";
			document.getElementById("cncdoptxt").value = "Nil";
			document.getElementById("purchasedettxt").value = "Nil";
			document.getElementById("invnotxt").value = "Nil";
			
			}
			
			else
			{
				document.getElementById("dop").style.display = 'table-row';
				document.getElementById("star").style.display = 'table-row';
				document.getElementById("slno").style.display = 'table-row';
				document.getElementById("cncdop").style.display = 'table-row';
				document.getElementById("cncpurdet").style.display = 'table-row';
				document.getElementById("cncpurinv").style.display = 'table-row';
				
			document.getElementById("purchasefrom").value = "--Select--";
		    document.getElementById("cusdoptxt").value = "";
			document.getElementById("cusacstartxt").value = "";
			document.getElementById("cusserialnotxt").value = "";
			document.getElementById("cncdoptxt").value = "";
			document.getElementById("purchasedettxt").value = "";
			document.getElementById("invnotxt").value = "";
				
			}
			
		}
		
		
				
		</script>
		
		
		
	</head>

	<body>
		
		
		
		<div align="center">
			
			 <div style="width: 800px;"> <img src="logo.png" style="vertical-align:middle" /> </div> 
		
		
		<div  style="width:80%;  " >
			
				
		<div style="float: left; width: 120px; height:500px; background-color: #f0f0f0; padding-right: 30px;  "> <!-- 1 div starts -->
				<a id="linkcusdetails" href="Cusdetails.php" >Customer Entry</a>
				<p><a href="technician.php">Technician Entry </a> </p>
				<p><a href="product.php">Product Entry </a> </p>
				<p><a href="compliantentry.php">Compliant Entry </a> </p>
				<p><a href="cussearch.php">Customer Search </a> </p>
				<p><a href="logout.php">Logout </a> </p>
			</div> <!-- 1 div ends -->
					
			
			
				
		<div align="center" style="width: 800px;  ">
			
			<h2>Customer Details</h2>	
			
					
			<div>
				
				
				
				<table>
					<tr>
					<td>
						Customer Name
					</td>
					<td>
						<input type="text" id="cusnametxt" value='<?php echo $row['customername']; ?>' name="cusnametxt"  style="width: 200px; margin-right: 20px;"/>
					</td>
					
					<td>
						Customer Id
					</td>
					
					
					
					<td> <input type="text" id="cusid1"  value='<?php 
					
echo $row['cusid'];  
?>'
						
name="cusid1" style="width: 200px;" > </td>
					
				</tr>
				
				
				<tr style="height: 50px;">
					<td>
						Address
					</td>
					
					<td>
					<input type="text" id="cusaddresstxt" wrap="true" name="cusaddresstxt" value='<?php echo $row['address']; ?>' style="width: 200px; height: 50px;" >
					
				  <!--  <textarea id="cusaddresstxt" name="cusaddresstxt"   rows="1" cols="22" >

                    </textarea> --> 
						
					</td>
					
					<td>
						Phone No
					</td>
					<td>
						<input type="text" id="cusphonetxt" name="cusphonetxt" value='<?php echo $row['phone']; ?>' style="width: 200px;"/>
					</td>
					
				</tr>
				</table>  
				
			</div>				
			
			
			
			
					
					
			
			<div style="float: left; width: 400px; height: 320px; "> <!-- 2 div starts -->
			
			<table>
				
				<tr style="height: 30px;">
					<td>
						Service Type
					</td>
					<td>
												
						<select  onchange="test();newcus();" id="cusservicetxt"  name="cusservicetxt"  style="width: 200px;" >
						<option value="--Select Service--">--Select Service--</option>
                        <option value="Warranty">Warranty</option>
                        <option value="AMC">AMC</option>
                        <option value="servicecontract">servicecontract</option>
                        <option value="OneTime">OneTime</option>
                        </select> 
						
					</td>
				</tr>
				
				
				
				<tr style="height: 30px;">
					<td>
						Purchase From
					</td>
					<td>
						<select  onchange="purfrom();" id="purchasefrom"  name="purchasefrom"  style="width: 200px;" >
						<option value="--Select--">--Select--</option>
                        <option value="CNC">CNC</option>
                        <option value="otherdealer">otherdealer</option>
                        <option value="Nil">Nil</option>
                        </select> 
					</td>
				</tr>
			
				
				
					<tr id="dop" style="height: 25px;">
					<td>
						Date of purchase
					</td>
					<td>
						<input type="text" class="datepicker" id="cusdoptxt" name="cusdoptxt" style="width: 200px;"/>
					</td>
				</tr>
				
				
				<tr id="unitinstall" style="height: 30px;">
					<td>
						Unit Installed At
					</td>
					<td>
						
						<select  id="acintplacetxt"  name="acintplacetxt"  style="width: 200px;" >
						<option value="--Select Install location--">--Select Install location--</option>
                        <option value="house">House</option>
                        <option value="office">Office</option>
                        <option value="factory">Factory</option>
                        <option value="shop">Shop</option>
                        <option value="commercialhall">Commercial Hall</option>
                        </select>
						
					</td>
				</tr>
				
							
									
					<tr id="unitmake" style="height: 30px;">
					<td>
						Unit Make
					</td>
					<td>
						
						<select  id="cusunitmaketxt"  name="cusunitmaketxt"  style="width: 200px;" >
						<option value="--Select Brand--">--Select Brand--</option>
                        <option value="vestar">vestar</option>
                        <option value="voltas">voltas</option>
                        <option value="hitachi">Hitachi</option>
                        <option value="ogeneral">Ogeneral</option>
                        <option value="panasonic">panasonic</option>
                        <option value="carrier">carrier</option>
                        <option value="samsung">samsung</option>
                        <option value="Lg">Lg</option>
                        </select> 
					</td>
				</tr>
				

                   <tr style="height: 30px;">
					<td>
						Capacity
					</td>
					<td>
						
						<select  id="cusunittontxt"  name="cusunittontxt"  style="width: 200px;" >
						<option value="--Select Capacity--">--Select Capacity--</option>
                        <option value="0.75ton">0.75 Ton</option>
                        <option value="1ton">1 Ton</option>
                        <option value="1.25ton">1.25 Ton</option>
                        <option value="1.5ton">1.5 Ton</option>
                        <option value="2ton">2 Ton</option>
                        <option value="2.5ton">2.5 Ton</option>
                        <option value="3ton">3 Ton</option>
                        </select>
						
					</td>
				 </tr>
				 
				 
				 
				 <tr id="star" style="height: 30px;">
					<td>
						Star
					</td>
					<td>
						
						<select  id="cusacstartxt"  name="cusacstartxt"  style="width: 200px;" >
						<option value="--Select Star rating--">--Select Star rating--</option>
                        <option value="1star">1 Star</option>
                        <option value="2star">2 Star</option>
                        <option value="3star">3 Star</option>
                        <option value="4star">4 Star</option>
                        <option value="5star">5 Star</option>
                        <option value="Nil">Nil</option>
                        </select>
						
					</td>
				 </tr>
				 
				 
				 
				 
				  <tr style="height: 30px;">
					<td>
						Model No
					</td>
					<td>
						<input type="text" id="cusmodelnotxt" name="cusmodelnotxt"  style="width: 200px;"/>
					</td>
				 </tr>
					
				
				
				 <tr id="slno" style="height: 30px;">
					<td>
						Serial No
					</td>
					<td>
						<input type="text" id="cusserialnotxt" name="cusserialnotxt"  style="width: 200px;"/>
					</td>
				 </tr>
				 
				 
				 
				 
				 <tr style="height: 30px;">
					<td>
						Compressor SerialNo
					</td>
					<td>
						<input type="text" id="compressorslnotxt" name="compressorslnotxt"  style="width: 200px;"/>
					</td>
				 </tr>	
					
               				
									 			
			</table>
			</div> <!--  2 div ends -->
			
				
			
			
			<div style="float: right; width: 380px; height: 320px; "> <!-- 3 div starts -->
				
				<table>
					
										
					<tr style="height: 30px;">
					<td>
						Customer Payment Mode
					</td>
					<td>
						<select  id="cuspaymodetxt" onchange="chequedet();"  name="cuspaymodetxt"  style="width: 200px;" >
						<option value="--Select payment mode--">--Select payment mode--</option>
                        <option value="cash">cash</option>
                        <option value="cheque">cheque</option>
                        <option value="creditcard">creditcard</option>
                        <option value="others">others</option>
                        </select> 
					</td>
				    </tr>
				    
				    
				    
				    <tr style="height: 30px;">
					<td>
						Cheque Details
					</td>
					<td>
						<input type="text"  id="chequedetailstxt" name="chequedetailstxt" style="width: 200px;"/>
					</td>
				    </tr>
				    
				
				 						
					<tr id="amcamttxt" style="height: 30px;">
					<td>
						AMC/servicecontract Amount
					</td>
					<td>
					<input type="text"  id="amounttxt" name="amounttxt"  style="width: 200px;"/>	 
					</td>
				    </tr>
				 
				 
				 
				 <tr id="cncdop" style="height: 30px; display: none;">
					<td>
						Purchase date from Dealer
					</td>
					<td>
						<input type="text" value="Nil" class="datepicker" id="cncdoptxt" name="cncdoptxt"  style="width: 200px;"/>
					</td>
				 </tr>
				 
				 
				 <tr id="cncpurdet" style="height: 30px; display: none;">
					<td>
						Company / Dealer Name
					</td>
					<td>
						<input type="text" value="Nil" id="purchasedettxt" name="purchasedettxt"  style="width: 200px;"/>
					</td>
				 </tr>
				 
				
				
				 <tr id="cncpurinv" style="height: 30px; display: none;">
					<td>
						CNC Pur InvNo
					</td>
					<td>
						<input type="text" value="Nil" id="invnotxt" name="invnotxt"  style="width: 200px;"/>
					</td>
				 </tr>
				
				
				
				<tr style="height: 40px;">
					<td>
						Agreement No
					</td>
					<td>
						<input type="text" id="cusagreenotxt" name="cusagreenotxt"  style="width: 200px;"/>
					</td>
				 </tr>
				


                 <tr style="height: 20px;">
					<td>
						Contract Commences On
					</td>
					<td>
						<input type="text" class="datepicker" onchange="funcalenddate();"  id="cusstartcontracttxt" name="cusstartcontracttxt"  style="width: 200px;"/>
					</td>
				 </tr>



                 <tr style="height: 40px;">
					<td>
						Contract Concludes On
					</td>
					<td>
						<input type="text" class="datepicker"  id="cusendcontracttxt" name="cusendcontracttxt"  style="width: 200px;"/>
					</td>
				 </tr>
					
					
					
					
					
					
					
					
									
				</table>
			
				
		
	  
		</div> <!-- 3 div ends -->
	 
	  <div >
	
	  
	  <div>
		<input type="button" value="Save" id="cussave" >
		<input type="button" value="Modify" >
		<input type="button" value="Search" id="searchbtn" >
		<input type="button" id="clrbtn" value="Clear" >
		
		
		<div id="msgcusdetails"  style="padding-bottom: 5px; color: red;">  </div>
		
		<div>
		<input  type="hidden" id="hidvalue">
		
		<input  type="hidden" id="hidvalue2">
		
		
		</div>
		
		
		</div>
		
		
	
	</div>
	 
	  
	
		   </div>
		
	</div>
		


</div>		
		 
	</body>
</html>
