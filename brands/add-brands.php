<?php include("../bd.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Category</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
	<div id="app">
		<div class="wrapper wrapper-crud">
			<div class="category">
				<div class="title">
					Новый бренд
				</div>
				<div class="add-block">
					<!-- Способ добавления значений из формы в БД -->
					<?php  
							// isset()
						if (!empty($_POST["name"])) {
						    //Вставляем данные, подставляя их в запрос
						    $sql = mysqli_query($conn, "INSERT INTO `Brands` (`name`) VALUES ('{$_POST['name']}')");
						    //Если вставка прошла успешно
						    if ($sql) {
						      echo '<p>Данные успешно добавлены в таблицу.</p>';
						    } else {
						      echo '<p>Произошла ошибка: ' . mysqli_error($conn) . '</p>';
						    }
						} else {
							echo "<div class='erro-input-value'>Поля не заполнены!!!</div>";
						}
					?>
				</div>
				<div class="edit-block">
					
					
			</div>
	</div>
		<div class="link">
			<a href="index.php">Вернуться к странице Брендов</a>
		</div>
	</div>
</div>
</body>
</html>