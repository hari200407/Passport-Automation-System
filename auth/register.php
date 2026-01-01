<?php
require_once "../config.php";

if (isset($_POST['register'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    mysqli_query($conn, "INSERT INTO users(full_name,email,password) VALUES('$name','$email','$password')");
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../assets/styles.css">
</head>
<body>
<div class="container">
<h2>Register</h2>
<form method="post">
<input type="text" name="name" placeholder="Full Name" required>
<input type="email" name="email" placeholder="Email" required>
<input type="password" name="password" placeholder="Password" required>
<button name="register">Register</button>
</form>
</div>
</body>
</html>
