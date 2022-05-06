<?php

$mysqli = new mysqli("129.237.87.5", "e610b971", "up3ieNgo", "e610b971");

if ($mysqli->connect_errno) { 
    printf("Connect failed: %s\n", $mysqli->connect_error); 
    exit(); 
} 

$user_id = $_POST["user"];
if($user_id == ""){
    $query = "INSERT INTO Users(user_id) VALUES (NULL)";
} else {
    $query = "INSERT INTO Users(user_id) VALUES ('$user_id')";
}

if ($result = $mysqli->query($query)) { 
    echo "<p>Created New User</p>";
}  else {
    echo "<p>User could not be created</p>";
}

?>
