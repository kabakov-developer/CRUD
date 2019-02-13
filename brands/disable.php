<?php include("../bd.php") ?>

<?php

    $sql = "UPDATE Brands SET status='0' WHERE id=".$_GET["id"];
    // die(var_dump($sql));
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }


?>
