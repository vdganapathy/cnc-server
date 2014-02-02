<?php
$strarr="";
$arrayString="";
$outputstr="";

function gencrypt($key,$sep,$gtext)
{
	global $arrayString;
	$sep=ord($sep)*$key;
	$separr=str_split($sep);
	$arr = str_split($gtext);
	for($i=0,$j=0;$i<count($arr);$i++,$j++)
{
	$arr2[$j]=ord($arr[$i])*$key;
	$arr2[++$j]=$sep;
}
for($i=0;$i<count($arr2);$i++)
{
	$arrayString=$arrayString.$arr2[$i];
}
echo $arrayString."<br>";

}

gdecrypt($key,$sep,$arrayString);


function gdecrypt($key,$sep,$arrayString)
{
global $arrayString,$strarr;
$sep=ord($sep)*$key;
$separr=str_split($sep);
$strarr= str_split($arrayString);
for ($i=0,$j=0,$s=$i,$f,$flag=0; $i <count($strarr); $i++) {
	
	
	if($strarr[$i]==$separr[$j])
	{
		if($flag==0)
		{
				$f=$i-1;
		}
	$flag=1;
		
		if($j==count($separr)-1)
		{
		gdecryptsub($s, $f);
		$s=$i;
		}
		++$j;
	} 
	else
	{
if($flag==1)
{
	$i=$i-1;
}
$j=0;
$flag=0;


    }
}
}


function gdecryptsub($s,$f)
{
	global $strarr,$outputstr,$key;
	for ($i=$s; $i <=$f; $i++) { 
		$singlechar=$singlechar.$strarr[$i];
	}
	$singlechar=$singlechar/$key;
	
	$outputstr=$outputstr.chr($singlechar);
	
}

echo "output:".$outputstr;

?>