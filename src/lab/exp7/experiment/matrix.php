<?php
$n=3;
$X=array(1,1,1);
$m1 = array(
			array(-1,3,0),
			array(3,5,2),
			array(0,2,-4)
			); 
$e1 = array(
			array(2.238,-2.662,9.376),
			array(9.045,-3.015,-3.015),
			array(3.629,9.156,1.733)
			);
$EV=array(0,0,0);

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
		height:920px;
		padding-left:0px;
	}
	ul#list-nav li a {
    width: 190px;
    }
    #matrix{
    	font-size:20px;
    	color:black;
    	text-align:right;
    	padding-left:10px;
    	padding-top:30px;
    }
 	#matrix input{
		width:30px;
		height:18px;
		padding-left:3px;
		padding-bottom:2px; 
		background-color:#C0C0C0;	
		font-weight:bold;
		color:black;
		border:0px; 
	}
}
</style>
<script>
<?php $Axcolor="white";?>
var x=[<?=$X[0]?>,<?=$X[1]?>,<?=$X[2]?>];
function draw(){
	
	jmolScript('draw arrow1 arrow {0,0,0} {'+x[0]+','+x[1]+','+x[2]+'} width 0.12 ">A{ '+x[0]+' , '+x[1]+' , '+x[2]+'}";');
	var eig=
	'draw line1 {<?=(-$e1[0][0])?>,<?=(-$e1[0][1])?>,<?=(-$e1[0][2])?>}'+
		'{<?=$e1[0][0]?>,<?=$e1[0][1]?>,<?=$e1[0][2]?>} width  0.002"V1";'+
	'draw line2 {<?=(-$e1[1][0])?>,<?=(-$e1[1][1])?>,<?=(-$e1[1][2])?>}'+
		'{<?=$e1[1][0]?>,<?=$e1[1][1]?>,<?=$e1[1][2]?>} width  0.002"V2";'+
	'draw line3 {<?=(-$e1[2][0])?>,<?=(-$e1[2][1])?>,<?=(-$e1[2][2])?>}'+
		'{<?=$e1[2][0]?>,<?=$e1[2][1]?>,<?=$e1[2][2]?>} width  0.002"V3";'+
	'set axes on;set axis2Color "<?=$Axcolor?>";set axis3Color "<?=$Axcolor?>";'+
	'set axis1Color "<?=$Axcolor?>";axes 0.001;' +
	'color $line1 [0,255,0];color $line2 [0,255,0];color $line3	 [0,255,0];';
	jmolScript(eig);
	jmolScript('select line1;color [255, 165, 0];');

}
var n=<?=$n?>;
var y= new Array(n);
var mat=[	[-1,3,0],
         	[3,5,2],
         	[0,2,-4]
		];
function functionName(a,b,c,d) {
	alert(a);
}
function multi(){

	for(var i=0;i<n;++i){
		var ss=document.getElementById('i'+(i+1)).value;
		if(ss=='')continue;
		var tt=parseFloat(ss);
		if(tt<=1000&&tt>=-10000)
		x[i]=tt;
	}
	for(var i=0;i<n;++i){
		var sum=0;
		for(var j=0;j<n;++j)
				sum=sum+mat[i][j]*x[j];
		y[i]=parseInt(sum*1000)/1000.0;
	}
	
	for(var i=0;i<n;++i)
		document.getElementById('o'+(i+1)).innerHTML=y[i];
	jmolScript('draw arrow1 arrow {0,0,0} {'+x[0]+','+x[1]+','+x[2]+'} width 0.15 ">A";');
	jmolScript('draw arrow2 arrow {0,0,0} {'+y[0]+','+y[1]+','+y[2]+'} width 0.15 ">B";');
	jmolScript('color $arrow1 [0,255,255];color $arrow2 [255,0,0];');
	//jmolScript('bind "LEFT" "_pickPoint";');
	jmolSetCallback("pickCallback", "functionName");
		
	
	
}
</script>
</head>

<body onload='draw()'>

	<script>
		jmolInitialize("../../jmol/");
		//jmolSetAppletColor("white");
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
						<img src='images/matrix-left.jpeg' height='100px' width='20px'></img>
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
									<td style='width:20px;height:20px;'>
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
						<img src='images/matrix-right.jpg' height='100px' width='20px'></img>
					</td>
					<td>X</td>
					<td>
						<img src='images/matrix-left.jpeg' height='100px' width='20px'></img>
					</td>
					<td>
						<table>
						<?php for($i=0;$i<$n;$i++){?>
						<tr>
							<td style='padding-bottom:5px;'>
								<input id='i<?=($i+1)?>' value='<?=$X[$i]?>' onkeyup='multi()' maxlength="4"></input>
							</td>
						</tr>
						<?php }?>
						</table>
						
					</td>
					<td>
						<img src='images/matrix-right.jpg' height='100px' width='20px'></img>
					</td>
					<td>
					=
					</td>
					<td>
						<img src='images/matrix-left.jpeg' height='100px' width='20px'></img>
					</td>
					<td>
						<table>
							<tr><td style='padding-bottom:5px;width:30px;' id='o1'></td></tr>
							<tr><td style='padding-bottom:5px;width:30px;' id='o2'></td></tr>
							<tr><td style='padding-bottom:5px;width:30px;' id='o3'></td></tr>
						</table>
					</td>
					<td>
						<img src='images/matrix-right.jpg' height='100px' width='20px'></img>
					</td>
					</tr>
					<tr>	
							<td>
								<table>
									<?php for($i=0;$i<$n;$i++){?>
									<tr>
										<td><?=$EV[$i]?></td>
										<?php for($j=0;$j<$n;$j++){?>
										<td><?=$e1[$i][$j];?></td>
										<?php }?>
									</tr>
									
									<?php }?>
								</table>
						    </td>
						 </tr>
	    				</table>
					</td>
					<td style='padding-left:100px'>
	                    <script type="text/javascript">
	   						jmolApplet(400);
	   						multi();
	   						
  						</script>
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
