<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>SN2 Reaction</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="loadXMLDoc.js"></script>
<style>
	#container {
		height:950px;
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
	padding-top:0px;
	padding-bottom:50px;
	padding-left:120px;
	
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
		width:100px;
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
	ans['input1']=-457.4441195019;
	ans['input2']=-6927.3037512632;
	ans['input3']=-7384.6792289743;
	ans['input4']=-496.7949966204;
	ans['input5']=-6887.9709264051;
var isDone=new Array();
for(var i=1;i<=5;++i)isDone['input'+i]=false;

	var ERR=0.001;
function checkComplete(){
	var flag=true; 
	for(var i=1;i<=5;++i){
		if(!isDone['input'+i]){
			flag=false;
			break;
		}
	}
	var image = document.getElementById('activation');
	if(flag)image.src='images/activation_corr.png';
	else image.src='images/activation.png';
		 
}
function changeVal(input){
	var str = input.value;
	var iscorr = true;
	if(str=='')iscorr=false;
	var ctr=0;
	for(var i=0;i<str.length;++i){
		if(!(isDigit(str.charAt(i))||(str.charAt(i)=='.'))){
			
			if(str.charAt(i)=='-'||str.charAt(i)=='+')break;
			iscorr=false;
		}
		if(str.charAt(i)=='.')ctr++;
	}
	if(ctr>=2)iscorr=false;
	var V=1000;
	var userans = parseInt(parseFloat(str)*V)/V;
	var corrans = parseInt(parseFloat(ans[input.id])*V)/V;
	if(Math.abs(userans-corrans)>ERR){
		iscorr=false;
	}
	isDone[input.id]=iscorr;
	var color = 'white';
	if(str=='')color='white';
	else if(iscorr)color='#52D017';
	else color = '#F62817';

	checkComplete();
	
	input.style.backgroundColor=color;
	return iscorr;
}
function loadPage()
{
	for(var i=1;i<=5;++i){
		changeVal(document.getElementById('input'+i));
		}
}
</script>
</head>

<body onload='loadPage()'>
	<script>
		loadXMLDoc('header.html','top_part');
		loadXMLDoc('bottom.html','bottom');
	</script>
	<div id="container"><!--container starts-->
		<div id="top_part">
		</div><!-- top_part -->
		
		<div id="content"><!--content starts-->
		<br/><br/><br/>
		
	
		<div id="tab">
		<table>
		<tr>
			<td>
				<div style='text-align:left'>
					Calculate Energies (in kcal/mol) to <b>three</b> decimal places only:
				</div>
				<table>
					<tr>
						<td colspan="2"><div id='head'>Reactants :</div></td>
					</tr>
					<tr>
						<td><div id='legend'>Iodo methane:  </div></td>
						<td><div id='inp'><input id="input1"  onKeyUp="changeVal(this)"/></div></td>
					</tr>
					<tr>
						<td><div id='legend'>Chloride ion:  </div></td>
						<td><div id='inp'><input id="input2"  onKeyUp="changeVal(this)"/></div>
					</tr>
					<tr>
						<td colspan="2"><div id='head'>Transition state:</div></td>
					</tr>
					<tr>
						<td><div id='legend'>Transition state: </div></td>
						<td><div id='inp'><input id="input3"  onKeyUp="changeVal(this)"/></div>
					</tr>
					<tr>
						<td colspan="2"><div id='head'>Products:</div></td>
					</tr>
					<tr>
						<td><div id='legend'>Chloromethane:</div></td>
						<td><div id='inp'><input id="input4"  onKeyUp="changeVal(this)"/></div>
					</tr>
					<tr>
						<td><div id='legend'>Iodide ion:     </div></td>
						<td><div id='inp'><input id="input5"  onKeyUp="changeVal(this)"/></div>
					</tr>
				</table>
			</td>
			<td>
				<div style='padding-top:100px;'>
				<img id='activation' src='images/activation.png' width='450px'></img>
				</div>
			</td>
		</tr>
		</table>
		
		</div>
	
		<br/><br/>
		<div id ="bottom"></div>
		
		<div id="footer"><!--footer starts-->
			<a href="http://ccnsb.iiit.ac.in" target="_blank" style="font-style: italic;">Developed at CCNSB IIIT Hyderabad</a>
		</div><!--footer ends-->
		
	</div><!--content ends-->
	</div><!--container ends-->

</body>
</html>
