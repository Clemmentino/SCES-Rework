<?php
session_start();
unset($_SESSION['user']);
unset()
$error ="You have now logged out!";
header("location: ../index.php?error=$error");

?>