<?php
$n=2;
$X=array(1,1);
$m1 = array(
			array(1.5,1.0),
			array(1.0,1.5),
			); 
$e1 = array(
			array(-0.71, 0.71),
			array( 0.71, 0.71),
			);
$EV=array(0.5,2.5);

?>
<?php include('config.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Matrix</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="loadXMLDoc.js"></script>
  <script src="../../jmol/Jmol.js" type="text/javascript"></script> <!-- REQUIRED -->
<style>
	#container {
		height:1050px;
		padding-left:0px;
	}
	ul#list-nav li a {
    width: 190px;
    }
    #matrix{
    	font-size:20px;
    	color:black;
    	text-align:center;
    	padding-left:100px;
    	padding-top:30px;
    }
    #quiz{
    	color:Black;
    	font-size:18px;
    	padding-left:200px;
    }
 	#quiz input{
		width:30px;
		height:18px;
		padding-left:3px;
		padding-bottom:2px; 
		background-color:#C0C0C0;	
		font-weight:bold;
		color:black;
		border:0px; 
	}
	#eigen{
		text-align:left;
	}
	
	 #eigen table {
                width: 350px;
                caption-side: bottom;
                border: thin solid black;
                table-layout: fixed;
                border-spacing: 0;
                margin: 5px;
            }
     #eigen th {
                background: lightgrey;
            }
     
            
}
</style>
</head>

<body onload='draw()'>

	<script>
		
		loadXMLDoc('header.html','top_part');
		loadXMLDoc('bottom.html','bottom');
	</script>
	<div id="container"><!--container starts-->
		<div id="top_part">
		</div><!-- top_part -->
		
		<div id="content"><!--content starts-->
		<br/><br/><br/>
		<div id='matrix'>
		<table>
		<tr>
			<td>
				<table>
					<tr>
						<td>
							<img src='images/matrix-left.jpeg' height='80px' width='20px'></img>
						</td>
						<td>
							<table>
								<?php 
								for($i=0;$i<$n;$i++){
									?>
									<tr>
									<?php
									for($j=0;$j<$n;$j++){
										?>
										<td style='width:40px;height:20px;'>
											<?php echo($m1[$i][$j]);?>
										</td>
										<?php 
									}
									?>
									</tr>
									<?php
								}?>
							</table>
						</td>
						<td>
							<img src='images/matrix-right.jpg' height='80px' width='20px'></img>
						</td>
						<td>x</td>
						<td style="width:20px;">P</td>
						<td>
						=
						</td>
						<td style="width:20px;">Q</td>
					 </tr>
				</table>
					<br/>
				<div id="eigen">
				<table>
					<th>Eigen values</th>
					<th>Eigen vectors</th>
								<?php for($i=0;$i<$n;$i++){?>
									<tr>
										<td>
											&nbsp;
											<img src="images/lam.png" width="25px"></img>
											<sub><?=($i+1)?></sub>&nbsp;&nbsp;=	
											<span style="font-weight:bold;font-size:28px;"><?=$EV[$i]?></span></td>
										<td>
										<b>V<sub><?=$i+1?></sub></b>= (	
										<?php for($j=0;$j<$n;$j++){
										echo($e1[$i][$j]);
										if($j<$n-1)echo("&nbsp;,");
										}?>
										)
										
										</td>
									</tr>
									
									<?php }?>
				</table>
			</div>
			</td>
			<td style="padding-left:40px;">
				<applet code="eigen3.class" width=500 height=400></applet>
				<br/>
				<p style="font-size:16px;">
				Select a point <b>P</b> on the circle by clicking on the applet. Notice, that the resultant vector <b>Q</b> 
				lies on the ellipse.The values in the bracket shows the distance of vector from the origin. The color of 
				the point <b>Q</b> is given according to the distance from the origin. (See the colormap).<br/>
				Use 'C' to remove the vectors and it's projections.
				</p>
			</td>
		</tr>
		</table>
		</div>
		<!-- 
		<div  id="quiz">
		<script>
		
		var V = new Array(-1,-1);
		var cv = new Array(<?=$EV[0]?>,<?=$EV[1]?>);
		function changeVal(inp,t){
			var str=inp.value;
			var cval = cv[t];
			V[t]=parseFloat(inp.value);
			
			var iscorr=false;
			if(V[t]==cv[t])iscorr=true;
			var color = '#C0C0C0';
			if(str=='')color='#C0C0C0';
			else if(iscorr)color='#52D017';
			else color = '#F62817';
			inp.style.backgroundColor=color;
			if(V[0]==cv[0] &&V[1]==cv[1]){
				alert("Correct Answer");
				window.location("eigen2.php");
			}
		}
		</script>
			if <b>P</b> = c<sub>1</sub><b>V<sub>1</sub></b> + c<sub>2</sub><b>V<sub>2</sub></b> <br/>
			then <b>Q</b>=<b>M P</b> <br/><br/>
			<b>Q </b>= <input id="v1" maxlength=3 onkeyup='changeVal(this,0)';></input> 
			c<sub>1</sub><b>V<sub>1</sub></b> + <input id="v1" maxlength=2 onkeyup='changeVal(this,1)';></input> 
			c<sub>2</sub><b>V<sub>2</sub></b> <br/>
		</div>
		-->
		<br/><br/>
		<div id ="bottom"></div>
		
		<div id="footer"><!--footer starts-->
			<a href="http://ccnsb.iiit.ac.in" target="_blank" style="font-style: italic;">Developed at CCNSB IIIT Hyderabad</a>
		</div><!--footer ends-->
		
	</div><!--content ends-->
	</div><!--container ends-->

</body>
</html>
