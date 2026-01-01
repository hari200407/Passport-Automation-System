<?php
require_once "../config.php";

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = mysqli_query($conn, "SELECT * FROM users WHERE email='$email' AND password='$password'");
    if (mysqli_num_rows($query) == 1) {
        header("Location: ../user/user_dashboard.php");
        exit;
    } else {
        $error = "Invalid credentials";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../assets/styles.css">
</head>
<body>
<div class="container">
<h2>Login</h2>
<form method="post">
<input type="email" name="email" placeholder="Email" required>
<input type="password" name="password" placeholder="Password" required>
<button name="login">Login</button>
</form>
<p><?php echo $error ?? ""; ?></p>
<a href="register.php">Create account</a>
</div>
</body>
</html>
