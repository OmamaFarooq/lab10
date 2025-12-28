<?php
session_start();
include 'db.php';
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$username = $_SESSION['username'];
$add_email = $_POST['email'];

$query = "UPDATE users SET email='$add_email' WHERE username='$username'";

mysqli_query($conn, $query);
header("Location: profile.php");
exit();
?>