<?php

$mysqli = new mysqli("129.237.87.5", "e610b971", "up3ieNgo", "e610b971");

if ($mysqli->connect_errno) { 
    printf("Connect failed: %s\n", $mysqli->connect_error); 
    exit(); 
} 

$user_id = $_POST["user"];
$post = $_POST["post"];

if($post == ""){
    $query = "INSERT INTO Posts(content, author_id) VALUES (NULL,'$user_id')";
} else {    
    $query = "INSERT INTO Posts(content, author_id) VALUES ('$post','$user_id')";
}

if ($result = $mysqli->query($query)) { 
    echo "<p>Created New Post</p>";
}  else {
    echo "<p>Post could not be created</p>";
}

?>
