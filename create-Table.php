<?php include("bd.php") ?>
<?php  

$sql = "CREATE TABLE Users (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
	username VARCHAR(100) NOT NULL,
	email VARCHAR(100) NOT NULL,
	password VARCHAR(100) NOT NULL
)";


// if ($conn->query($sql) === TRUE) {
//     echo "Table Category created successfully";
// } else {
//     echo "Error creating table: " . $conn->error;
// }
?>