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
	#react{
	text-align:center;
	font-family: monospace;
	font-size: 20px;
	font-weight:bold;
	}
	#tab{
	text-align:center;
	padding-top:50px;
	padding-bottom:100px;
	padding-left:30px;
	}
	#title{
	text-align:center;
	font-family:serif;
	font-size: 40px;
	font-weight:bold;
	color:black;
	padding-top:50px;
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
		<div id="title">
			SN2 Reaction
		</div>
		<div id="tab">
				<table>
					<tr>
						<td>
							<img src="images/iodomethane.png" />
						</td>
						<td>
						<div id="react" style="width:40px;">+</div>
						</td>
						<td>
							<img src="images/chlorideion.png" style="width:50px"/>
						</td>
						<td>
							<div id="react" style="width:40px;">-></div>
						</td>
						<td>
							<img src="images/TS.png" />
						</td>
						<td>
							<div id="react" style="width:40px;">-></div>
						</td>
						<td>
							<img src="images/chloromethane.png" />
						</td>
						<td>
						<div id="react" style="width:50px;">+</div>
						</td>
						<td>
						<img src="images/iodoion.png" />
						</td>
					</tr>
					<tr>
					<td>
						<div id="react">
							IODOMETHANE
						</div>
					</td>
					<td></td>
					<td><div id="react">CHLORIDE ION</div></td>
					<td></td>
					<td><div id="react">TRANSITION STATE</div></td>
					<td></td>
					<td><div id="react">CHLOROMETHANE</div></td>
					<td></td>
					<td><div id="react">IODODE ION</div></td>
					</tr>
				</table>
		</div>
		<div style='text-align:center;'>
		<button onClick="location.href='gamess.php'" >Generate Gamess files</button>
		</div>
		<br/><br/>
		<div id ="bottom"></div>
		
		<div id="footer"><!--footer starts-->
			<a href="<?php echo($developed_link);?>" target="_blank" style="font-style: italic;"><?php echo($developed_txt);?></a>
		</div><!--footer ends-->
		
	</div><!--content ends-->
	</div><!--container ends-->

</body>
</html>
