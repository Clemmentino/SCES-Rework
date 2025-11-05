<?php
session_start();
unset($_SESSION['user']);
unset($_SESSION['name']);
unset($_SESSION['role']);
$error ="You have now logged out!";
header("location: ../index.php?error=$error");

?>