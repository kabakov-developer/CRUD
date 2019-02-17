<?php 
	session_start();
?>
<?php  include("bd.php")?>
<?php
	// $db = mysqli_connect("localhost","root","","myDB");
	if (isset($_POST['register_btn'])) {
		session_start();
		$username = mysqli_real_escape_string($conn ,$_POST{'username'});;
		$email = mysqli_real_escape_string($conn ,$_POST{'email'});
		$password = mysqli_real_escape_string($conn ,$_POST{'password'});
		$password2 = mysqli_real_escape_string($conn ,$_POST{'password2'});
		if ($password == $password2) {
			$password = md5($password2);
			$sql = "INSERT INTO users(username,email,password) VALUES('$username','$email','$password')";
			mysqli_query($conn,$sql);
			$_SESSION['message'] = "You are logged in";
			$_SESSION['username'] = $username;
			header("Location: home.php"); // Redirect 
		}else {
			$_SESSION['message'] = "The two passwords do not match!";
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<style type="text/css">
		form {
			width: 400px;
			margin: 0 auto;
			transform: translateY(100px);	
		}
		form tr td {
			text-align: left;
			padding-bottom: 10px;
		}
		form tr td input {
			height: 30px;
			width: 200px;
		}
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
		<?php  
			if (isset($_SESSION["message"])) {
				echo "<div id='error_msg'>".$_SESSION['message']."</div>";
				unset($_SESSION['message']);
			}
		?>
		<form action="register.php" method="POST">
			<table>
				<tr>
					<td>Username:</td>
					<td><input type="text" name="username" class="textInput"></td>
				</tr>
				<tr>
					<td>Email:</td>
					<td><input type="email" name="email" class="textInput"></td>
				</tr>
				<tr>
					<td>Password:</td>
					<td><input type="password" name="password" class="textInput"></td>
				</tr>
				<tr>
					<td>Password again:</td>
					<td><input type="password" name="password2" class="textInputs"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="register_btn" value="Register"></td>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>