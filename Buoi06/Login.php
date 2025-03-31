<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>
<body>
    <form method="POST" action="Login.php">
        <h3>LOGIN</h3>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        
        <input type="submit" value="Login">
    </form>
    <?php
    session_start();
    if(isset($_REQUEST['username']) && isset($_REQUEST['password'])) {
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];

        // Dummy authentication for demonstration purposes
        if(strlen($username)> 4 && strlen($password) > 4) {
            $_SESSION['username'] = $username;
            header("Location: Profile.php");
            exit();
        } else {
            echo "<p style='color:red;'>Invalid username or password</p>";
        }
    }
    ?>
</body>
</html>