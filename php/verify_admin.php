<?php
session_start();
require 'dbcon.php';  // Make sure this path is correct

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $sql = "SELECT id, username, password FROM members WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->bind_result($id, $db_username, $db_password);
    $stmt->fetch();

    if ($db_username && $password == $db_password) {
        $_SESSION['admin_id'] = $id;
        $_SESSION['admin_username'] = $db_username;
        header("Location: dashboard.html");
        exit();
    } else {
        // If login fails, redirect back with error
        header("Location: login.html?error=1");
        exit();
    }
}

// If not a POST request, redirect back to login
header("Location: login.html");
exit();
?>