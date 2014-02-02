function sel (data)


 {
  
  jQuery.post("function/select.php",
    {
    	
    	
        
},
  function( cb ) {  
  	document.getElementById('indiv').innerHTML=cb;		
});

}
//-----------------------------------------------------------------------------------------------

function btn()
{
	jQuery.post("function/add.php",
	{
		item:data		
	},
	function(back)
	{
		
		{
			x=sel(back);
		}
	});

}
//-------------------------------------------------------------------------------------------------

function del(id)
{

var x;
var r=confirm("Do you want to delete this!");
if (r==true)
  {
  	jQuery.post("function/delete.php",
	{
		item:id	
	},
	function(back)
	{
		
	sel(back);
	
	});
 	 x="Item Deleted!";
  }
else
  {
 	 x="You pressed Cancel!";
  }
}
//--------------------------------------------------------------------------------------------------------------------

function choosedate()
{
	
	$("[id$=datetxt]").datepicker({dateFormat: 'dd/mm/yy'});
}
//------------------------------------------------------------------------------------------------------------------------
function valid()
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
	alert("Pls enter the required fields");

}
else
	{
		reconfirm();
		
	}
}
//---------------------------------------------------------------------------------------------------------------------------
function reconfirm()
{
		 if(document.getElementById("naturetxt").value=="--Select Compliant--")
 	 {
 	 	alert("please select the customer complaint");
 	 }
 	 	 if(document.getElementById("status").value=="--Select Status--")
 	 {
 	 	alert("please select the customer Status");
 	 }
 	 else{
 	 	submit();
 	 }
}
//-----------------------------------------------------------------------------------------------------------------------------------
 function testing()
{
 	alert("am trying");
	document.getElementById("modeless").style.display="block";
jQuery.post("function/modeless.php",
	{
			
	},
	function(back)
	{
		{
			document.getElementById('modeless').innerHTML=back;	
		}
	});

}
//-----------------------------------------------------------------------------------------------------------------------------

function ad_data()
{
	
	var txt, index;
	var temp=new Array();
	var str="?";
	txt = modeless.getElementsByTagName("input");
	
	for (index = 0; index < txt.length; index++)
	{
		if(txt[index].getAttribute("type")=="text")
		{
		temp=txt[index].value;
		
		str=str+"t"+index+"="+temp+"&";
		}
	}
	var count=txt.length;
	
	jQuery.post("function/add.php"+str+"count="+count,
	{
		
	},
	function(back)
	{
		sel(back);
	});
}
//--------------------------------------------------------------------------------------------------------------------------------