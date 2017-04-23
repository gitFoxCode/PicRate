<?php
$db_host = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "PicRate";
$db_users = "users";
$db_images = "images";
$db_comment = "comments";
$db_banned = "banned";

// Create connection
$conn = @new mysqli($db_host, $db_username, $db_password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
	// $conn->close();
?>