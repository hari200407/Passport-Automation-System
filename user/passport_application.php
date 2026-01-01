<?php
require_once "../config.php";

if (isset($_POST['apply'])) {
    $type = $_POST['type'];
    mysqli_query($conn, "INSERT INTO applications(application_type,status) VALUES('$type','Pending')");
}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../assets/styles.css">
</head>
<body>
<div class="container">
<h2>Passport Application</h2>
<form method="post">
<input type="text" name="type" placeholder="Application Type" required>
<button name="apply">Submit</button>
</form>
</div>
</body>
</html>
