<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['userName'];
    $email = $_POST['userEmail'];
    $message = $_POST['userMessage'];

    $con = new mysqli("localhost", "root", "", "passport");

    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    $stmt = $con->prepare("INSERT INTO support (userName, userEmail, userMessage) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $message);

    if ($stmt->execute()) {
        echo "Support message submitted successfully.";
        echo '<a href="dashboard.php"><button>Go to Dashboard</button></a>';
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $con->close();
} else {
    echo "Invalid access.";
}
?>
