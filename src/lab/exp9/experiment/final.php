<?php include('config.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Energy Calculation</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="loadXMLDoc.js"></script>
<style>
	#container {
		height:910px;
		padding-left:0px;
	}
	#legend{
	text-align:right;
	font-family: monospace;
	font-size: 15px;
	color:black;
	}
	#tab{
	text-align:center;
	padding-top:30px;
	padding-bottom:30px;
	padding-left:300px;
	
	}
	#head{
	text-align:left;
	font-family:serif;
	font-size: 20px;
	font-weight:bold;
	color:black;
	padding-top:50px;
	}
	input{
		width:50px;
		background-color:white;	
		font-weight:bold;
		color:black; 
	}
</style>
<script type="text/javascript">
function isDigit(aChar){
	   myCharCode = aChar.charCodeAt(0);
	   if((myCharCode > 47) && (myCharCode <  58))return true;
	   return false;
	}
	var ans = new Array();
	ans['input1']=0.0098510755383;
	ans['input2']=2.24207635381;
	ans['input3']=4.65604838152;
	ans['input4']=2.80095745552;
	ans['input5']=2.02624450776;
	ans['input6']=6.1023992722;
	ans['input7']=9.02460470696;
	ans['input8']=6.10626159009;
	ans['input9']=2.02338953006;
	ans['input10']=2.79794503581;
	ans['input11']=4.65754831628;
	ans['input12']=2.23911369557;
	ans['input13']=0.0;
	
	var ERR=0.00;
function changeVal(input){
	
	var str = input.value;
	var iscorr = true;
	var ctr=0;
	for(var i=0;i<str.length;++i){
		if(!(isDigit(str.charAt(i))||(str.charAt(i)=='.'))){
			iscorr=false;
			break;
		}
		if(str.charAt(i)=='.')ctr++;
	}
	if(ctr>=2)iscorr=false;
	var V=100;
	var userans = parseInt(parseFloat(str)*V)/V;
	var corrans = parseInt(parseFloat(ans[input.id])*V)/V;
	if(Math.abs(userans-corrans)>ERR){
		iscorr=false;
	}
	var color = 'white';
	if(str=='')color='white';
	else if(iscorr)color='#52D017';
	else color = '#F62817';
	//input.value=corrans;
	input.style.backgroundColor=color;
}
</script>
</head>

<body>
	<script>
		loadXMLDoc('header.html','top_part');
		loadXMLDoc('bottom.html','bottom');
	</script>
	<div id="container"><!--container starts-->
		<div id="top_part">
		</div><!-- top_part -->

		<div id="content"><!--content starts-->
		<br/><br/><br/>
		<div>
		Calculate Energies (in kcal/mol) to two decimal places only:
		</div>
		<div id="tab">
				
				
		<table>
			
				<?php 
				$ang=-180;for($i=0;$i<13;++$i){?>
				<tr style='height:30px;'>
				<td><div id='legend'><?php echo($ang);?>.0 :</div></td>
				<td><div id='inp'><input id="input<?php echo($i+1);?>"  onKeyUp="changeVal(this)"/></div></td>
				</tr>
				<?php
				 $ang+=30;
				}?>
			
	
		</table>
		 
		</div>
	Note: 1 hartree = 627.509 kcal mol-1.
		<br/><br/>
		<script>
			for(var i=1;i<=5;++i){
			changeVal(document.getElementById('input'+i));
			}
		</script>
		<div id ="bottom"></div>
		
		<div id="footer"><!--footer starts-->
			<a href="http://ccnsb.iiit.ac.in" target="_blank" style="font-style: italic;">Developed at CCNSB IIIT Hyderabad</a>
		</div><!--footer ends-->
		
	</div><!--content ends-->
	</div><!--container ends-->

</body>
</html>
