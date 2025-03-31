<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: Login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>PROFILE</h2>
    <h3>Xin chào: <?php echo $_SESSION['username']; ?></h3>
    <a href="Logout.php">Logout</a>
</body>
</html>