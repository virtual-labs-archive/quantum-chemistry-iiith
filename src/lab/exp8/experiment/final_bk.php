
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

    	jmolApplet(350, 'load b.log;mo homo;mo cutoff 0.08;mo nomesh;mo fill;');
      </script>

  </div>
</body>
</html>
