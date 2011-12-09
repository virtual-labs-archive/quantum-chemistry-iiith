<?php include('config.php'); ?>
<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Gamess Output File</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="loadXMLDoc.js"></script>
<style>
	#container {
		height:910px;
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
		<br/><br/><br/>
		<center>
		<?php
			$name = $_SESSION['name'];
			$inp_file_name = $file_base."/".$name."/".$name."opt.log";
		?>
		<?php if($_SESSION['name']=='c60'){?>
				<h2> <a href="<?php echo($file_base."/".$name."/c60opt_orig.log");?>"> Generated GAMESS Output file </a> </h2>
				Showing first 1000 lines<br/>
		<?php }else{?>
	 	<h2> <a href="<?php echo($inp_file_name);?>"> Generated GAMESS Output file </a> </h2>
	 	<?php }?>
		
		<iframe src="output_bk.php" width="1000px" height="400px" frameborder="0"></iframe>
		 <br/><br/>
  		<form action="final_latest.php" /><input type="submit" value="NEXT"/> 
		</center>
		<br/><br/>
<div id ="bottom"></div>
		
		<div id="footer"><!--footer starts-->
			<a href="<?php echo($developed_link);?>" target="_blank" style="font-style: italic;"><?php echo($developed_txt);?></a>
		</div><!--footer ends-->
		
	</div><!--content ends-->
	</div><!--container ends-->

</body>
</html>
