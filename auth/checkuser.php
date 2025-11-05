<?php
include("../db/db.php");
session_start();

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $username = $_POST['username'];
    $password = $_POST['password'];

}

$sql = "SELECT * FROM user 
       WHERE username='$username' 
       AND password='$password'";
$query = $conn->query($sql);

if ($query->num_rows > 0) {
    $row = $query->fetch_assoc();
    $_SESSION['user'] = $username;
    $_SESSION['name'] = $row['name'];
    $_SESSION['role'] = $row['role'];
    
    if(isset($_SESSION['role'])){
        switch($_SESSION['role']){
            case 'Admin':
                $redirectPath = "../my/pages/dashboard.php";
                break;
            case 'Staff':
                $redirectPath = "../my/pages/dashboard.php";
                break;
            case 'Technician':
                $redirectPath = "../my/pages/dashboard.php";
                break;
        }
        header("Location: $redirectPath");
        exit();
    }
    
} else {
    $error = "Invalid Account!";
    header("location: ../index.php?error=$error");
}

?>