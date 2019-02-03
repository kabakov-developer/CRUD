<?php include("../bd.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Brands</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
	<div id="app">
		<div class="wrapper wrapper-brands">
			<div class="brands">
				<div class="title">
					Брэнды
				</div>
				<div class="results">
					<?php
						$sql = "SELECT id, name FROM Category";
						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
						    // output data of each row
						    while($row = $result->fetch_assoc()) { ?>
						        <div class='item-block'>
									<div class='item title-brands'><?= $row["name"] ?></div>
									<a class='delete' href='delete.php?del=<?= $row["id"]?>'></a>
									<a href='edit.php?edit=<?= $row['id'] ?>'>EDIT</a>
								</div>
						    <?php }
						} else {
						    echo "0 results";
						}
						
					?>
				</div>
				<div class="add-block">
					<p>Добавить категорию</p>
					<form action="add-category.php" method="post">
						<label for="name">Наименование Категории:</label>
						<input type="text" name="name" id="name">
						<input type="submit" value="Submit" class="submit">
					</form>
				</div>
			</div>
		</div>
		<div class="link">
			<a href="../index.php">Вернуться к главной странице</a>
		</div>
	</div>
	

<script src="../js/main.js"></script>
</body>
</html>