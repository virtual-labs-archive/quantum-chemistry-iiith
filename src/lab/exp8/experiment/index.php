<?php include('config.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo($exp_name);?></title>
<link href="style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
img {border: none;}
#container {
width: 1100px;
height:895px;
}
.container2 {
	height: 360px;
	width: 910px;
	padding-left:300px;
	padding-top:2%;
	padding-bottom:2%;

}
ul.thumb {
	float: left;
	list-style: none;
	margin: 0; padding: 10px;
	width: 550px;
}
ul.thumb li {
	margin: 0;
	padding-left:50px;
	padding-right:30px;
	padding-bottom:40px;
	float: left;
	position: relative;
	width: 160px;
	height: 160px;
}
ul.thumb li img {
	width: 150px; height: 150px;
	border: 1px solid #ddd;
	padding: 5px;
	background: #f0f0f0;
	position: absolute;
	left: 0; top: 0;
	-ms-interpolation-mode: bicubic; 
}
ul.thumb li img.hover {
	background:url(thumb_bg.png) no-repeat center center;
	border: none;
}
ul#list-nav li a {
    width: 185px;
}
#main_view {
	float: left;
	padding: 9px 0;
	margin-left: -10px;
}
</style>
<script type="text/javascript" src="jquery-latest.js"></script> 
<script type="text/javascript"> 
$(document).ready(function(){

//Larger thumbnail preview 

$("ul.thumb li").hover(function() {
	$(this).css({'z-index' : '10'});
	$(this).find('img').addClass("hover").stop()
		.animate({
			marginTop: '-140px', 
			marginLeft: '-140px', 
			top: '50%', 
			left: '50%', 
			width: '250px', 
			height: '250px',
			padding: '20px' 
		}, 200);
	
	} , function() {
	$(this).css({'z-index' : '0'});
	$(this).find('img').removeClass("hover").stop()
		.animate({
			marginTop: '0', 
			marginLeft: '0',
			top: '0', 
			left: '0', 
			width: '150px', 
			height: '150px', 
			padding: '10px'
		}, 400);
});

//Swap Image on Click
	$("ul.thumb li a").click(function() {
		
		var mainImage = $(this).attr("href"); //Find Image Name
		$("#main_view img").attr({ src: mainImage });
		return false;		
	});
 
});
</script> 


<script type="text/javascript" src="loadXMLDoc.js"></script>
</head>

<body>
	<script>
		loadXMLDoc('header.html','top_part');
		loadXMLDoc('bottom.html','bottom');
	</script>
	<div id="container" ><!--container starts-->
	  <div id="top_part">
	  			<!-- to be filled with Ajax -->
      </div><!-- top partends -->
		<div id="content"><!--content starts-->
			<div id="ExpTitle" style="font-size:30px;padding-top:50px;padding-left:280px;font-family: times, serif;text-align:left;color:black;text-indent:30px;">
					Huckel Molecular Orbital Theory
			</div>	
			<div class="container2">
				<ul class="thumb">
					<?php 
						 $files = Array('ethylene','butadiene',"benzene","cyclobutadiene");
						 for($i=0;$i<=3;$i++){
					 ?>
					<li>
						<script>
							function nextPage(link)
							{
								window.location = "matrix.php?mol_name="+link.name;
							}
						</script>
						<a href="#" onclick='nextPage(this);' name="<?php echo($files[$i]);?>">
							<img	 id="<?php echo($files[$i]);?>" 
								 onclick='redirect' 
								 width='500px' 
								 src="<?php echo($file_base);?>/<?php echo($files[$i]);?>_1.png" 
								 alt="Molecule Image" />
						</a>
					</li>
					<?}?>
			</ul>
			</div>
			<script type="text/javascript">
			$(document).ready(function(){
			 	$('ul.thumb li').Zoomer({speedView:400,speedRemove:500,altAnim:true,speedTitle:400,debug:false});
			});
			</script>
			<div id="bottom" style="padding-top:50px">
			</div>	<!-- Bottom ends -->
		
		<div id="footer"><!--footer starts-->
			<a href="<?php echo($developed_link);?>" target="_blank" style="font-style: italic;"><?php echo($developed_txt);?></a>
		</div><!--footer ends-->
	</div><!--content ends-->

	</div><!--container ends-->
	
</body>
</html>
