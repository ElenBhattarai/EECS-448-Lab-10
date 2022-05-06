<?php
    $mysqli = new mysqli("mysql.eecs.ku.edu", "e610b971", "up3ieNgo","e610b971");

    /* check connection */
    if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
    }
    foreach ($_POST['ids'] as $delete) {
        $sql = "DELETE FROM Posts WHERE post_id = '$delete'";
        if ($result = $mysqli->query($sql)) {
            echo "<p>Post id: ".$delete." Deleted </p>";
        }
    }
?>