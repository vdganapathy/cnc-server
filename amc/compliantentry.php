<?php

include('lock.php');

?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

		<title>HTML</title>
		<meta name="description" content="" />
		<meta name="author" content="ADMIN" />

		<meta name="viewport" content="width=device-width; initial-scale=1.0" />


         <link rel="stylesheet" href="jquery-ui.css"/>
         <script src="jquery-1.9.1.js"></script>
         <script src="jquery-ui.js"></script>
         
      <script>
         
      function allLetter()  
      {  
       var letters = /^[A-Za-z]+$/;  
       if(document.getElementById("comptechnametxt").value.match(letters))  
         {  
          document.getElementById("valmsgletter").innerHTML="";
         }  
       else  
         {  
         document.getElementById("valmsgletter").innerHTML="Numbers not accepted in name column";
         }
         return false  
      }  
         
         
         $(function() {
         $( ".datepicker" ).datepicker();
         });
         
         </script>
         
         
         
<script type="text/javascript">
 
$(document).ready(function(){
//Get the input data using the post method when Push into mysql is clicked .. we pull it using the id fields of ID, Name and Email respectively...
$("#techsave").click(function(){
//Get values of the input fields and store it into the variables.
 var letters = /^[A-Za-z]+$/; 



if ((document.getElementById("compcusnametxt").value=="")||(document.getElementById("compdatetxt").value=="")||(document.getElementById("compduedatetxt").value=="")||
(document.getElementById("compstatus").value=="--Select--")||(document.getElementById("compcusphonetxt").value=="") ||(document.getElementById("comptechnametxt").value=="") 
|| (document.getElementById("compnaturetxt").value=="--Select Compliant--") || ($.trim(compcusaddresstxt.value) == '') ||  
(document.getElementById("techphonetxt").value=="") || (document.getElementById("compnumbertxt").value=="")) 
		       
        {
          document.getElementById("valmsgcompeny").innerHTML="Please Enter required values";
          
        }
        
        else
        {
        document.getElementById("valmsgcompeny").innerHTML="";
        	
        if(document.getElementById("compcusnametxt").value.match(letters))  
         {  
          document.getElementById("valmsgletter").innerHTML="";
          
         // document.getElementById("valmsgtecheny").innerHTML="Data added successfully.";
    
var compname=$("#compcusnametxt").val();
var compdate=$("#compdatetxt").val();
var compdue=$("#compduedatetxt").val();
var compstatus=$("#compstatus").val();
var compcusphone=$("#compcusphonetxt").val();
var techname=$("#comptechnametxt").val();
var compnature=$.trim(compnaturetxt.value);
var compcusadd=$.trim(compcusaddresstxt.value);

var techphone=$("#techphonetxt").val();
var compnumber=$("#compnumbertxt").val();


$.post('addcompliant.php', {compname: compname, compdate: compdate, compdue: compdue, compstatus: compstatus, compcusphone: compcusphone, techname: techname, 
compnature: compnature, compcusadd: compcusadd, techphone: techphone, compnumber: compnumber  },

function(data){
$("#valmsgletter").html(data);
$("#valmsgletter").hide();
$("#valmsgletter").fadeIn(1500); //Fade in the data given by the insert.php file
});
  
return false;


 }  
       else  
         {  
         document.getElementById("valmsgletter").innerHTML="Numbers not accepted in name column";
         }
}

});
});
</script>
		
	</head>

	<body>
		
		<div align="center">
			
			 <div style="width: 800px;"> <img src="logo.png" style="vertical-align:middle" /> </div>
			
			<div  style="width:80%;  " >
			
			<div style="float: left; width: 120px; height:500px; background-color: #f0f0f0; padding-right: 30px;  "> <!-- 1 div starts -->
				<a href="Cusdetails.php" >Customer Entry</a>
				<p><a href="technician.php">Technician Entry </a> </p>
				<p><a href="product.php">Product Entry </a> </p>
				<p><a href="compliantentry.php">Compliant Entry </a> </p>
				<p><a href="cussearch.php">Customer Search </a> </p>
				<p><a href="logout.php">Logout </a> </p>
			</div> <!-- 1 div ends -->
					
			
			
			
			
			<h2>Compliant Entry</h2>
			
			<table id="comptable">
				
				<tr style="height: 40px; ">
															
					<td >
						Customer Name						
					</td>
					
					<td style="padding-right: 50px;">
						<input type="text" id="compcusnametxt" name="compcusnametxt" style="width: 195px;"  />
					</td>
					
					<td>
						Compliant Number
					</td>
					<td>
						<input  id="compnumbertxt" type="text" name="compnumbertxt" style="width: 195px;" />
					</td>
					
				</tr>




				<tr style="height: 40px;">
					
					<td>
						Customer Address					
					</td>
					
					<td>
				   <textarea id="compcusaddresstxt" name="compcusaddresstxt"  rows="3" cols="22">

                    </textarea> 
					</td>
					
					<td>
						Compliant Date
					</td>
					<td>
						<input class="datepicker" id="compdatetxt" type="text" name="compdatetxt" style="width: 195px;" />
					</td>
					
				</tr>
				


				<tr style="height: 40px;">
					
					<td>
						Customer Phone					
					</td>
					
					<td>
						<input type="text" id="compcusphonetxt" name="compcusphonetxt" style="width: 195px;" />
					</td>
					
					
					<td>
						Compliant Duedate						
					</td>
					
					<td>
						<input class="datepicker" id="compduedatetxt" type="text" name="compduedatetxt" style="width: 195px;" />
					</td>
					
				</tr>
				
						
				
				
				   <tr style="height: 40px;">
									
					<td>
						Compliant Nature				
					</td>
					
					<td>
				  	
				  	   <select id="compnaturetxt" name="compnaturetxt" style="width: 195px;" >
						<option value="--Select Compliant--">--Select Compliant--</option>	
                        <option value="Gas Leak">Gas Leak</option>
                        <option value="Compressor Noise">Compressor Noise</option>
                        <option value="Fan motor noise">Fan motor noise</option>
                        <option value="Cooling problem">Cooling problem</option>
                        <option value="Service due">Service due</option>
                        <option value="Water Leak">Water Leak</option>
                        <option value="A/c problem">A/c problem</option>
                        </select> 
				 	</td>
					
					
					<td>
						Technician Name					
					</td>
					
					<td>
						<input type="text" id="comptechnametxt" name="comptechnametxt" style="width: 195px;" />
					</td>
					
					
				</tr>
				
				
				
				
				<tr>
					
					<td>
						Compliant Status					
					</td>
					
					<td>
						<select id="compstatus" name="compstatus" style="width: 195px;" >
						<option value="--Select--">--Select--</option>	
                        <option value="Active">Active</option>
                        <option value="Inactive">Inactive</option>
                        </select> 
					</td>
					
					
					
					<td>
						Technician Phoneno					
					</td>
					
					<td>
						<input type="text" id="techphonetxt" name="techphonetxt" style="width: 195px;" />
					</td>
					
					
				</tr>
				
				
		   
		    
			</table>
			
			
			<div>
				<table >
					<tr style="height: 60px;">
	<td>
		<input type="button" id="techsave" value="Save" >
	</td> 
	
	<td>
		<input type="button" id="techedit" value="Modify" onclick="techvalidate();">
	</td> 
	
	<td>
		<input type="button" id="techsearch" value="Search" >
	</td> </tr>
				</table> 
				
		    </div>
			
			<div id="valmsgcompeny" style="color:red;"> </div>
			<div id="valmsgletter" style="color:red;"> </div>
			
		</div>
		
		</div>
		
	</body>
</html>
