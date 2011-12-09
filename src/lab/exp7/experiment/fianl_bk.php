
<html>
  <head>
    <title>Simple example</title>
    <script src="../../jmol/Jmol.js" type="text/javascript"></script> <!-- REQUIRED -->
    </head>
    <script type="text/javascript">
		jmolInitialize("../../jmol/");
		
	</script>
    
    
  <body>
	<div style='padding-left:0px;width:350px;'>
 
      <script type="text/javascript">

    	jmolApplet(350, 'set axes on;set axis2Color "red";set axis3Color "red";');
    	jmolScript('draw arrow {0,0,0} {5,5,5}');
      </script>

  </div>
</body>
</html>
