<?php include('config.php');
session_start(); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Gamess Input</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="loadXMLDoc.js"></script>
<style>
	#container {
		height:800px;
		padding-left:0px;
	}
	</style>
</head>

<body>
	<script>
		loadXMLDoc('header_1.html','top_part');
		loadXMLDoc('bottom.html','bottom');
	</script>
	<div id="container"><!--container starts-->
		<div id="top_part">
		</div><!-- top_part -->
		<div id="content"><!--content starts-->
			<center>
				<br/><br/><br/><br/><br/><br/><br/><br/>
			
				<h2> Gamess Software </h2>
			    <h4> In this experiment we use following methods and procedures </h4>
				<table border="0">
				<tr>
					<td align="left"> Method </td>
					<th align="left"> Hartree-Fock </th>
				</tr>
				<tr>
					<td align="left"> Basis set </td>
					<?php if($_SESSION['name']=='c60'){?>
						<td align="left"> AM1 </td>
					<?php }else{?>
					<td align="left"> 6-31G(d)  </td>
					<?php }?>
				</tr>
				<tr>
					<td align="left"> Procedure   &nbsp; &nbsp; &nbsp; </td>
					<th align="left"> Optimization </th>
				</tr>
				</table>
			<br/><br/><br/>
	 		<form action="inp.php" method="post" /> 
	 		<input type="submit" value ="Go to Next Step " />
 		</center>
		<br/><br/><br/><br/><br/><br/><br/><br/>
		
	<div id ="bottom"></div>
		
		<div id="footer"><!--footer starts-->
			<a href="<?php echo($developed_link);?>" target="_blank" style="font-style: italic;"><?php echo($developed_txt);?></a>
		</div><!--footer ends-->
		
	</div><!--content ends-->
	</div><!--container ends-->

</body>
</html>
