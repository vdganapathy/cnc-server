<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"	"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script type="text/javascript">
//----------------------------------------------------------------
	var obj;
	gajax('db/select.php','main','main');
//---------------------------------------------------------------

  
  function send()
  {

    key=$("#key").val();
    sep=$("#sep").val();
  	$("#hidkey").val(key);
  	$("#hidsep").val(sep);
  	

  }
//----------------------------------------------------------------
  function login()
  {

$.post("login.php",
  {
  
  pass:$("#pass").val()
  
  },
  function(data){
 if (data==1)
 {
	$("#login").fadeOut('slow');
 }
 else
 {
	alert("invalid");
 }
  });
  }
//----------------------------------------------------------------  
  function addtask() 
  {
    var txt=prompt("Add a Task:");
    if (txt==null) {
	
    }
    else{
	
	$.post("db/create.php",
	       {
                tbl:txt
	       },
	       function (data) {
		alert(data);
		gajax('db/refresh.php','main');
	       });
    }
    
    
    
  }
//----------------------------------------------------------------
  function deltask(args) {
var r=confirm("Are You Sure Want to Delete");
if (r==true)
  {
$.post("db/delete.php",
           {
                tbl:args
           },
           function (data) {
        alert(data);
    gajax('db/refresh.php','main');
           });
             
  }
else
  {
 
  } 
    
  }
//----------------------------------------------------------------
function gajax(file,place,args)
{
args="?tbl="+args;	
xmlhttp=new XMLHttpRequest();
xmlhttp.open("GET",file+args,true);
xmlhttp.send();
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
document.getElementById(place).innerHTML=xmlhttp.responseText;
  
    }
  } 
}
//----------------------------------------------------------------
</script>
<style type="text/css">
img
{
 cursor: pointer;   
}
#login
{
height: 100%;
background-color: rgba(0, 0, 0, 0.7);
border-top: 1px solid #262626;
bottom: 0;
left: 0;
overflow: hidden;
position: absolute;
right: 0;
top: 0;
z-index: 100
}
.box
{
width:100%;
    color:white;
}
.box td
{ 
    height: 50px;
    background-color: green;
    font-family: Verdana;
    font-size: 20px;
    color:white;
    padding: 5px;
    
    
}
</style>
</head>
<body>
	<input type="hidden" id="hidkey" value="">
	<input type="hidden" id="hidsep" value="">
<div id="login" style="display: none">
<input type="password" id="pass" ><input type="button" id="logbtn" value="login" onclick="login();">
</div>
<div id="enterkey">
<input type="text" id="key"><br>
<input type="text" id="sep"><br>
<input type="button" id="send" value="SEND" onclick="send();"><br>
</div>
				
<div id="main" style="display: none;">

</div>
<div style="width:100%;height: 50px; position: fixed;bottom: 0px;text-align: center;">
      <img src="img/menu.png" id="menu" onclick="gajax('db/select.php','main','main');">
      <img id="add" src="img/add.png" onclick="addtask();">
</div>
</body>
</html>