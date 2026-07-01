<?php
session_start();

require "../config/database.php";

$message = "";

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST["email"]);
    $password = $_POST["password"];

    if (empty($email) || empty($password)) {
        $message = "All fields are required.";
    }

    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = "Invalid email format.";
    }

    elseif (strlen($password) < 8) {
        $message = "Password must be at least 8 characters long.";
    }
    else {
        $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");

        $stmt->execute([$email]);

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if($user && password_verify($password, $user["password"])) {
            $_SESSION["user_id"] = $user["id"];
            $_SESSION["username"] = $user["username"];

            header("Location: /website/dashboard/dashboard.php");
        } else {
            $message = "Invalid Email or Password";
        }
    }

}

?>