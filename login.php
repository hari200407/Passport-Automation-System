<?php
if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $con = new mysqli('localhost', 'root', '', 'passport');
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    // Get user from register table
    $stmt = $con->prepare("SELECT * FROM register WHERE username = ?");
    $stmt->bind_param("s", $username,);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    // Direct compare (no hashing)
    if ($user && $user['password'] === $password) {
        echo "Login successful!";

        // Store login event
        $logStmt = $con->prepare("INSERT INTO login (username) VALUES (?)");
        $logStmt->bind_param("s", $username);
        $logStmt->execute();
        $logStmt->close();
        header("Location: dashboard.php");
        exit();

    } else {
        echo '<center>"Invalid username or password."</center><br>';
        echo '<center><a href="index.php"><button>again try</button></a></center>';
    }

    $stmt->close();
    $con->close();
}
?>
