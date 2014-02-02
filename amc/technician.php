<?php

include('lock.php');

//echo $login_session;

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
       if(document.getElementById("techname").value.match(letters))  
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

if ((document.getElementById("techname").value=="")||(document.getElementById("techid").value=="")||(document.getElementById("techdoj").value=="")||(document.getElementById("techstatus").value=="--Select--")) 
		       
        {
          document.getElementById("valmsgtecheny").innerHTML="Please Enter required values";
          
        }
        
        else
        {
        document.getElementById("valmsgtecheny").innerHTML="";
        	
        if(document.getElementById("techname").value.match(letters))  
         {  
          document.getElementById("valmsgletter").innerHTML="";
          
         // document.getElementById("valmsgtecheny").innerHTML="Data added successfully.";
    
var techname=$("#techname").val();
var techid=$("#techid").val();
var techdoj=$("#techdoj").val();
var techstatus=$("#techstatus").val();

$.post('addtechnician.php', {techname: techname, techid: techid, techdoj: techdoj, techstatus: techstatus},

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
			</div>
			
			
			
			<h2>Technician Entry</h2>
			
			<table>
				
				<tr style="height: 40px;">
					
					<td>
						Name						
					</td>
					
					<td>
						<input type="text" id="techname" name="techname" />
					</td>
					
				</tr>



				<tr style="height: 40px;">
					
					<td>
						Id						
					</td>
					
					<td>
						<input type="text" id="techid" name="techid" />
					</td>
					
				</tr>
				


				<tr style="height: 40px;">
					<td>
						Date of joining						
					</td>
					
					<td>
						<input class="datepicker" id="techdoj" type="text" name="techdoj" />
					</td>
					
				</tr>
				
				
				<tr style="height: 40px;">
					<td>
						Status					
					</td>
					
					<td>
						<select id="techstatus" name="techstatus" style="width: 143px;" >
						<option value="--Select--">--Select--</option>	
                        <option value="Working">Working</option>
                        <option value="Notworking">Notworking</option>
                        </select> 
					</td>
				</tr>
		    </tr>
			</table>
			
			
			<div>
				<table >
					<tr style="height: 40px;">
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
			
			<div id="valmsgtecheny" style="color:red;"> </div>
			<div id="valmsgletter" style="color:red;"> </div>
			
		</div>
		
		</div>
		
	</body>
</html>
