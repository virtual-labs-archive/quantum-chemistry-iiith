<?php include('config.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Benzene</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="loadXMLDoc.js"></script>
<script type="text/javascript" src="cookie.js"></script>
<style>
	#container {
		height:1140px;
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
if(mol!='benzene')
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
	<div id='table' style='padding-top:20px;padding-left:0px';>
        <table>
	      	<tr>
	      		<td>
	      		    <div style='padding-left:0px;'>
	      				<img src='images/benzene_comp.png' width='650px'; height='650px' usemap="#Map3" ></img>
	      				<map name="Map3" id="Map3">
	      					<area shape="rect" coords="230,0,380,170"  href="javascript:jmolScript('<?=$mode?>mo 30;')" />
      						<area shape="rect" coords="50,120,210,300"  href="javascript:jmolScript('<?=$mode?>mo 22;')"/>
	      					<area shape="rect" coords="390,120,540,290" href="javascript:jmolScript('<?=$mode?>mo 23;')"/>
	      					<area shape="rect" coords="50,320,210,490" href="javascript:jmolScript('<?=$mode?>mo homo;')" />
	      					<area shape="rect" coords="370,320,520,480"  href="javascript:jmolScript('<?=$mode?>mo homo-1;')"/>
	      					<area shape="rect" coords="200,470,360,650"  href="javascript:jmolScript('<?=$mode?>mo homo-4;')" />
	      				</map>
	      				<br/>
	      				<p style="color:black;font-size:16px;">Click the orbital levels to view the molecular orbitals</p>
	      			</div>
	      		</td>
	      		<td>
	      			  <div style='padding-left:0px;'>
					      <script type="text/javascript">
					    	 jmolInitialize("<?php echo($jmol_path);?>");
					    	 jmolApplet("350", "load models/benzene.log;wireframe 0.1;spacefill off;rotate x -40;");
					    	
					      </script>
				      </div>
	      		</td>
	      	</tr>
      	</table>
      	</div>

		<br/>
		<div id ="bottom"></div>
 
		<div id="footer"><!--footer starts-->
			<a href="http://ccnsb.iiit.ac.in" target="_blank" style="font-style: italic;">Developed at CCNSB IIIT Hyderabad</a>
		</div><!--footer ends-->
		
	</div><!--content ends-->
	</div><!--container ends-->

</body>
</html>
