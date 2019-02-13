<?php include("bd.php") ?>
<?php include("create-Table.php") ?>
<!-- < include("create-DB.php") > -->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SQL-test</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
	<div id="app">
		<h1>CRUD</h1>
		<div class="input-item">
			<form action="ajax/gethint.php">
				<label for="search" class="title-search">Поиск по товарам:</label>
				<input type="text" onkeyup="showHint(this.value)" name="search" id="search" disabled="disabled">
			</form>
			<p>Наименование продукта: <span id="txtHint"></span></p>

		</div>
		<div class="wrapper">
			<div class="products">
				<div class="title">
					Продукты
				</div>
				<div class="results">
					<?php
						$sql = "SELECT id, name, description, price FROM Products";
						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
						    // output data of each row
						    while($row = $result->fetch_assoc()) {
						        echo "<div class='item'>Имя продукта: " . $row["name"]. "</div><div class='item title-description'>Описание: " . $row["description"]. "</div>" . "<div class='item title-price'>Цена: ". $row["price"] . "</div>";
						    }
						} else {
						    echo "0 results";
						}
						// $conn->close();
					?>
				</div>
			</div>
			<div class="brands">
				<div class="title">
					Брэнды
				</div>
				<div class="results">
					<?php
						$sql = "SELECT name FROM Brands";
						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
						    // output data of each row
						    while($row = $result->fetch_assoc()) {
						        echo "<div class='item title-brands'>" . $row["name"]. "</div>";
						    }
						} else {
						    echo "0 results";
						}
						// $conn->close();
					?>
				</div>
				<div class="link">
					<a href="brands/index.php">
						Перейти на страницу Брэнды
					</a>
				</div>
			</div>
			<div class="category">
				<div class="title">
					Категории
				</div>
				<div class="results">
					<?php
						$sql = "SELECT name FROM Category";
						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
						    // output data of each row
						    while($row = $result->fetch_assoc()) {
						        echo "<div class='item title-category'>" . $row["name"]. "</div>";
						    }
						} else {
						    echo "0 results";
						}
						$conn->close();
					?>
				</div>
				<div class="link">
					<a href="category/index.php">
						Перейти на страницу Категории
					</a>
				</div>
			</div>
		</div>
		<!-- 	<form>
				<select name="users" onchange="showBrands(this.value)">
					<option value="">Выберите бренд:</option>
					<option value="1">Apple</option>
					<option value="2">Huawei</option>
					<option value="3">Meizu</option>
					<option value="4">Samsung</option>
					<option value="5">Xiaomi</option>
					<option value="6">LG</option>				  
				</select>
			</form>
			<br>
			<div id="resultShow"><b>Здесь отобразится список с брендами...</b></div>
	</div> -->
<script src="jquery.js"></script>
<script src="ajax/showBrands.js"></script>
<script src="ajax/showHint.js"></script>	
<script src="js/main.js"></script>
</body>
</html>