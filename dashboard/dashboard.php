<?php
session_start();

if (!isset($_SESSION["user_id"])) {
    header("Location: ../login/login_form.php");
    exit();
}

$username = $_SESSION["username"];
$authMethod = $_SESSION["auth_method"] ?? "login";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dashboard.css">
    <title>Dashboard</title>
</head>
<body>
   <div class="card">
     <h2>Welcome, <?php echo htmlspecialchars($username); ?>!</h2>

    <?php if ($authMethod == "register"): ?>
        <p>Thank you for registering! Welcome to our platform.</p>
    <?php else: ?>
        <p>You are logged in.</p>
    <?php endif; ?>
    
    
    <a href="../logout/logout.php">Logout</a>
   </div>
</body>
</html>