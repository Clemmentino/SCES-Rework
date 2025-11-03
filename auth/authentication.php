<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Handle login submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    // Define user credentials (username => [password, role])
    $users = [
        'admin' => ['password' => 'admin123', 'role' => 'admin'],
        'staff' => ['password' => 'staff123', 'role' => 'staff'],
        'technician' => ['password' => 'tech123', 'role' => 'technician']
    ];

    // Check credentials
    if (isset($users[$username]) && $users[$username]['password'] === $password) {
        $_SESSION['username'] = $username;
        $_SESSION['role'] = $users[$username]['role'];

        // Set base path dynamically
        $basePath = "my/pages/";

        // Redirect based on role
        switch ($_SESSION['role']) {
            case 'admin':
                $redirectPath = $basePath . "dashboard.php";
                break;
            case 'staff':
                $redirectPath = $basePath . "reports.php";
                break;
            case 'technician':
                $redirectPath = $basePath . "dashboard.php";
                break;
            default:
                $redirectPath = "/SCES-Rework/login.php";
        }

        header("Location: $redirectPath");
        exit();
    } else {
        $error = "Invalid username or password";
    }
}
?>
