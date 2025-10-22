<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

echo "Welcome to the dashboard, ".$_SESSION['username']."!";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h1>Dashboard</h1>
    <p>This is a protected area.</p>
    <a href="logout.php">Logout</a>
</body>
</html>