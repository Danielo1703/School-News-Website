<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Accept any username/password
    $_SESSION['user_id'] = 1;  // Just set a dummy ID
    $_SESSION['username'] = $_POST['username'];
    
    // Redirect to index.php
    header("Location: first.php");
    exit();
}

// If something goes wrong, redirect back to login
header("Location: login.html");
exit();
?>