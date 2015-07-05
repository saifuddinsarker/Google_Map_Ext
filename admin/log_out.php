<?php
session_start();
unset($_SESSION['type']);
unset($_SESSION['name']);
header("Location: admin_login.php?msg=You are logged out");
die();
?>