<?php require_once 'register.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register.css">
    <title>Registration Page</title>
</head>
<body>
    <div class="container">
        <h2>Create Account</h2>
        <p class="subtitle">Join use today. Already have account? <a href="../login/login_form.php">Login</a></p>

    <?php if (!empty($message)): ?>
        <div class="error"><?php echo htmlspecialchars($message, ENT_QUOTES, 'UTF-8'); ?></div>
    <?php endif; ?>

    <form method="POST">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" placeholder="Username">
            <p class="helper-text">3-20 characters, letters and numbers only</p>
        </div>

        <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" name="email" placeholder="Email Address" required>
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" placeholder="Password" required minlength="8">
            <p class="helper-text">Minimum 8 characters, include uppercase, numbers, and symbols</p>
        </div>

        <button type="submit">Create Account</button>
    </form>

    <p class="footer-text">By signing up, you agree to our <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a></p>
    </div>
</body>
</html>