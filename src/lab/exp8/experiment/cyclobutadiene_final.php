<?php include('config.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Cyclobutadiene</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="loadXMLDoc.js"></script>
<script type="text/javascript" src="cookie.js"></script>
<style>
	#container {
		height:1160px;
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
	if(mol!='cyclobutane')
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
		<?php $mode='mo cutoff 0.08;mo nomesh;mo fill;'; ?>
			<div id='table' style='padding-top:20px;padding-left:30px';>
	        <table>
		      	<tr>
		      		<td>
		      		    <div style='padding-left:0px;'>
		      				<img src='images/cyclobutadiene_comp.png' width='550px'; height='650px' usemap="#Map3" ></img>
		      				<map name="Map3" id="Map3">
		      					<area shape="rect" coords="70,10,310,170"  href="javascript:jmolScript('<?=$mode?>mo 17;')" />
		      					<area shape="rect" coords="80,220,270,380" href="javascript:jmolScript('<?=$mode?>mo 14;')"/>
		      					<area shape="rect" coords="330,220,520,390" href="javascript:jmolScript('<?=$mode?>mo 15;')"/>
		      					<area shape="rect" coords="100,480,300,650" href="javascript:jmolScript('<?=$mode?>mo 12;')" />
		      				</map>
		      				<p style="color:black;font-size:16px;">Click the orbital levels to view the molecular orbitals</p>
		      			</div>
		      		</td>
		      		<td>
		      			  <div style='padding-left:50px;'>
						      <script type="text/javascript">
						    	 jmolInitialize("<?php echo($jmol_path);?>");
						    	 jmolApplet("350", "load models/cyclobutadiene.log;wireframe 0.1;spacefill off;rotate y 20;rotate x 40;");
						    	 jmolScript('mo cutoff 0.08;mo color blue red;mo nomesh;mo fill;');
						      </script>
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
