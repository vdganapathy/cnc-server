<?php
include('lock.php');
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<link rel="stylesheet" href="../css/jquery-ui.css"/>
    <script src="../js/jquery-1.9.1.js"></script>
    <script src="../js/jquery-ui.js"></script>
    


















<!-- script from customer details -->


<script type="text/javascript">    

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

document.getElementById("custypetxt").value="--Select custype--";

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

(document.getElementById("chequedetailstxt").value=="")) 
 		       
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
			}
			
			else
			
		    {
				document.getElementById("hidvalue").value = '91.25';
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
			
			if (document.getElementById("custypetxt").value=="Others")
			{
			
			document.getElementById("dop").style.display = 'none';
			document.getElementById("star").style.display = 'none';
			document.getElementById("slno").style.display = 'none';
			document.getElementById("cncdop").style.display = 'none';
			document.getElementById("cncpurdet").style.display = 'none';
			document.getElementById("cncpurinv").style.display = 'none';
			
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
				
				
		    document.getElementById("cusdoptxt").value = "";
			document.getElementById("cusacstartxt").value = "";
			document.getElementById("cusserialnotxt").value = "";
			document.getElementById("cncdoptxt").value = "";
			document.getElementById("purchasedettxt").value = "";
			document.getElementById("invnotxt").value = "";
				
			}
			
		}
		
		
				
		</script>
		
<!-- script from customer details end -->
















   

<script> 
function ghide(level,obj){
	if(level==0)
	{
		obj.style.display="none";
	}
	else
	{
		for (var i=0; i < level; i++) {
		 obj=obj.parentNode; 
		}
		obj.style.display="none";
		
	}
  
}

function getproduct(getval)
{
	

if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  
  
  
xmlhttp.onreadystatechange=function()
  {
  
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("searchresult").innerHTML=xmlhttp.responseText;
    document.getElementById("searchresult1").style.display="block";
    }
  
  }
  
  
xmlhttp.open("GET","searchitem.php?q4="+getval,true);
xmlhttp.send();


}
	
 
</script>
  



<script>
	
	function additem(ide,name)
	{	
		
		
		if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  
  
  
xmlhttp.onreadystatechange=function()
  {
  
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("searchcusidtxt").innerHTML=xmlhttp.responseText;
    
    document.getElementById("cussearch").style.display="None";
    
    document.getElementById("txtHint").style.display="None";
    
    document.getElementById("cusdetailsmodify").style.display="Block";
    
    //document.getElementById("searchcusidtxt").value=document.getElementById("searchcusidtxt").value;
        
    }
  
  }

xmlhttp.open("GET","searchcustomer.php?ide1="+ide,true);
xmlhttp.send();
		
	}
	
</script>
    
    
    
    
    
    

<script>

function ud (id) {
  
}


function showUser()
{


if ((document.getElementById("searchcusidtxt").value=="") && (document.getElementById("searchcusnametxt").value=="") && (document.getElementById("searchcusphonetxt").value==""))
{
 document.getElementById("txtHint").innerHTML="Please Enter required values";
}

else
    {
      document.getElementById("txtHint").innerHTML="";

  
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  
  
  
xmlhttp.onreadystatechange=function()
  {
  
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  
  }
  
  //alert('hi');
    
var srhtxt=document.getElementById("searchcusidtxt").value;

var srhtxt2=document.getElementById("searchcusnametxt").value;

var srhtxt3=document.getElementById("searchcusphonetxt").value;

  
xmlhttp.open("GET","getuser.php?q="+srhtxt+"&q2="+srhtxt2+"&q3="+srhtxt3,true);
xmlhttp.send();
}

}

</script>
</head>
<body>


	
<div  align="center">
	
 <div style="width: 800px;"> <img src="../img/logo.png" style="vertical-align:middle" /> </div>
	
<div  style="width:80%;" >
	
	
	
			
				
		<div style="float: left; width: 120px; height:480px; background-color: #f0f0f0;   padding-right: 30px;  "> <!-- 1 div starts -->
				<a href="Cusdetails.php" >Customer Entry</a>
				<p><a href="cussearch.php">Customer Search </a> </p>
				
			</div> 
	
<div id="cussearch">
	<h2>Customer Search</h2>
	
<table>
	


<tr>
	
<td> Customer Id </td>
	
<td> <input type="text" id="searchcusidtxt" onkeyup="showUser()"  style="width: 70px;" /> </td>


<td style="padding-left: 20px;">Customer Name</td>

<td style="padding-right: 20px;"><input type="text" id="searchcusnametxt" onkeyup="showUser()" /></td>


<td>Phone</td>

<td><input type="text" id="searchcusphonetxt" onkeyup="showUser()"  style="width: 100px;" /></td>

</tr>

</table>

</div>

<div id="txtHint" style="color: red; padding-top: 10px;"> </div>

</div>

<div id="searchresult1" style="
    background-color: rgba(0, 0, 0, 0.7);
    border-top: 1px solid #262626;
    bottom: 0;
    left: 0;
    overflow: hidden;
    position: absolute;
    right: 0;
    top: 0;
    z-index: 100;
    display: none;
"> 



<div id="searchresult2" style="background-color: white;
    border-radius: 3px 3px 3px 3px;
    box-shadow: 0 0 5px 1px rgba(0, 0, 0, 0.3);
    height: 560px;
    margin: 15px auto 0;
    padding: 2px;
    position:relative;
    width: 800px;">
    
    <img style="top:2px; right:2px; display: block; position: absolute; " src="close.png" onclick="ghide(2,this);" /> 
    
    <div id="searchresult" style="background-color: white;"></div>
    
        
    </div>


  </div>
  
  
  

 







  
  

</div>



 


<br>


</body>
</html> 