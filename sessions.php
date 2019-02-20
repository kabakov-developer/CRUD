<?php include("bd.php") ?>
<?php  
	session_start(); 	
	// ini_set('display_errors',1);
	// error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sessioins</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div id="app">
		<h1>Sessions</h1>
		<?php  
			if (!isset($_SESSION['counter'])) $_SESSION['counter']=0;
				echo "Вы обновили эту страницу ".$_SESSION['counter']++." раз. ";
				echo "<br><a href=".$_SERVER['PHP_SELF'].">обновить"; 
		?>
	</div>
</body>
</html>