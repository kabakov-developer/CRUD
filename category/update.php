<?php include("../bd.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Update</title>
</head>
<body>
	<?php  
		// Вставляю отредактированные данные	
		$sql = "UPDATE Category SET name='".$_POST["name"]."' WHERE id=".$_POST["id"];
		$result = $conn->query($sql);
	?>
	<div>
		<a href="index.php">Вернуться к списку Брендов</a>
	</div>
</body>
</html>