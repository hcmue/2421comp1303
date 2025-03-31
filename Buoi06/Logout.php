<?php
    session_start();
    unset($_SESSION['username']);//chỉ hủy session username
    header("Location: Login.php");
    exit();
?>