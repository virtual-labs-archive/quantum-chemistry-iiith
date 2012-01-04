<?php include('config.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Ethylene</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="loadXMLDoc.js"></script>
<script type="text/javascript" src="cookie.js"></script>
<style>
	#container {
		height:890px;
		padding-left:0px;
	}
	ul#list-nav li a {
    width: 175px;
}
</style>
<script src="<?php echo($jmol_path);?>/Jmol.js" type="text/javascript"></script> <!-- REQUIRED -->
<script>
/*
var mol=readCookie('mol');
if(mol!='ethylene')
	window.location='index.php';
*/
</script>
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
		<br/><br/><br/>
		<?php $mode='mo cutoff 0.13;mo nomesh;mo fill;'; ?>
      <table>
      	<tr>
      		<td>
      		    <div style='padding-left:50px;'>
      				<img src='images/ethylene_comp.png' width='500px'; usemap="#Map3" ></img>
      				<map name="Map3" id="Map3">
      					<area shape="rect" coords="70,70,370,230" href="javascript:jmolScript('<?=$mode?>mo lumo;')"/>
      					<area shape="rect" coords="70,270,390,430"  href="javascript:jmolScript('<?=$mode?>mo homo;')"/>
      				</map>
      				<p style="color:black;font-size:16px;">Click the orbital levels to view the molecular orbitals</p>
      			</div>
      		</td>
      		<td>
      			  <div style='padding-left:50px;'>
				      <script type="text/javascript">
				    	 jmolInitialize("<?php echo($jmol_path);?>");
				    	 jmolApplet("350", "load models/ethylene.log;wireframe 0.1;spacefill off;rotate y 30;rotate x 40;");
				    	 jmolScript('mo cutoff 0.1;mo color blue red;mo nomesh;mo fill;');
				      </script>
			      </div>
      		</td>
      	</tr>
      </table>
		<br/><br/>
		<div id ="bottom"></div>
 
		<div id="footer"><!--footer starts-->
			<a href="http://ccnsb.iiit.ac.in" target="_blank" style="font-style: italic;">Developed at CCNSB IIIT Hyderabad</a>
		</div><!--footer ends-->
		
	</div><!--content ends-->
	</div><!--container ends-->

</body>
</html>
