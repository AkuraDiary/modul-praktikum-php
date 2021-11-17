<?php
session_start();
 
$username = $_POST['username'];
$password = base64_encode($_POST['password']);
 
$_SESSION['username'] = $username;
header('location:home.php');
?>