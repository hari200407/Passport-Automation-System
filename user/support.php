<?php
require_once "../config.php";

if (isset($_POST['send'])) {
    $msg = $_POST['message'];
    mysqli_query($conn, "INSERT INTO support_requests(message) VALUES('$msg')");
}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../assets/styles.css">
</head>
<body>
<div class="container">
<h2>Support</h2>
<form method="post">
<input type="text" name="message" placeholder="Your issue" required>
<button name="send">Send</button>
</form>
</div>
</body>
</html>
