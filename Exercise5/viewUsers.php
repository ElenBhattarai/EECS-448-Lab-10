<?php

$mysqli = new mysqli("mysql.eecs.ku.edu", "e610b971", "up3ieNgo","e610b971");

/* check connection */
if ($mysqli->connect_errno) {
  printf("Connect failed: %s\n", $mysqli->connect_error);
  exit();
}

$query = "SELECT * FROM Users";

if ($result = $mysqli->query($query)) {
    echo "<table border = 1>";
    echo "<tr><th>All Users</th></tr>";
    while ($row = mysqli_fetch_array($result)) {
        $id = $row["user_id"];
        echo "<tr><td>".$id."</td></tr>";
    }
}
?>