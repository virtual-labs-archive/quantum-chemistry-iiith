<?php include('config.php'); ?>
<html>
<head>	
	<script type="text/javascript" src="scripts/shCore.js"></script>
<!--	<script type="text/javascript" src="scripts/shBrushBash.js"></script>
	<script type="text/javascript" src="scripts/shBrushCpp.js"></script>
	<script type="text/javascript" src="scripts/shBrushCSharp.js"></script>
	<script type="text/javascript" src="scripts/shBrushCss.js"></script>
	<script type="text/javascript" src="scripts/shBrushDelphi.js"></script>
	<script type="text/javascript" src="scripts/shBrushDiff.js"></script>
	<script type="text/javascript" src="scripts/shBrushGroovy.js"></script>
	<script type="text/javascript" src="scripts/shBrushJava.js"></script>
	<script type="text/javascript" src="scripts/shBrushJScript.js"></script>
	<script type="text/javascript" src="scripts/shBrushPhp.js"></script>-->
	
	<script type="text/javascript" src="scripts/shBrushPlain.js"></script>
	<!--<script type="text/javascript" src="scripts/shBrushPython.js"></script>
	<script type="text/javascript" src="scripts/shBrushRuby.js"></script>
	<script type="text/javascript" src="scripts/shBrushScala.js"></script>
	<script type="text/javascript" src="scripts/shBrushSql.js"></script>
	<script type="text/javascript" src="scripts/shBrushVb.js"></script>
	<script type="text/javascript" src="scripts/shBrushXml.js"></script>
	-->
	<link type="text/css" rel="stylesheet" href="styles/shCore.css"/>
	<link type="text/css" rel="stylesheet" href="styles/shThemeDefault.css"/>
	<script type="text/javascript">
		SyntaxHighlighter.config.clipboardSwf = 'scripts/clipboard.swf';
		SyntaxHighlighter.all();
	</script>
</head>

<body >
<pre class="brush:plain;">
	<?php
		session_start();
		$name = $_SESSION['name'];
		$inp_file_name = $file_base."/".$name."/".$name."opt.log";
		$file=fopen($inp_file_name,'r')or die('error opening file');
		
		while($line=fgets($file))
		{
	?>
		<?php echo $line ?>
	<?php 
		} 
	?>

</pre>
</body>
</html>
