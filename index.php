<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Smart Campus Energy System</title>
    <link rel="stylesheet" href="bootstrap-5.3.7-dist/css/bootstrap.css">

    <!-- jQuery library -->
    <script defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="bootstrap-5.3.7-dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="styles/styles.css">
    <script defer src="script/script.js"></script>
</head>
<body>
    <div>
        <div class="container">
            <div class="login-container d-flex align-items-center justify-content-center">
                <div class="login-box shadow-lg rounded-4 overflow-hidden">
                    <div class="row g-0">
                        <!-- Left side image -->
                        <div class="col-md-6 login-image bg"></div>

                            <!-- Right side form -->
                            <div class="col-md-6 d-flex align-items-center bg-white px-4 pb-4 pt-3 mb-4">
                                <div class="w-100">
                                    <div class="text-start mb-3">
                                        <img src="img/SCES.png" width="150" alt="SCES Logo" />
                                        <h5 class="mt-3 fw-bold">Welcome Back!</h5>
                                    </div>

                                    <?php if (isset($error)): ?>
                                        <div class="alert alert-danger" role="alert">
                                            <?php echo htmlspecialchars($error); ?>
                                        </div>
                                    <?php endif; ?>

                                    <form method="POST" action="auth/checkuser.php" class="needs-validation">
                                        <div class="mb-3">
                                            <input type="text" name="username" class="form-control" placeholder="Username" required />
                                        </div>
                                        <div class="mb-3">
                                            <input type="password" name="password" class="form-control" placeholder="Password" required />
                                        </div>
                                        <button type="submit" class="btn btn-success w-50 rounded-3 py-2">Log in</button>
                                    </form>
                                    <div class="text-start mt-2">
                                        <a href="#" class="lost-password-link">Lost password?</a><br />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</body>
</html>
