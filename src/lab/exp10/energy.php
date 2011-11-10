<?php include('config.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>SN2 Reaction</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="loadXMLDoc.js"></script>
<style>
	#container {
		height:930px;
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
	padding-bottom:100px;
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
	ans['input1']=3.4;
	ans['input2']=3.4;
	ans['input3']=3.4;
	ans['input4']=3.4;
	ans['input5']=3.4;
	var ERR=0.1;
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
	var userans = parseFloat(str);
	var corrans = parseFloat(ans[input.id]);
	if(Math.abs(userans-corrans)>ERR){
		iscorr=false;
	}
	var color = 'white';
	if(str=='')color='white';
	else if(iscorr)color='#52D017';
	else color = '#F62817';
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
	
		<div id="tab">
				
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
		</div>
	
		<br/><br/>
		<script>
			for(var i=1;i<=5;++i){
			changeVal(document.getElementById('input'+i));
			}
		</script>
		<div id ="bottom"></div>
		
		<div id="footer"><!--footer starts-->
			<a href="<?php echo($developed_link);?>" target="_blank" style="font-style: italic;"><?php echo($developed_txt);?></a>
		</div><!--footer ends-->
		
	</div><!--content ends-->
	</div><!--container ends-->

</body>
</html>
