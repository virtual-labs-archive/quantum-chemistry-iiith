<?php include('config.php'); ?>
<?php
session_start();

$name = $_SESSION['name'];
$id =1;
if(!empty($_GET['id'])){
	$id=$_GET['id'];
}
$filename = $file_base."/".$name."/".$name.$id.".xyz";

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Energy Calculations</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<style>
	#container {
		height:1000px;
		padding-left:0px;
	}
</style>
 <script src="<?php echo($jmol_path);?>/Jmol.js"></script>
    <script type="text/javascript">
	function FindPosition(oElement)
	{
	  if(typeof( oElement.offsetParent ) != "undefined")
	  {
	    for(var posX = 0, posY = 0; oElement; oElement = oElement.offsetParent)
	    {
	      posX += oElement.offsetLeft;
	      posY += oElement.offsetTop;
	    }
	      return [ posX, posY ];
	    }
	    else
	    {
	      return [ oElement.x, oElement.y ];
	    }
	}
	function GetCoordinates(e)
	{
	  var PosX = 0;
	  var PosY = 0;
	  var ImgPos;
	  var myImg = document.getElementById("pointer_div");
	  ImgPos = FindPosition(myImg);
	  if (!e) var e = window.event;
	  if (e.pageX || e.pageY)
	  {
	    PosX = e.pageX;
	    PosY = e.pageY;
	  }
	  else if (e.clientX || e.clientY)
	    {
	      PosX = e.clientX + document.body.scrollLeft
		+ document.documentElement.scrollLeft;
	      PosY = e.clientY + document.body.scrollTop
		+ document.documentElement.scrollTop;
	    }
	  PosX = PosX - ImgPos[0];
	  PosY = PosY - ImgPos[1];
	  
	var id=-1;
	   
    	

	var Name ="<?php echo($name); ?>";
	var pos_x =PosX;
	var pos_y =PosY;
	
	if(Name == "water")
	{
		     if(Math.abs(pos_x-085)<=10 && Math.abs(pos_y-189)<=10)id=1;
		else if(Math.abs(pos_x-142)<=10 && Math.abs(pos_y-73)<=10)id=2;
		else if(Math.abs(pos_x-199)<=10 && Math.abs(pos_y-241)<=10)id=3;
		else if(Math.abs(pos_x-257)<=10 && Math.abs(pos_y-259)<=10)id=4;
		else if(Math.abs(pos_x-315)<=10 && Math.abs(pos_y-271)<=10)id=5;
		else if(Math.abs(pos_x-375)<=10 && Math.abs(pos_y-269)<=10)id=6;		
	}
	else if(Name == "ammonia")
	{
		     if(Math.abs(pos_x-086)<=10 && Math.abs(pos_y-078)<=10)id=1;
		else if(Math.abs(pos_x-140)<=10 && Math.abs(pos_y-268)<=10)id=2;
		else if(Math.abs(pos_x-200)<=10 && Math.abs(pos_y-271)<=10)id=3;
		else if(Math.abs(pos_x-256)<=10 && Math.abs(pos_y-272)<=10)id=4;
		else if(Math.abs(pos_x-313)<=10 && Math.abs(pos_y-271)<=10)id=5;
		else if(Math.abs(pos_x-372)<=10 && Math.abs(pos_y-273)<=10)id=6;
	}
	else if(Name == "formaldehyde" )
	{
		     if(Math.abs(pos_x-087)<=10 && Math.abs(pos_y-096)<=10)id=1;
		else if(Math.abs(pos_x-128)<=10 && Math.abs(pos_y-196)<=10)id=2;
		else if(Math.abs(pos_x-179)<=10 && Math.abs(pos_y-240)<=10)id=3;
		else if(Math.abs(pos_x-227)<=10 && Math.abs(pos_y-246)<=10)id=4;
		else if(Math.abs(pos_x-279)<=10 && Math.abs(pos_y-271)<=10)id=5;
		else if(Math.abs(pos_x-324)<=10 && Math.abs(pos_y-270)<=10)id=6;
		else if(Math.abs(pos_x-378)<=10 && Math.abs(pos_y-271)<=10)id=7;		
	}	
	else if(Name == "benzene")
	{
	             if(Math.abs(pos_x-088)<=10 && Math.abs(pos_y-082)<=10)id=1;
		else if(Math.abs(pos_x-159)<=10 && Math.abs(pos_y-275)<=10)id=2;
		else if(Math.abs(pos_x-228)<=10 && Math.abs(pos_y-284)<=10)id=3;
		else if(Math.abs(pos_x-297)<=10 && Math.abs(pos_y-280)<=10)id=4;
		else if(Math.abs(pos_x-367)<=10 && Math.abs(pos_y-283)<=10)id=5;		
	}
	else if(Name == "c60")
	{
		     if(Math.abs(pos_x-088)<=10 && Math.abs(pos_y-75)<=10)id=1;
		else if(Math.abs(pos_x-159)<=10 && Math.abs(pos_y-210)<=10)id=2;
		else if(Math.abs(pos_x-227)<=10 && Math.abs(pos_y-279)<=10)id=3;
		else if(Math.abs(pos_x-297)<=10 && Math.abs(pos_y-279)<=10)id=4;
		else if(Math.abs(pos_x-367)<=10 && Math.abs(pos_y-278)<=10)id=5;
	}
	else if(Name == "methane")
	{
		     if(Math.abs(pos_x-083)<=10 && Math.abs(pos_y-88)<=10)id=1;
		else if(Math.abs(pos_x-137)<=10 && Math.abs(pos_y-263)<=10)id=2;
		else if(Math.abs(pos_x-198)<=10 && Math.abs(pos_y-263)<=10)id=3;
		else if(Math.abs(pos_x-256)<=10 && Math.abs(pos_y-270)<=10)id=4;
		else if(Math.abs(pos_x-311)<=10 && Math.abs(pos_y-270)<=10)id=5;
		else if(Math.abs(pos_x-372)<=10 && Math.abs(pos_y-272)<=10)id=6;
	}
	else alert("Unkown name:" + this.name);

	var url = window.location.href;
	var url_parts = url.split('?');
	var main_url = url_parts[0]; 
//	id=-1;

	if(id > 0)
	{
		window.location = main_url+"?id="+id+"#table";
	}	
	/*
	  document.getElementById("x").innerHTML = PosX;
	  document.getElementById("y").innerHTML = PosY;
	  document.getElementById("id").innerHTML = id;	  
*/
	
}
//-->
</script>
<script type="text/javascript" src="loadXMLDoc.js"></script>
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
    		<a name="table"></a>
			<div id="title" style="padding-left:8%;font-size:2.3em;font-family:Sans-serif" >
				<h3> Energy Calculation for <?php echo($name); ?> Molecule </h3>
			</div>
		<center>
     	<script>
      		jmolInitialize("<?php echo($jmol_path);?>");
      		jmolCheckBrowser("popup", "<?php echo($browser_chk);?>", "onClick");
	    </script>
	    <!--
	    	<p>X:<span id="x"></span></p>
		<p>Y:<span id="y"></span></p>
		<p>ID:<span id="id"></span></p>
		-->
	    <table border="0">
    	  <tr>
      			<td>
						<div id="applet">      	
		 					<script>
		    						jmolApplet(450, "load <?php echo($filename);?>");
		  					</script>
						</div>
	 			</td>
	 			<td>
					  <div id="pointer_div" onmousedown = 'GetCoordinates(event);'  style = "width:450px;height:350px;" name="<?php echo($name);?>" >
					  	<img src="<?php echo($file_base);?>/<?php echo($name); ?>/en.png" width="450px" height ="350px" id="cross" />
					  </div>
					  <div style="text-align:center;font-size:18px;">
						<br/>Click on the data points for corrsponding structure
					</div>
				</td>
      		</tr>
    	</table>
	<br/><br/>
	</center>
		<div id ="bottom"></div>
		
		<div id="footer"><!--footer starts-->
			<a href="<?php echo($developed_link);?>" target="_blank" style="font-style: italic;"><?php echo($developed_txt);?></a>
		</div><!--footer ends-->
		
	</div><!--content ends-->
	</div><!--container ends-->

</body>
</html>
