<?php include('config.php'); ?>
<?php
session_start();
$name = $_SESSION['name'];
$normal_mode_file = $file_base."/".$name."/"."normalmode.txt";
$lines = file($normal_mode_file);

$arr2=array(null);
$state=0;
$a1=0;
for($i=0;$i<count($lines);$i++)
{
	if(strstr($lines[$i],"FREQUENCY:"))
	{
		$arr=preg_split("/[\s]+/ ",$lines[$i]);

		$tr[$a1++]=count($arr)-3;
		if($state==0)
		{
			$state=1;
			for($j=0;$j<count($arr);$j++)
			{
				if($arr[$j]=="FREQUENCY:")
				{
					unset($arr[$j]);
					unset($arr[0]);
					break;
				}
			}
			$arr2=$arr;

		}
		else if($state==1)
		{
			for($j=0;$j<count($arr);$j++)
			{
				if($arr[$j]=="FREQUENCY:")
				{
					unset($arr[$j]);
					unset($arr[0]);
					break;
				}
			}
			$arr2=array_merge($arr2,$arr);
		}
	}
}
$arr3=Array(null);
$ix=0;
for($l1=0;$l1<$a1;$l1++)
{
	if($ix==0)
	{
		unset($arr2[$tr[$l1]]);
		$ix=1;
		$count=$tr[$l1];
	}
	else
	{
		$count=$count+$tr[$l1]+1;
		unset($arr2[$count]);
	}
}
sort($arr2);
echo '<script type="text/javascript">';
echo 'var js_array = new Array();';
for($i=0;$i<count($arr2);$i++)
{
	echo 'js_array['.$i.'] ='.$arr2[$i].";";
}
echo '</script>';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Z-Matrix Calculation</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<style>
td {
	text-align: left;
}

input#bond_length {
	width: 70px;
}

#container {
	height: 930px;
	padding-left: 0px;
}
</style>
<script src="../../jmol/Jmol.js"></script>
<script type="text/javascript" src="loadXMLDoc.js"></script>
</head>

<body>
	<script>
		loadXMLDoc('header_1.html','top_part');
		loadXMLDoc('bottom.html','bottom');
	</script>
	<div id="container">
		<!--container starts-->
		<div id="top_part"></div>
		<!--header ends-->
		<div id="content">
			<!--content starts-->
			<div style="font-size: 30px; padding-left: 70px; padding-top: 50px;">
			<?php echo($name);?>
			</div>
	     	<script>
	      		jmolInitialize("<?php echo($jmol_path);?>");
	      		jmolCheckBrowser("popup", "<?php echo($browser_chk);?>", "onClick");
		    </script>
			<div style="padding-left: 70px; padding-top: 10px;">

				<table border="0">
					<tr>
						<td><?php $structure_img = $file_base."/".$name."/".$name.".png" ;?>
							<img src=<?php echo($structure_img);?> width=270 height=270 /> <br />
						</td>
						<td width="70px"></td>
						<td><?php $jmol_file = $file_base."/".$name."/".$name."nm.log" ?> 
							<script>
						      var script =
						      "load <?php echo $jmol_file ; ?>; wireframe .1; cpk off; spacefill 20%;" +
						      "frame 3; vectors on; color vectors yellow;" +
						      "move 10 -20 10 0 0 0 0 0 1; delay 1; vibration on;";
						      jmolApplet(330, script);
						    </script>
						 </td>
						  <td width="30px"></td>
						<td>
								<blockquote>
								<?php
								echo '<script type="text/javascript">';
								echo 'jmolMenu([';
								//echo '["frame 1", "input"],';
								//                	echo '["frame 2", "standard"],';
								//			echo '["frame 3","'.$arr2[6].'","selected"],';
								for($i=7;$i<count($arr2)+1;$i++)
								{
									echo '["frame '.$i.'","'.$arr2[$i-1].'"],';

								}

								echo '["frame all","frame all"]],8);';

								echo '</script>';
								?>
								</blockquote> <script>
							      jmolRadio("spacefill 20%", "spacefill 20% <br />", "checked");
							      jmolRadio("spacefill 75%", "spacefill 75% <br />");
						              jmolBr();
							      jmolRadioGroup(["wireframe off",
							    	      ["wireframe 0.1",null,"checked"],
							      ], "<br />");
							      jmolBr();
							      jmolBr();
							      jmolCheckbox("spin on", "spin off", "spin");
                                                  </script>
						</td>
					
					</tr>
				</table>
			</div>
		
				<br /> <br /> <br />

				
							<div id="bottom" style="padding-top:100px"></div>

			<div id="footer">
				<!--footer starts-->
				<a href="<?php echo($developed_link);?>" target="_blank"
					style="font-style: italic;"><?php echo($developed_txt);?> </a>
			</div>
			<!--footer ends-->

		</div>
		<!--content ends-->
	</div>
	<!--container ends-->

</body>
</html>
