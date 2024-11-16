<?php
session_start(); // Start the session to store session variables

// Check if the user is already logged in
if (isset($_SESSION['email'])) {
    // If logged in, redirect to dashboard
    header('Location: dashboard.php');
    exit;
}

// Predefined users (email => password)
$users = [
    'user1@email.com' => 'password1', // password for user1
    'user2@email.com' => 'password2', // password for user2
    'user3@email.com' => 'password3', // password for user3
    'user4@email.com' => 'password4', // password for user4
    'user5@email.com' => 'password5'  // password for user5
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="w-100" style="max-width: 400px;">
            <!-- Error Message -->
            <?php if (!empty($loginError)): ?>
                <div id="error-box" class="alert alert-danger" role="alert">
                    <strong><?php echo $loginError; ?></strong>
                    <ul>
                        <?php foreach ($errorDetails as $error): ?>
                            <li><?php echo $error; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>
                    
            
            <!-- Login Form -->
            <div class="card shadow-sm">
                <div class="card-body">
                    <h3 class="card-title text-center mb-4">Login</h3>
                    <form method="POST" id="login-form">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS, Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>