<?php include("../bd.php") ?>

<?php

    $sql = "UPDATE Brands SET status='1' WHERE id=".$_GET["id"];

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }


?>
