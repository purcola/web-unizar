<?php	
	if (!$_GET["lang"])
		header("Location: http://webdiis.unizar.es/~urcola/es/index.php");
	else
		switch (strtolower($_GET["lang"]))
		{
			case "":
			case "es":
				header("Location: http://webdiis.unizar.es/~urcola/es/index.php");
				break;
			case "en":
				header("Location: http://webdiis.unizar.es/~urcola/en/index.php");
				break;
			default:
				header("Location: http://webdiis.unizar.es/~urcola/es/index.php");
		}
	
	exit;
?>
