<?php

require "../config/database.php";

$message = "";

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST["username"]);
    $email = trim($_POST["email"]);
    $password = $_POST["password"];

    if (empty($username) || empty($email) || empty($password)) {
        $message = "All fields are required.";
    } else {
        $check = $pdo->prepare("SELECT id FROM users WHERE email = ?");
        $check->execute([$email]);

        if ($check->rowCount() > 0) {
            $message = "Email already exist.";
        } else {
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            $stmt = $pdo->prepare("
                INSERT INTO users(username, email, password)
                VALUES(?,?,?)
            ");

            $stmt-> execute([
                $username,
                $email,
                $hashedPassword
            ]);

            header("Location: /website/login/login_form.php");
            exit();
        }
    }
}

?>