<?php include("../bd.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	    // Хочу вставить отредактированные данные
	    $sql = "UPDATE Brands SET name='".$_POST["name"]."' WHERE id=".$_POST["id"];
	    // die(var_dump($sql));
	    $result = $conn->query($sql);
	    // die(var_dump($sql));
	?>	
	<div>
		<a href="index.php">Вернуться к списку Брендов</a>
	</div>
</body>
</html>
