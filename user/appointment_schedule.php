<?php
require_once "../config.php";

if (isset($_POST['schedule'])) {
    $date = $_POST['date'];
    mysqli_query($conn, "INSERT INTO appointments(appointment_date) VALUES('$date')");
}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../assets/styles.css">
</head>
<body>
<div class="container">
<h2>Schedule Appointment</h2>
<form method="post">
<input type="date" name="date" required>
<button name="schedule">Book</button>
</form>
</div>
</body>
</html>
