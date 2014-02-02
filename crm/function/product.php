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

<script src="jquery.min.js"></script>



<script type="text/javascript">
 
$(document).ready(function(){
//Get the input data using the post method when Push into mysql is clicked .. we pull it using the id fields of ID, Name and Email respectively...
$("#productsave").click(function(){
//Get values of the input fields and store it into the variables.



if ((document.getElementById("productbrand").value=="--Select Brand--")||(document.getElementById("productmodel").value=="")||(document.getElementById("actype").value=="selecttype")) 
		       
        {
          document.getElementById("valprobrand").innerHTML="Please Enter required values";
        }
        
        else
        {
        	document.getElementById("valprobrand").innerHTML="";
     

var brand=$("#productbrand").val();
var model=$("#productmodel").val();
var type=$("#actype").val();
 
 
//alert(brand);
 
//use the $.post() method to call insert.php file.. this is the ajax request
$.post('addproduct.php', {brand: brand, model: model, type: type},



function(data){
$("#valprobrand").html(data);
$("#valprobrand").hide();
$("#valprobrand").fadeIn(1500); //Fade in the data given by the insert.php file
});

  
return false;

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
			</div>
			
			
			
			<h2>Product Entry</h2>
			
			<table>
				
				<tr style="height: 40px;">
					
					<td>
						Manufacturer						
					</td>
					
					<td>
						<select  id="productbrand"  name="productbrand"  style="width: 200px;" >
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



				<tr style="height: 40px;">
					
					<td>
						Model						
					</td>
					
					<td>
						<input type="text" id="productmodel" name="productmodel" style="width: 200px;" />
					</td>
										
				</tr>
				


				<tr style="height: 40px;">
					
					<td>
						Type						
					</td>
					
					<td>
						<select id="actype" name="actype" style="width: 200px;" >
						<option value="selecttype">-- Select AC Type -- </option>	
                        <option value="Window">Window</option>
                        <option value="Split">Split</option>
                        </select> 
					</td>
														
				</tr>
	      </tr>
				
			</table>
			
		
		<div>
			<table>
				<tr style="height: 40px;">
	<td>
		<input type="button" id="productsave" value="Save"  >
	</td> 
	
	<td>
		<input type="button" id="productedit" value="Modify" >
	</td> 
	
	<td>
		<input type="button" id="productsearch" value="Search" >
	</td> </tr>
	
			</table>
		</div>
		
		<div id="valprobrand" style="color:red;">
							  
						</div>
		
		</div>
		
		</div>
		
	</body>
</html>
