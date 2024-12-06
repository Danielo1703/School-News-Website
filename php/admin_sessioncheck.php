<!-- admin/check_session.php -->
<?php
session_start();
if (!isset($_SESSION['admin_id'])) {
    header("Location: login.html");
    exit();
}
?>