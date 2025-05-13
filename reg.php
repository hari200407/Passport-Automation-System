<?php
if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $username = $_POST['username'];
    $email    = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];

    // Check if passwords match
    if ($password !== $confirmPassword) {
        die("Passwords do not match.");
    }

    // Connect to database
    $con = new mysqli('localhost', 'root', '', 'passport');

    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    // Plain password insert (not secure!)
    $stmt = $con->prepare("INSERT INTO register (username, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username, $email, $password); // hashed password use pannala

    if ($stmt->execute()) {
        echo "Registration successful!";
        echo '<a href="index.php"><button>Go to Login</button></a>';
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $con->close();
}
?>
