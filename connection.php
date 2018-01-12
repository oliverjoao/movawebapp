<?php
// Create connection
$conn = new mysqli('localhost', 'id4121120_quiz_carnaval','quiz#27','index');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>