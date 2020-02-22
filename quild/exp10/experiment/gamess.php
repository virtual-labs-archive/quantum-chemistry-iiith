
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>SN2 Reaction</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="loadXMLDoc.js"></script>
<head>	
	<script type="text/javascript">
		var type="inp";
		var title="idomethane";
		var title_id='IODOMETHANE';
		function getCheckedValue(radioObj) {
			if(!radioObj)
				return "";
			var radioLength = radioObj.length;
			if(radioLength == undefined)
				if(radioObj.checked)
					return radioObj.value;
				else
					return "";
			for(var i = 0; i < radioLength; i++) {
				if(radioObj[i].checked) {
					return radioObj[i].value;
				}
			}
			return "";
		}
		function change(val)
		{
			
			type=getCheckedValue(document.getElementsByName('group1'));
			
			document.getElementById("iframe").innerHTML='<iframe src="inp_bk.php?file='+title+'&type='+type+'" width="1000px" height="400px" frameborder="0"></iframe>';
			var link='';
			if(type=='inp')
				link = '<a href="input/'+title+'.inp">'+title_id+' Input File</a>';
			else
				link = '<a href="output/'+title+'.out">'+title_id+' Output File</a>'; 
				
			document.getElementById("selection").innerHTML = link;
		}
		function mouseOver(img)
		{
			
			img.style.backgroundColor='#9AFEFF';
			img.style.border='3px solid black';
		}
		function mouseOut(img)
		{
			img.style.backgroundColor='white';
			img.style.border='3px solid white';
		}
		function loadPage(img)
		{
			title=img.title;
			title_id=img.id;
			type=getCheckedValue(document.getElementsByName('group1'));
			document.getElementById("iframe").innerHTML='<iframe src="inp_bk.php?file='+img.title+'&type='+type+'" width="1000px" height="400px" frameborder="0"></iframe>';
			var link='';
			if(type=='inp')
				link = '<a href="input/'+title+'.inp">'+img.id+' Input File</a>';
			else
				link = '<a href="output/'+title+'.out">'+img.id+' Output File</a>'; 
			document.getElementById("selection").innerHTML = link;
			
		}
		</script>
	<script type="text/javascript" src="scripts/shCore.js"></script>
	<script type="text/javascript" src="scripts/shBrushPhp.js"></script>
	<link type="text/css" rel="stylesheet" href="styles/shCore.css"/>
	<link type="text/css" rel="stylesheet" href="styles/shThemeDefault.css"/>
	<script type="text/javascript">
		SyntaxHighlighter.config.clipboardSwf = 'scripts/clipboard.swf';
		SyntaxHighlighter.all();
	</script>
<style>
	#container {
		height:1230px;
		padding-left:0px;
	}
	#react{
	text-align:center;
	font-family: monospace;
	font-size: 20px;
	font-weight:bold;
	}
	#tab{
	text-align:center;
	padding-top:20px;
	padding-bottom:40px;
	padding-left:0px;
	}
	.title{
	text-align:center;
	font-family:serif;
	font-size: 20px;
	font-weight:bold;
	color:black;
	padding-top:10px;
	}
	.images{
	border:3px solid white;
	padding-top:10px;
	padding-bottom:10px;
	padding-left:10px;
	padding-right:10px;
	border-bottom-right-radius:1.8em;
    border-top-right-radius: 1.8em;
    border-bottom-left-radius:1.8em;
    border-top-left-radius: 1.8em;
    
	}
</style>
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
		<div class="title">
			S<sub>N</sub>2 Reaction
		</div>
	
		<div id="tab">
				<table>
					<tr>
						<td>
							<div onmouseover="mouseOver(this)"onmouseout="mouseOut(this)" id="CHLORIDE ION" title="chloride" onclick="loadPage(this)" class = 'images'>
								<img src="images/chlorideion.png" style="width:60px"/>
							</div>
						</td>
						<td>
							<div id="react" style="font-size:30px;width:30px;color:black;">+</div>
						</td>
						<td>
							<div onmouseover="mouseOver(this)" onmouseout="mouseOut(this)" onclick="loadPage(this)" id="IODOMETHANE" title="idomethane" class = 'images'>
								<img width='180px' src="images/iodomethane.png" />
							</div>

						</td>
						<td>
							    <div id="react" style="width:30px;text-align:center;">
									<img src="images/arrow.jpg" width='30px' alt='arraow'></img>
								</div>
						</td>
						<td>
							<div onmouseover="mouseOver(this)" onmouseout="mouseOut(this)" id="TRANSITION STATE" title="ts" class = 'images' onclick="loadPage(this)" >
								<img width='210px' height='100px' src="images/TS.png" />
							</div>
						</td>
						<td>
								<div id="react" style="width:30px;text-align:center;">
									<img src="images/arrow.jpg" width='30px' alt='arraow'></img>
								</div>
						</td>
						<td>
							<div onmouseover="mouseOver(this)" onmouseout="mouseOut(this)" id="CHLOROMETHANE" title='chloromethane' class = 'images' onclick="loadPage(this)">
								<img width='150px' src="images/chloromethane.png" />
							</div>
						</td>
						<td>
									<div id="react" style="font-size:30px;width:40px;color:black;">+</div>
						</td>
						<td>
							<div onmouseover="mouseOver(this)" onmouseout="mouseOut(this)" id="IODIDE ION" onclick="loadPage(this)" title="idodide" class = 'images'>
								<img width='70px' src="images/iodoion.png" />
							</div>
						</td>
					</tr>
					<tr>
					<td><div id="react">CHLORIDE ION</div></td>
					<td></td>
					<td><div id="react">IODOMETHANE</div></td>
					<td></td>
					<td><div id="react">TRANSITION STATE</div></td>
					<td></td>
					<td><div id="react">CHLOROMETHANE</div></td>
					<td></td>
					<td><div id="react">IODIDE ION</div></td>
					</tr>
				</table>
		</div>

		<form name="myform" >
		<div align="center">
		<input type="radio" id='inp' name="group1" value="inp" onchange="change('inp')" checked >
		<label for='inp'>Input</label></input>
		<input type="radio" id='out' name="group1" value="out" onchange="change('out')">
		<label for='out'>Output</label></input><br>
		</div>
		</form>
		<br/><br/>
		
		<div id="selection" class="title">
			<a href="input/idomethane.inp">IODOMETHANE  Input File</a>
		</div>

		<div id="iframe" width='1000px' height='400px'style="padding-bottom:20px;">
			<iframe src="inp_bk.php?file=idomethane&type=inp" width="1000px" height="400px" frameborder="0"></iframe>
		</div>
		<div align="center" style='padding-bottom:20px;'>
			<button onClick="location.href='energy.php'">Calculate Energies</button>
		</div>
		<div id ="bottom"></div>
		
		<div id="footer"><!--footer starts-->
			<a href="http://ccnsb.iiit.ac.in" target="_blank" style="font-style: italic;">Developed at CCNSB IIIT Hyderabad</a>
		</div><!--footer ends-->
		
	</div><!--content ends-->
	</div><!--container ends-->

</body>
</html>
