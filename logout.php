<?php  include('bd.php')?>
<?php  
	session_start();
	session_destroy();
	unset($_SESSION['username']);
	$_SESSION["message"] = "You are now ;ogget out!";
	header("location: login.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Logout</title>
</head>
<body>
	
</body>
</html>