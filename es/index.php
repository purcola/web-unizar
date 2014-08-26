<?php header('Content-type: text/html; charset=utf-8'); ?>
<!DOCTYPE HTML>
<html lang="es">
<head>
	<meta charset="UTF-8" />
	<meta name="author" content="Pablo Urcola" />
	<meta name="description" content="Página personal en la Universidad de Zaragoza" />
	<meta name="keywords" content="Pablo, Urcola, Universidad, Zaragoza, Robot" />
	<title>Pablo Urcola @ Universidad de Zaragoza</title>
	<link rel="stylesheet" type="text/css" href="../main.css" />
	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-24668979-1']);
		_gaq.push(['_trackPageview']);

		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>
</head>
<body>

<!-- Begin Wrapper -->
   <div id="wrapper">
	
	   <!-- Begin Header -->
	   	<div id="header">	
		   	<?php require("header.php");  ?>	 
		</div>
		<!-- End Header -->
		
		<!-- Begin Navigation -->
		<div id="navigation">
       		<?php require("navigation.php"); ?>      	
		</div>
		<!-- End Navigation -->
		
		<!-- Begin Lef Column -->
		<div id="leftcolumn">
			<?php 
				require("../common/info.php"); 
				require("../common/language.php");
				require("../common/validator.php");
			?>
 		</div>
		<!-- End Lef Column -->
		
		<!-- Begin Right Column -->
		<div id="rightcolumn">
		<?php
			if (!$_GET["section"])
				require("home.php");
			else
				switch (strtolower($_GET["section"]))
				{
					case "":
					case "home":
						require("home.php");
					break;
					case "publications":
						require("publications.php");
					break;
					case "projects":
						require("projects.php");
					break;
					case "links":
						require("../common/links.php");
					break;
					case "videos":
						require("videos.php");
					break;
					default:
						require("home.php");
				}
		?>  
		</div>
		<!-- End Right Column -->
		
	</div>
</body>
</html>


