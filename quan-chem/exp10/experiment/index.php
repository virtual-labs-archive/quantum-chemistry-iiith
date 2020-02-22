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
	#react{
	text-align:center;
	font-family: monospace;
	font-size: 20px;
	font-weight:bold;
	}
	#tab{
	text-align:center;
	padding-top:50px;
	padding-bottom:30px;
	padding-left:0px;
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
			S<sub>N</sub>2 Reaction
		</div>
		<div id="tab">
				<table>
					<tr>
						<td>
								<img src="images/chlorideion.png" style="width:60px"/>
						</td>
						<td>
								<div id="react" style="font-size:30px;width:30px;color:black;">+</div>
						</td>
						<td>
								<img width='200px' src="images/iodomethane.png" />
								
						</td>
						<td>
								<div id="react" style="width:40px;text-align:center;">
									<img src="images/arrow.jpg" width='30px' alt='arraow'></img>
								</div>
						</td>
						<td>
							    <img width='230px' height='100px' src="images/TS.png" />
						</td>
						<td>
								<div id="react" style="width:40px;text-align:center;">
									<img src="images/arrow.jpg" width='30px' alt='arraow'></img>
								</div>
						</td>
						<td>
							<img width='170px' src="images/chloromethane.png" />
						</td>
						<td>
								<div id="react" style="font-size:30px;width:40px;color:black;">+</div>
						</td>
						<td>
								<img width='70px' src="images/iodoion.png" />
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

		<p style='padding-left:70px;font-family: sans-serif;color:black;font-size:15px;width:900px;text-align:center; line-height: 1.5em;'>
			The S<sub>N</sub>2 reaction (also known as bimolecular nucleophilic substitution) is a type of nucleophilic substitution, where 
			a lone pair from a nucleophile attacks an electron deficient electrophilic center and bonds to it, expelling another
		 	group called a leaving group. Thus the incoming group replaces the leaving group in one step. Since two reacting 
		 	species are involved in the slow, rate-determining step of the reaction, this leads to the name bimolecular nucleophilic
		 	 substitution, or S<sub>N</sub>2. Among inorganic chemists, the SN2 reaction is often known as the interchange mechanism.
		</p>
				<div style='text-align:center;'>
		<button onClick="location.href='gamess.php'" >Generate Gamess files</button>
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
