<?php
$user_id = $_POST["users"];

$mysqli = new mysqli("mysql.eecs.ku.edu", "e610b971", "up3ieNgo","e610b971");

/* check connection */
if ($mysqli->connect_errno) {
  printf("Connect failed: %s\n", $mysqli->connect_error);
  exit();
}

$query = "SELECT content FROM Posts where author_id = '$user_id'";

if ($result = $mysqli->query($query)) {
    echo "<table border = 1>";
    echo "<tr><th>All Posts from the User</th></tr>";
    while ($row = mysqli_fetch_array($result)) {
        $id = $row["content"];
        echo "<tr><td>".$id."</td></tr>";
    }
}

?>