<?php include("../bd.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit</title>
</head>
<body>
    <?php

        $sql = "SELECT id, name FROM Category WHERE id=".$_GET['edit'];
        // die(var_dump($sql));
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) { 
        ?>
                <form action="update.php" method="POST">
                    <input type="hidden" name="id" value="<?= $row['id'] ?>">
                    <input type="text" name="name" class="title-brands" value="<?= $row["name"] ?>">
                    <input type="submit">
                </form>
        <?php 
        }
        } else {
            echo "0 results";
        }
        
    ?>
    
</body>
</html>

