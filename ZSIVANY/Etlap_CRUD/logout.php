<?php
session_start();

$_SESSION['logged_in'] = false;
session_destroy();
header('location: loginForm.php');
exit();
?>