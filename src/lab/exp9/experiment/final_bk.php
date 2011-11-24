<?php
$id=1;
$axis='z';
if(!empty($_GET['id'])){
	$id=$_GET['id'];
} 
if(!empty($_GET['axis'])){
	$axis=$_GET['axis'];
}
?>
<html>
  <head>
    <title>Simple example</title>
    <script src="../../jmol/Jmol.js" type="text/javascript"></script> <!-- REQUIRED -->
    </head>
  <body>
	<div style='padding-left:0px;width:350px;'>
 	
      <script type="text/javascript">
    jmolInitialize("../../jmol");
    <?php if($axis=='y'){?>
    	jmolApplet(350, 'load xyzfiles/<?php echo($id)?>.xyz;axes MOLECULAR;set axes on;rotate y -90;');
    <?php }else{?>
    	jmolApplet(350, 'load xyzfiles/<?php echo($id)?>.xyz;axes MOLECULAR;set axes on;');
    <?php }?>
      </script>

  </div>
</body>
</html>
