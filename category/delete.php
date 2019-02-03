<?php include("../bd.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Delete</title>
</head>
<body>
	<?php  
		 //Удаляем, если что
	  	if (isset($_GET['del'])) {
		    $sql = mysqli_query($conn, "DELETE FROM `Category` WHERE `id` = {$_GET['del']}");

		    if ($sql) {
		      echo "<p>Категория удалена.</p>";
		      echo "<a href='index.php'>Вернуться на страницу Категорий</a>";
		    } else {
		      echo '<p>Произошла ошибка: ' . mysqli_error($conn) . '</p>';
		    }
	  }
	    // $sql = "DELETE FROM Brands WHERE id=".$_POST["id"];
	


    
	?>
	<?php $conn->close(); ?>
</body>
</html>