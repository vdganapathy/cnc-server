function gninw() {

    var str="";
	var ones= new Array();
	var tens= new Array();
	ones=["","ONE","TWO","THREE","FOUR","FIVE","SIX","SEVEN","EIGHT","NINE","TEN","ELEVEN","TWELEVE","THIRTEEN","FOURTEEN","FIFTEEN","SIXTEEN","SEVENTEEN","EIGHTEEN","NINETEEN"];
	tens=["","","TWENTY ","THIRTY ","FOURTY ","FIFTY ","SIXTY ","SEVENTY ","EIGHTY ","NINETY "];
    var txt=document.getElementById("total").value;
    var result=document.getElementById("words");
  
 if(isNaN(txt)||txt=="")
{
	str="No Number";
	
} 
else
{
	    h=txt/10000000;
	    h=Math.floor(h);
	    p=txt%10000000;
	   
	    if(h!==0)
		{
		    if (h >= 20 && h <= 99) {
		        a = h / 10;
		        a = Math.floor(a);
		        b = h % 10;
		        str = str + tens[a];
		        str = str + ones[b] + " CRORE ";

		    }
		    else {
		        str = str + ones[h] + " CRORE ";
		    }
		}
		
		h=p/100000;
	    h=Math.floor(h);
	    p1=p%100000;
	   
	    if(h!==0)
		{
		    if (h >= 20 && h <= 99) {
		        a = h / 10;
		        a = Math.floor(a);
		        b = h % 10;
		        str = str + tens[a];
		        str = str + ones[b] + " LAKSH ";

		    }
		    else {
		        str = str + ones[h] + " LAKSH ";
		    }
		}
	      
	    
		h=p1/1000;
		p2=p1%1000;
		h=Math.floor(h);
		if(h!==0)
		{
            if(h>=20&&h<=99)
		{
		    a = h / 10;
            a=Math.floor(a);
		    b = h % 10;
		    str = str + tens[a];
		    str = str + ones[b]+" THOUSAND ";
		    
		}
        else{
        str=str+ones[h]+" THOUSAND ";    
        }
        	
		}
		h=p2/100;
		h=Math.floor(h);
		p3=p2%100;
		if(h!==0)
		{
		str=str+ones[h]+" HUNDRED ";
		}
		    
		if(p3>=20&&p3<=99)
		{
			h=p3/10;
			h=Math.floor(h);
			p4=p3%10;
			str=str+tens[h];
			str=str+ones[p4];
		}
		else
		{
            str=str+ones[p3];			
		}
		

}
 
 
 result.value=str+" ONLY";
 return;
 }
//-----------------------------------------------------------------------------------------------
 function add()
{
var a=document.getElementById('address').value;
document.getElementById('dadd').value=a;
}

  var n=1;
  
  function ghide (level,obj) {
    for(i=0;i<=level;i++)
    {
        obj=obj.parentNode;
    }
    obj.style.display="none";
  }
  
  function billsearch()
        {
         
                	jQuery.post("function/search.php",
    {
      poid:jQuery("#billsear").val()
             
},
  function( data ) {  
 jQuery("#searchdata").html(data);
  	
});
        }
  
 //----------------------------------------------------------------------------------------------- 
  
  function gremove(level,obj)
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
		  gcalc();
  }
else
  {
 
  } 
	    
  }
  
//-----------------------------------------------------------------------------------------------
  
  function gadditem()
  
 {  
 	n++;
 	jQuery("#itemtab").append("<tr><td>Vat:<\/td><td><select id=\"tax"+n+"\" onChange=\"gcalc();\"><option value=\"14.5\">14.5<\/option><option value=\"5\">5<\/option><option value=\"2\">2<\/option><\/select><\/td><td>Desc<\/td><td><textarea required=\"required\" style=\"height: 60px;\" id=\"d"+n+"\"></textarea><\/td><td>Quantity<\/td><td><input required=\"required\" type=\"text\"  style=\"width:30px;\"  id=\"q"+n+"\" onkeyup=\"gcalc();\"><\/td><td>Price<\/td><td><input required=\"required\"  type=\"text\" style=\"width:50px;\" id=\"p"+n+"\"  onkeyup=\"gcalc();\" ><\/td><td>U.Rate<\/td><td><input required=\"required\" type=\"text\" id=\"uprice"+n+"\" style=\"width:60px;\"><\/td><td> Amount<\/td><td><input required=\"required\" type=\"text\"  id=\"a"+n+"\" style=\"width:60px;\"><\/td><td><img src=\"img\/remove.png\" class=\"rembtn\"  alt=\"\" onclick=\"gremove(2,this);\" ><\/td><\/tr>");
    window.scrollBy(0,50);
    
   }
//----------------------------------------------------------------------------------------------- 
    jQuery(document).ready(function(){
    	
        	
    	jQuery("#printbtn").click(function(){
    	$('#printfrm').submit();
    	
    	});
    	
    	
  
    	jQuery("#deletebtn").click(function(){
                  
var r=confirm("Are You Sure Want to Delete ?");
if (r==true)
  {

       	jQuery.post("function/delete.php",
    {
      poid:jQuery("#billsear").val()
             
},
  function( data ) {  
  alert("Purchase Order ID: "+data+" Deleted");
  	
});  
  }
});  

 
  
    	jQuery("#searchbtn").click(function(){
    	jQuery("#searchview").css("display","block");
   	
});  	  
    
	
    	
jQuery("#savebtn").click(function(){
con=gvalidate();
if(con==1)
{
}
else
{
  jQuery("#load").css("display","inline");
jQuery.post("function/insert.php",
    {
    	cusname:jQuery("#cusname").val(),
    	address:jQuery("#address").val(),
    	phone:jQuery("#phone").val(),
    	email:jQuery("#email").val(),
      ponumber:jQuery("#ponumber").val(),
      podate:jQuery("#date").val(),
      invoiceno:jQuery("#invno").val(),
      invoicedate:jQuery("#date1").val(),
      deliveryaddress:jQuery("#dadd").val(),
      subtotal:jQuery("#subtotal").val(),
      vat5:jQuery("#vat2").val(),
      vat14:jQuery("#vat1").val(),
      cst:jQuery("#cst").val(),
      round:jQuery("#round").val(),
      total:jQuery("#total").val(),
      inwords:jQuery("#words").val()
        
},
  function( data ) {  		
  	
});
var count=n;

  	for(i=1;i<=count;i++)
  	{
  		if(jQuery("#tax"+i))
  		{
  		  		
  		jQuery.post("function/iteminsert.php",
    {
    	ponumber:jQuery("#ponumber").val(),
    	tax:jQuery("#tax"+i).val(),
    	desc:jQuery("#d"+i).val(),
    	q:jQuery("#q"+i).val(),
    	p:jQuery("#p"+i).val(),
    	tamt:jQuery("#a"+i).val(),
    	uprice:jQuery("#uprice"+i).val() 
    	     
    },
  function( data ) {
    	jQuery("#load").hide();
    	alert("PO SAVED");
    	window.location.href='http://www.shoppersultimate.com/bill';
    	
	
  });
  }

}
}
    		
    		

});
});
//-----------------------------------------------------------------------------------------------
function gget(str)
{
	return document.getElementById(str).value;
}
//-----------------------------------------------------------------------------------------------
function gcalc()
{
	
	var subtotal=0;
	var grandtotal=0;
	var vat14=0;
	var vat5=0;
	var vat2=0;
	var roundoff=0;
	for(i=1;i<=n;i++)
	{
	 q=gget("q"+i);
	 p=gget("p"+i);
	 tax=parseFloat(gget("tax"+i))+100;
	 
	untprice=(p/tax)*100;
	untprice=untprice.toFixed();	
	jQuery("#uprice"+i).val(untprice);
	if(tax==114.5)
	 {
	 vat14=vat14+(p-untprice)*q;
	}
	else if(tax==105)
	{
	vat5=vat5+(p-untprice)*q;
	}
	else
	{
	vat2=vat2+(p-untprice)*q;	
	}
	jQuery("#a"+i).val(untprice*q);
	subtotal= subtotal+parseFloat(jQuery("#a"+i).val());
	jQuery("#subtotal").val(subtotal);
	jQuery("#vat1").val(vat5);
	jQuery("#vat2").val(vat14);
	jQuery("#cst").val(vat2);
	grandtotal= grandtotal+(q*p);
	jQuery("#total").val(grandtotal);
	jQuery("#round").val(roundoff);
	gninw();
	}
	
	
}
//-----------------------------------------------------------------------------------------------
function gvalidate()
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
	alert("Please Enter All Fields..");
	return 1;
}
}
//-----------------------------------------------------------------------------------------------
function gclear()
{
	window.location.href='http://www.shoppersultimate.com/bill';
}
//-----------------------------------------------------------------------------------------------
function login()
{
	alert("called");
       	jQuery.post("function/login.php",
    {
      login_user:jQuery("#login_user").val(),
      login_pass:jQuery("#login_pass").val()
    },
  function(data) { 
            if(data==1)
          {
  jQuery(".ghilt").fadeOut("slow", function () {$(this).css("display","none");});
          }
          else
              {
                   jQuery("#login_data").show().html("Login Failed..........").fadeOut(3000);
                  
              }
  	
});   	
}
//-----------------------------------------------------------------------------------------------