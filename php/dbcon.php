<?php
// Connection

$servername = "studentdb-maria.gl.umbc.edu";
$username = "danielo4";
$password = "danielo4";
$dbname = "danielo4";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>