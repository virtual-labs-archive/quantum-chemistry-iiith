<script language="JavaScript">

var nl = getNewLine()

function getNewLine() {
	var agent = navigator.userAgent

	if (agent.indexOf("Win") >= 0)
		return "\r\n"
	else
		if (agent.indexOf("Mac") >= 0)
			return "\r"

 	return "\r"

}

pagecode = '<?php include(\'config.php\'); ?>
<?php
session_start();
$check=0;
 if($_GET["mol_name"])
 {
	$name = $_GET["mol_name"];
	$flag=0;
	
	if($name == "water")
	{
		$file_names= array(1 => "O.xyz",2 => "OH.xyz", 3 => "OH2.xyz",0 => "OH2.xyz");
		$flag=1;
	}
	else if($name == "ammonia")
        {
                $file_names= array(1 => "N.xyz",2 => "NH.xyz", 3 => "NH2.xyz",0 => "NH3.xyz",4 => "NH3.xyz");
                $flag=1;
        }
        else if($name=="formaldehyde")
	{
		 $file_names= array(1 => "O.xyz",2 => "OC.xyz", 3 => "OCH.xyz",4 => "OCHH.xyz",0 => "OCHH.xyz");
                 $flag=1;
	}
	else
	{
		
		header("Location: gamesinput.php");
	}
	$file_index=0;
	$_SESSION[\'file_names\']=$file_names;
	$_SESSION[\'file_index\']=$file_index;
	$_SESSION[\'zmat_line\']=0;
	$_SESSION[\'name\']=$name;
	$check=1;
	
}
if($_POST[\'render\'])
{
	$correct_selection =0 ;	
	$file_index = $_SESSION[\'file_index\'];
	$check=1;
	
	$file_names=  $_SESSION[\'file_names\'];
	$name = $_SESSION[\'name\'];
	include("check.php");
	//echo $correct_selection;
	if($correct_selection==1)
		$_SESSION[\'file_index\'] = $_SESSION[\'file_index\']+1;
		
	$name = $_SESSION[\'name\'];
	$file_index = $_SESSION[\'file_index\'];
	
	
	
	
	
}
if($check==1)
{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Z-Matrix Calculation </title>
<link href="style.css" rel="stylesheet" type="text/css" />

<style>
	
	td
	{
		text-align:left;
	}
	input#bond_length
	{
		width:70px;
	}
	
	#container {
		height:1070px;
		padding-left:0px;
	}
	#table{
		color:#800000;
		font-size:1.3em;
	}
	
</style>
<scr'+'ipt src="<?php echo($jmol_path);?>/Jmol.js"></scr'+'ipt>
<scr'+'ipt type="text/javascript" src="loadXMLDoc.js"></scr'+'ipt>
</head>

<body>

	<scr'+'ipt>
		loadXMLDoc(\'header_1.html\',\'top_part\');
		loadXMLDoc(\'bottom.html\',\'bottom\');
	</scr'+'ipt>
	<div id="container" ><!--container starts-->
		<div id="top_part">
	
		</div><!-- top_part -->
		<div id="content"><!--content starts-->
			<scr'+'ipt>
				      jmolInitialize("<?php echo($jmol_path);?>");
				      jmolCheckBrowser("popup", "<?php echo($browser_chk);?>", "onClick");
			</scr'+'ipt>
			<div style="padding-left:70px;padding-top:80px;">
				<a name="calc"></a>
			      <table border="0">
				<tr>
					 <td >
					 	
						<?php $structure_img = $file_base."/".$name."/".$name.".png" ;?>
						<img src=<?php echo $structure_img ?> width=270 height=270 />
						<br /> 
						<div style="text-align:center;">
						Follow the convertion of the atom odering
						</div>
					</td>
					<td width="70px"></td>
					<td>
					    <?php $jmol_file = $file_base."/".$name."/".$file_names[$file_index]; ?>
			
					    <scr'+'ipt>
					      var script =
					      "load <?php echo $jmol_file ; ?>; wireframe .1; cpk off; spacefill 20%;" +
					      "frame 3; vectors on; color vectors yellow;" +
					      "move 10 -20 10 0 0 0 0 0 1; delay 1; vibration on;";
					      jmolApplet(330, script);
					    </scr'+'ipt>
					  </td>
					  <td width="30px"></td>

					  <td> 
						  <scr'+'ipt>
							      jmolRadio("spacefill 20%", "spacefill 20% <br />", "checked");
							      jmolRadio("spacefill 25%", "spacefill 25% <br />");
							      jmolRadio("spacefill 50%", "spacefill 50% <br />");
							      jmolRadio("spacefill 75%", "spacefill 75% <br />");
						              jmolBr();
							      jmolRadioGroup(["wireframe off",
							      "wireframe on",
							      ["wireframe 0.1",null,"checked"],
							      "wireframe 0.3"
							      ], "<br />");
							      jmolBr();
							      jmolBr();
							      jmolCheckbox("spin on", "spin off", "spin");
                                                  </scr'+'ipt>
					 </td>
		
				</tr>
	      	   </table>
	      	  </div>
	      <div>
	      <br /><br /><br />
		<div style="height:230px">
		<center>
		<div id="zmatrix" >
			  <div id="heading">
					   <div id="z-mat" style=\'color:black;font-family:"Times New Roman", Times, serif;font-size:1.5em;\'>
					    <h3> Z-matrix calculation </h3>
					   </div>
			  </div>	
		<?php
			if($name!="water")
			{
				if($file_index!=4)
				{
			
			?>
			<form action="zmatrix.php#calc" method="post" />
			<?php
				}
				else
				{
				?>
				<form action="gamesinput.php" method="post" />
				<?php
	
				}
			}
			else
			{
				if($file_index!=3)
				{
				?>
					<form action="zmatrix.php#calc" method="post" />
				<?php
				}
				else
				{
				?>
					<form action="gamesinput.php" method="post" />
				<?php
				}
			}	
			
			?>
		<div id="table">
	
		<table border=0 style="margin-left:-100px;">
	
		<?php 
			if($name=="ammonia")
			{
				include("ammonia.php");
			}
			else if($name=="formaldehyde")
			{
				include("formaldehyde.php");
			}
			else if($name=="water")
			{
				include("water.php");
			}
		?>
		</table>
		</div>
		<div class="notice">
			<p> Choose atoms According to numbering provided in figure </p>
			<?php if($file_index!=4){?>	
			<div id="correct" style="color:green;font-size:2.0em;">			
				<p><?php echo $message; ?> </p>
			</div>
			<div id="error" style="color:red;font-size:2.0em;"> 
							<p><?php echo $err_message; ?> </p>
			</div>
			<?php }?>
		</div>
		 </div> <!-- zmatrix -->
		</center>
		</div><!-- set height -->
		<div id ="bottom"></div>

		</div><!--content ends-->	
		
		<div id="footer"><!--footer starts-->
			<a href="<?php echo($developed_link);?>" target="_blank" style="font-style: italic;"><?php echo($developed_txt);?></a>
		</div><!--footer ends-->
		</div>

	</div><!--container ends-->

</body>
<?php } ?>
</html>'

document.write(pagecode);

</script>
