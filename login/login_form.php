<?php require_once 'login.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Login Page</title>
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <p class="subtitle">Don't have an account? <a href="../register/register_form.php">Register</a></p>

        <?php if (!empty($message)): ?>
            <div class="error"><?php echo htmlspecialchars($message, ENT_QUOTES, 'UTF-8'); ?>
        <?php endif; ?>

        <form method="POST">
        <div class="form-group">
           <label for="email">Email Address</label>
            <input type="email" name="email" placeholder="Email Address" required>
        </div>
 
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" placeholder="Password" required minlength="8">
        </div>

        <button type="submit">Login</button>
    </form>
    </div>

</body>
</html>