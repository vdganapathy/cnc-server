var n=0;
function gajax(file,place)
{
	xmlhttp= new XMLHttpRequest();
xmlhttp.open("GET",file,true);
xmlhttp.send();
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
  document.getElementById(place).innerHTML=xmlhttp.responseText;

  }
   }
}  
//-------------------------------------------------------------------------------
    	function getvalue() 
    	
    		    {
    		
    		
jQuery.post("function/customerentry.php",
{
cusname:jQuery("#cusname").val(),
        cusid:jQuery("#cusid").val(),
    	address:jQuery("#address").val(),
    	phone:jQuery("#phone").val(),
    	sertype:jQuery("#sertype").val(),
    	purchasefrom:jQuery("#purchasefrom").val(),
    	dop:jQuery("#dop").val(),
    	unit:jQuery("#unit").val(),
    	unitmake:jQuery("#unitmake").val(),
    	capacity:jQuery("#capacity").val(),
    	star:jQuery("#star").val(),
    	modelno:jQuery("#modelno").val(),
    	serialno:jQuery("#serialno").val(),
    	cserialno:jQuery("#cserialno").val(),
    	actype:jQuery("#actype").val(),
        cpm:jQuery("#cpm").val(),
        chequedetails:jQuery("#chequedetails").val(),
    purdate:jQuery("#purdate").val(),
    	cdname:jQuery("#cdname").val(),
    	cncinvno:jQuery("#cncinvno").val(),
    	agrno:jQuery("#agrno").val(),
    	commence:jQuery("#commence").val(),
    	conclude:jQuery("#conclude").val()
},
function( data ) {
	alert(data);
});
var count=n;
for(i=1;i<=count;i++)
{

jQuery.post("function/secondentry.php",
{
	 cusid:jQuery("#cusid").val(),
sertype:jQuery("#sertype"+i).val(),
    	purchasefrom:jQuery("#purchasefrom"+i).val(),
    	dop:jQuery("#dop"+i).val(),
    	unit:jQuery("#unit"+i).val(),
    	unitmake:jQuery("#unitmake"+i).val(),
    	capacity:jQuery("#capacity"+i).val(),
    	star:jQuery("#star"+i).val(),
    	modelno:jQuery("#modelno"+i).val(),
    	serialno:jQuery("#serialno"+i).val(),
    	cserialno:jQuery("#cserialno"+i).val(),
    	actype:jQuery("#actype"+i).val(),
        cpm:jQuery("#cpm"+i).val(),
        chequedetails:jQuery("#chequedetails"+i).val(),
    purdate:jQuery("#purdate"+i).val(),
    	cdname:jQuery("#cdname"+i).val(),
    	cncinvno:jQuery("#cncinvno"+i).val(),
    	agrno:jQuery("#agrno"+i).val(),
    	commence:jQuery("#commence"+i).val(),
    	conclude:jQuery("#conclude"+i).val()
},
function( data ) {

alert(data);

});
}
 }
 //------------------------------------------------------------------------------------------------
 
 function finalcheck()
 {
 var count=n;

var myElem = document.getElementById('product0');
 	if(gvalidate1()==1)
 	{
 	
}
 else if(myElem == null)
 		{
 		alert("fill product details");
 	}
else 
{
		for(i=1;i<=count;i++)
{
 		
 		 if(document.getElementById("sertype"+i).selectedIndex == 0)
 	 {
 	 	alert("please select the service entry");
 	 }
 	 else if(document.getElementById("purchasefrom"+i).selectedIndex == 0)
 	 {
 	 	alert("please select the purchase from entry");
 	 }
 	 	 else if(document.getElementById("unit"+i).selectedIndex == 0)
 	 {
 	 	alert("please select the unit installed at entry");
 	 }
 	 else if(document.getElementById("unitmake"+i).selectedIndex == 0)
 	 {
 	 	alert("please select the unit make entry");
 	 }
 	 		  	 else if(document.getElementById("capacity"+i).selectedIndex == 0)
 	 {
 	 	alert("please select the capacity entry");
 	 }
 	  		  	 else if(document.getElementById("star"+i).selectedIndex == 0)
 	 {
 	 	alert("please select the star entry");
 	 }
 	 else if(document.getElementById("actype"+i).selectedIndex == 0)
 	 {
 	 	alert("please select the ac type entry");
 	 }
 	 
 	 	   		  	 else if(document.getElementById("cpm"+i).selectedIndex == 0)
 	 {
 	 	alert("please select the customer payment mode entry");
 	 }
 	
 	else{
 
 	 	getvalue();
 	}
 	}
}
 	
 }
  
 //------------------------------------------------------------------------------------
         function warranty()
        
        {
 
       
          if ((document.getElementById('sertype').selectedIndex == 1)&&(document.getElementById('purchasefrom').selectedIndex == 1))
          {
		
	 document.getElementById("cdname").style.display = "none";
                    document.getElementById("cncinvno").style.display = "none";
                    document.getElementById("purdate").style.display = "none";
                    document.getElementById("amcsamt").style.display = "none";
                    document.getElementById("cdname").value = "nil";
                    document.getElementById("cncinvno").value = "nil";
                    document.getElementById("purdate").value = "nil";
                    document.getElementById("amcsamt").value = "nil";
                        
                    document.getElementById("star").style.display = "";
                    document.getElementById("dop").style.display = "";
                    document.getElementById("serialno").style.display = "";
                    document.getElementById("sertype").style.display = "";
                    document.getElementById("purchasefrom").style.display = "";
                    document.getElementById("unit").style.display = "";
                    document.getElementById("unitmake").style.display = "";
                    document.getElementById("capacity").style.display = "";
                    document.getElementById("modelno").style.display = "";
                    document.getElementById("cserialno").style.display = "";
                   document.getElementById("actype").style.display = "";
			}
			
           else if((document.getElementById("sertype").selectedIndex == 1)&&(document.getElementById("purchasefrom").selectedIndex == 2))
            {
            	  document.getElementById("cdname").style.display = "";
            	  document.getElementById("cncinvno").style.display = "";
                  document.getElementById("purdate").style.display = "";
                  document.getElementById("amcsamt").style.display = "";
                  document.getElementById("cpm").style.display = "";
            	  document.getElementById("chequedetails").style.display = "";
                  document.getElementById("agrno").style.display = "";
                  document.getElementById("commence").style.display = "";
                  document.getElementById("conclude").style.display = "";
                  document.getElementById("star").style.display = "";
                    document.getElementById("dop").style.display = "";
                    document.getElementById("serialno").style.display = "";
                    document.getElementById("sertype").style.display = "";
                    document.getElementById("purchasefrom").style.display = "";
                    document.getElementById("unit").style.display = "";
                    document.getElementById("unitmake").style.display = "";
                    document.getElementById("capacity").style.display = "";
                    document.getElementById("modelno").style.display = "";
                    document.getElementById("cserialno").style.display = "";
                   document.getElementById("actype").style.display = "";
                 
                 
            }
           else if(document.getElementById("sertype").selectedIndex == 1)
            {
             document.getElementById("amcsamt").style.display = "none";
             document.getElementById("amcsamt").value = "nil";
                  document.getElementById("star").style.display = "";
                    document.getElementById("dop").style.display = "";
                    document.getElementById("serialno").style.display = "";
                    document.getElementById("sertype").style.display = "";
                    document.getElementById("purchasefrom").style.display = "";
                    document.getElementById("unit").style.display = "";
                    document.getElementById("unitmake").style.display = "";
                    document.getElementById("capacity").style.display = "";
                    document.getElementById("modelno").style.display = "";
                    document.getElementById("cserialno").style.display = "";
                   document.getElementById("actype").style.display = "";
                 
                 
            	
            }
 
    else if((document.getElementById("sertype").selectedIndex == 2)&&(document.getElementById("purchasefrom").selectedIndex == 1))
          {
          	    document.getElementById("cdname").style.display = "none";
                document.getElementById("cncinvno").style.display = "none";
                document.getElementById("purdate").style.display = "none";
                 document.getElementById("cdname").value = "nil";
                document.getElementById("cncinvno").value = "nil";
                document.getElementById("purdate").value = "nil";
                    document.getElementById("star").style.display = "";
                    document.getElementById("dop").style.display = "";
                    document.getElementById("serialno").style.display = "";
                    document.getElementById("sertype").style.display = "";
                    document.getElementById("purchasefrom").style.display = "";
                    document.getElementById("unit").style.display = "";
                    document.getElementById("unitmake").style.display = "";
                    document.getElementById("capacity").style.display = "";
                    document.getElementById("modelno").style.display = "";
                    document.getElementById("cserialno").style.display = "";
                   document.getElementById("actype").style.display = "";
                 
                 
                        
          }
             else if((document.getElementById("sertype").selectedIndex == 3)&&(document.getElementById("purchasefrom").selectedIndex == 1))
          {
          	    document.getElementById("cdname").style.display = "none";
                document.getElementById("cncinvno").style.display = "none";
                document.getElementById("purdate").style.display = "none";
                 document.getElementById("cdname").value = "nil";
                document.getElementById("cncinvno").value = "nil";
                document.getElementById("purdate").value = "nil";
                     document.getElementById("star").style.display = "";
                    document.getElementById("dop").style.display = "";
                    document.getElementById("serialno").style.display = "";
                    document.getElementById("sertype").style.display = "";
                    document.getElementById("purchasefrom").style.display = "";
                    document.getElementById("unit").style.display = "";
                    document.getElementById("unitmake").style.display = "";
                    document.getElementById("capacity").style.display = "";
                    document.getElementById("modelno").style.display = "";
                    document.getElementById("cserialno").style.display = "";
                   document.getElementById("actype").style.display = "";
                 
                 
                        
          }
              
               else if(document.getElementById("sertype").selectedIndex == 4)
          {
          	    document.getElementById("star").style.display = "none";
                document.getElementById("dop").style.display = "none";
                document.getElementById("serialno").style.display = "none";
                document.getElementById("star").value = "nil";
                document.getElementById("dop").value = "nil";
                document.getElementById("serialno").value = "nil";
                        
          }
        
              else
     {
     	            document.getElementById("cdname").style.display = "";
            	    document.getElementById("cncinvno").style.display = "";
                    document.getElementById("purdate").style.display = "";
                    document.getElementById("amcsamt").style.display = "";
                    document.getElementById("cpm").style.display = "";
            	    document.getElementById("chequedetails").style.display = "";
                    document.getElementById("agrno").style.display = "";
                    document.getElementById("commence").style.display = "";
                    document.getElementById("conclude").style.display = "";
                        
                     document.getElementById("star").style.display = "";
                    document.getElementById("dop").style.display = "";
                    document.getElementById("serialno").style.display = "";
                    document.getElementById("sertype").style.display = "";
                    document.getElementById("purchasefrom").style.display = "";
                    document.getElementById("unit").style.display = "";
                    document.getElementById("unitmake").style.display = "";
                    document.getElementById("capacity").style.display = "";
                    document.getElementById("modelno").style.display = "";
                    document.getElementById("cserialno").style.display = "";
                   document.getElementById("actype").style.display = "";
                 
                 
     }
     }
                        
  //---------------------------------------------------------------------------------

function clearentry()
{
		var flag=0;
var inputs, index;
inputs = document.getElementsByTagName('*');
for (index = 0; index < inputs.length; index++)
{
if(inputs[index].getAttribute("type")=="text")
{
	if(inputs[index].value="")
	{
		inputs[index].style.border="1px solid red";
	flag=1;
	}
	
	else
	{
		inputs[index].style.border="1px solid #CCCCCC";
		
	}

}
}
if(flag==1)
{
	alert("enter fields");
	return 1;
}
                    
                    
}
//-------------------------------------------------------------------------------------------
function checkuser()
{
	
    	if(gvalidate1()==1)
    	{
 }
 else
 {
 	
    		    {
    		
    			
    		  jQuery.post("function/userentry.php",
    {
    	uname:jQuery("#uname").val(),
        uid:jQuery("#uid").val(),
    	dat:jQuery("#dat").val(),
    	passw:jQuery("#passw").val(),

    },
  function( data ) {  		
  alert(data);	 
});
}
 }
}
//------------------------------------------------------------------------------
function jumpNext()
{

   document.getElementById("uid").value="cnc_"+document.getElementById("uname").value;
}
//-------------------------------------------------------------------------------------
function checkdate()
{
	$("[id$=dat]").datepicker({dateFormat: 'dd/mm/yy'});
}
//------------------------------------------------------------------------------------
function checkdate1(obj)

alert(obj.id);
$("#"+obj.id).datepicker({dateFormat: 'yy-mm-dd'}); 

}
//------------------------------------------------------------------------------------

function validatePassword (pw, options) {
	// default options (allows any password) 
	var o = {
		lower:    0,
		upper:    0,
		alpha:    0, /* lower + upper */
		numeric:  0,
		special:  0,
		length:   [0, Infinity],
		custom:   [ /* regexes and/or functions */ ],
		badWords: [],
		badSequenceLength: 0,
		noQwertySequences: false,
		noSequential:      false,
	};

	for (var property in options)
		o[property] = options[property];

	var	re = {
			lower:   /[a-z]/g,
			upper:   /[A-Z]/g,
			alpha:   /[A-Z]/gi,
			numeric: /[0-9]/g,
			special: /[\W_]/g
		},
		rule, i;

	// enforce min/max length
	if (pw.length < o.length[0] || pw.length > o.length[1])
		return false;

	// enforce lower/upper/alpha/numeric/special rules
	for (rule in re) {
		if ((pw.match(re[rule]) || []).length < o[rule])
			return false;
	}

	// enforce word ban (case insensitive)
	for (i = 0; i < o.badWords.length; i++) {
		if (pw.toLowerCase().indexOf(o.badWords[i].toLowerCase()) > -1)
			return false;
	}

	// enforce the no sequential, identical characters rule
	if (o.noSequential && /([\S\s])\1/.test(pw))
		return false;

	// enforce alphanumeric/qwerty sequence ban rules
	if (o.badSequenceLength) {
		var	lower   = "abcdefghijklmnopqrstuvwxyz",
			upper   = lower.toUpperCase(),
			numbers = "0123456789",
			qwerty  = "qwertyuiopasdfghjklzxcvbnm",
			start   = o.badSequenceLength - 1,
			seq     = "_" + pw.slice(0, start);
		for (i = start; i < pw.length; i++) {
			seq = seq.slice(1) + pw.charAt(i);
			if (
				lower.indexOf(seq)   > -1 ||
				upper.indexOf(seq)   > -1 ||
				numbers.indexOf(seq) > -1 ||
				(o.noQwertySequences && qwerty.indexOf(seq) > -1)
			) {
				return false;
			}
		}
	}

	// enforce custom regex/function rules
	for (i = 0; i < o.custom.length; i++) {
		rule = o.custom[i];
		if (rule instanceof RegExp) {
			if (!rule.test(pw))
				return false;
		} else if (rule instanceof Function) {
			if (!rule(pw))
				return false;
		}
	}

	// great success!
	return true;
}
//------------------------------------------------------------------------------------------------
function dateset()
{
	
var dateStr9 = document.getElementById("commence").value;
var dt = new Date(dateStr9);
var y=dt.getFullYear()+1;
var dat=dt.getDate();
var mon=dt.getMonth();
var dateString = y+"-"+mon+"-"+dat;
document.getElementById("conclude").value=dateString; 
}
//----------------------------------------------------------------------------------------
function start()
{
  jQuery.post("function/login.php",
    {
    	userid:$("#login_user").val(),
    	password:$("#login_pass").val() 
        
},
  function( cb ) { 
  	
  		if(cb==1)
  		{
  	 	
  		document.getElementById("login").style.display="none";
  		gajax('function/master.php','main');
  		}
  		else{
  			alert("invalid user");
  		}
  		});
	
}
//--------------------------------------------------------------------------------------

function checkSubmit(e)
{
   if(e && e.keyCode == 13)
   { 
     start();
   }
}

 //--------------------------------------------------------------------------------------

function search()
{
	
    	
    		
    			
    		  jQuery.post("function/search1.php",
    {
    	cus:jQuery("#cusid").val()
   
    
   },
  function( data ) {  		
 document.getElementById("search").innerHTML=data;
});

}
//------------------------------------------------------------------------------------
function update(str)
{ 
     document.getElementById("closebtn").style.display="block";
	 jQuery.post("function/update.php",
    {
    id:str
   },
  function( data ) {  
	
 document.getElementById("update").innerHTML=data;

});

} 
//----------------------------------------------------------------------------------------
function finalupdate(str1)
{
	if(gvalidate1()==1)
	{

}
else{
	jQuery.post("function/finalupdate.php",
	{
    id1:str1,
    updatename:jQuery("#uname").val(), 
    updateadd:jQuery("#uadd").val(), 
    updatephone:jQuery("#uphone").val()
   },
  function( data ) {  		
  
 alert(data);

}); 
}
} 
//-----------------------------------------------------------------------------------------

 function gvalidate1()
{
	var flag=0;
var inputs, index;
inputs = document.getElementsByTagName('*');
for (index = 0; index < inputs.length; index++)
{
if(inputs[index].getAttribute("required")=="required")
{
	if(inputs[index].value=="")
	{
		inputs[index].style.border="1px solid red";
	flag=1;
	}
	
	else
	{
		inputs[index].style.border="1px solid #CCCCCC";
		
	}

}
}
if(flag==1)
{
	alert("enter fields");
	return 1;
}
}
//-----------------------------------------------------------------------------------
function close1()
{
	if(document.getElementById("none").value="close1")
	{
	document.getElementById("closebtn").style.display="none";

}
}
//--------------------------------------------------------------------------------------
function close2()
{
	if(document.getElementById("none1").value="detail1")
	{
	document.getElementById("detail").style.display="none";

}
}
//-------------------------------------------------------------------------------------
function detail(str)
{ 
     document.getElementById("detail").style.display="block";
	 jQuery.post("function/detail.php",
    {
    id:str
   },
  function( data ) {  
	
 document.getElementById("innerdiv").innerHTML=data;

});
}
//-----------------------------------------------------------------------------------
function detailupdate(str1)
{
	if(gvalidate1()==1)
	{

 }
else{
	jQuery.post("function/detailupdate.php",
	{
    id1:str1,
  detail2:jQuery("#dservice").val(), 
    detail3:jQuery("#dpur").val(),
     detail4:jQuery("#ddop").val(), 
    detail5:jQuery("#duiat").val(), 
    detail6:jQuery("#dumak").val(),
     detail7:jQuery("#dcap").val(), 
    detail8:jQuery("#dstar").val(), 
    detail9:jQuery("#dmodel").val(),
     detail10:jQuery("#dserial").val(), 
    detail11:jQuery("#dcmodel").val(), 
    detail12:jQuery("#dactype").val(),
       detail13:jQuery("#dtime").val()
    
   },
  function( data ) {  		
  
 alert(data);

}); 
}
}
//-----------------------------------------------------------------------------------------
function viewproduct(str)
{
	  document.getElementById("viewproduct").style.display="block";
	 jQuery.post("function/viewproduct.php",
    {
    id:str
   },
  function( data ) {  
	
 document.getElementById("innerview").innerHTML=data;

});
}
//-----------------------------------------------------------------------------------
function callimg()
{
 if(document.getElementById("custentry"))
 {
 	document.getElementById("addproduct").style.display="block";
 document.getElementById("saveproduct").style.display="block";
 document.getElementById("clearproduct").style.display="block";
 
 gajax('function/cusdetails.php','div2');
	}
	else if(document.getElementById("img1"))
	{
			document.getElementById("addproduct").style.display="none";
 document.getElementById("saveproduct").style.display="none";
 document.getElementById("clearproduct").style.display="none";
	}
}
//-----------------------------------------------------------------------------------
function callproduct()
//if(n>=1)
//	{
	
//	$("#product"+parseInt(n)-1).toggle("slow");
	//}	
{
	var dyndiv=document.createElement("div");
dyndiv.setAttribute("id","product"+n);
document.getElementById("product").appendChild(dyndiv);
gajax('function/productdetails.php','product'+n);
n++;

}

//--------------------------------------------------------------------------------------


function deleteproduct1(level,obj)
{
var r=confirm("Are You Sure Want to Delete ?");
if (r==true)
{
if(level===0)
{
return(obj.parentNode.removeChild(obj));
}
for (var i=1; i <=level; i++)
{
obj=obj.parentNode;
}
obj.parentNode.removeChild(obj);
--n;

}
else
{
}
} 
      
      
   

//----------------------------------------------------------------------------------------------

