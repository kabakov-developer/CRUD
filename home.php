<?php  include('bd.php')?>
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home page</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<style type="text/css">
		#error_msg {
			width: 50%;
			margin: 5px auto;
			height: 30px;
			border: 1px solid #FF0000;
			background-color: #FFB9B8;
			color: #FF0000;
			text-align: center;
			padding-top: 10px;
		}

	</style>
</head>
<body>
	<div id="app">
		<h1>Домашняя страница</h1>
		<?php  
			if (isset($_SESSION["message"])) {
				echo "<div id='error_msg'>".$_SESSION['message']."</div>";
				unset($_SESSION['message']);
			}
		?>
		<h4>Здравстуй <?php echo $_SESSION['username']; ?></h4>
		<div><a href="logout.php">Logout</a></div>
		<p>
			Заходите, располагайтесь, чувствуйте себя как дома!
		</p>
	</div>
</body>
</html>