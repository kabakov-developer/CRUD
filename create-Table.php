<?php include("bd.php") ?>
<?php  

$sql = "CREATE TABLE Category (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
	name VARCHAR(255) NOT NULL
)";


// if ($conn->query($sql) === TRUE) {
//     echo "Table Category created successfully";
// } else {
//     echo "Error creating table: " . $conn->error;
// }
?>