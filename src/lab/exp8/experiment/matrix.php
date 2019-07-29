<?php include('config.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Matrix</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="loadXMLDoc.js"></script>
<script type="text/javascript" src="cookie.js"></script>
<style>
	#container {
		height:950px;
		padding-left:0px;
	}
	ul#list-nav li a {
    width: 175px;
}
</style>
<style>
	#matrix{
		padding-left:130px;
		
	}
	#matrix input{
		width:18px;
		height:18px;
		padding-left:7px;
		padding-bottom:2px; 
		background-color:#C0C0C0;	
		font-weight:bold;
		color:black;
		border:0px; 
	}
	#row{
	padding-top:5px;
	}
	#expheader{
		padding-top:30px;
		padding-left:100px;
		color:black;
		font-size:18px;	
	}
	
</style>

<?php $n=3;

$mol_name='';
if(!empty($_GET['mol_name'])){
	$mol_name = $_GET['mol_name'];
}
//if mol_name is missing or wrong load default page
if($mol_name!='ethylene'&&$mol_name!='butadiene'&&$mol_name!='benzene'&&$mol_name!='cyclobutadiene')
{
	  header( 'Location: matrix.php?mol_name=ethylene' ) ;
}

?>
<script>
<?php
//$n==3 or mol_name=MOL
if($mol_name=='ethylene'){
	$n=2;
	?>
	var matrix = [
						['x',1],
						[1,'x'],
				 ];
	 <?php 
} 
elseif($mol_name=='butadiene'){
	$n=4;
	?>
	var matrix = [
						['x',1,0,0],
						[1,'x',1,0],
						[0,1,'x',1],
						[0,0,1,'x']
				 ];
	 <?php 
} 
elseif($mol_name=='benzene'){
	$n=6;
	?>
	var matrix = [
						['x',1,0,0,0,1],
						[1,'x',1,0,0,0],
						[0,1,'x',1,0,0],
						[0,0,1,'x',1,0],
						[0,0,0,1,'x',1],
						[1,0,0,0,1,'x']
				 ];
	 <?php 
} 
elseif($mol_name=='cyclobutadiene'){
	$n=4;
	?>
	var matrix = [
					['x',1,0,1],
					[1,'x',1,0],
					[0,1,'x',1],
					[1,0,1,'x']
			 ];
 <?php 
}
?>
var n=<?=$n?>; 
var check = new Array(n);
for(var i=0;i<n;++i)
	 check[i]=new Array(n);
for(var i=0;i<n;++i)
	 for(var j=0;j<n;++j)
		 check[i][j]=false;


function changeVal(input,row,col){
	var str=input.value;
	iscorr=false;
	if(str==matrix[row][col]){
		iscorr=true;
	}
	check[row][col]=iscorr;
	var color = '#C0C0C0';
	if(str=='')color='#C0C0C0';
	else if(iscorr)color='#52D017';
	else color = '#F62817';
	input.style.backgroundColor=color;
	var isDone=true;
	var n=<?=$n?>;
	for(var i=0;i<n&&isDone;++i)
		for(var j=0;j<n&&isDone;++j)
			if(check[i][j]==false)
				isDone=false;
	if(isDone)
	{
		//Done with matrix, redirect 
		alert('Matrix is correct');
		writeCookie('mol','<?=$mol_name?>', 3);
		window.location='<?=$mol_name?>_final.php';
	}
}
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
		<div id="expheader">
		Note the structure of the selected molecule shown below has carbon atoms numbered(C1,C2...) <br/>
		Fill the elements of the secular matrix <br/>
			<div>
				<ul>
					<li>
					<table>
					<tr>
					<td>use</td>
					<td><img src="images/x_.png"></img></td>
					<td><a href="http://ccnsb04-iiith.virtual-labs.ac.in/exp8/index.php?section=Theory">see in main theory.</a> </td>
					</tr>
					</table>
					</li>
					<li>Each element van be either 'x', '1' or '0' .<br/></li>
				</ul>				
			</div> 
		</div>
		<div id='matrix'>
		
			<table border='0'>
			<tr>
				<td>
					<img src='images/matrix-left.jpeg' height='<?php echo($n*35);?>px' width='20px'></img>
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
								<td style='padding:5px;'>
									<input
									id='input<?=($n*$i+$j)?>'
									maxlength="1"
									onkeyup='changeVal(this,<?=$i?>,<?=$j?>)';
									/>
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
					<img src='images/matrix-right.jpg' height='<?php echo($n*35);?>px' width='20px'></img>
				</td>
				<td>
					<div style='font-size:30px;color:black;'>X</div>
				</td>
				<td>	
					<img src='images/matrix-left.jpeg' height='<?php echo($n*35);?>px' width='20px'></img>
				</td>
				<td>
					<?php for($i=0;$i<$n;$i++){
						?>
						<div style='font-size:20px;color:black;padding-top:5px;'>
							c<?php echo($i+1);?>
						</div>
						<?php 
					}?>
				</td>
				<td>
					<img src='images/matrix-right.jpg' height='<?php echo($n*35);?>px' width='20px'></img>
				</td>
				<td>
				<div style='font-size:30px;color:black;padding-top:5px;'>
						= 0
				</div>
				</td>
				<td>
					<img src='images/<?=$mol_name?>.png' width='450px' height='350px'></img>
				</td>
			</tr>
			
			</table>
		</div>
		<br/><br/>
		<script>
			var n=<?=$n?>;
			
			for(var i=0;i<n;++i){
				for(var j=0;j<n;++j){
					changeVal(document.getElementById('input'+(n*i+j)),i,j);
				}
			}
			
		</script>
		<div id ="bottom"></div>
		
		<div id="footer"><!--footer starts-->
			<a href="http://ccnsb.iiit.ac.in" target="_blank" style="font-style: italic;">Developed at CCNSB IIIT Hyderabad</a>
		</div><!--footer ends-->
		
	</div><!--content ends-->
	</div><!--container ends-->

</body>
</html>
